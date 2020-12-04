session_start();
require_once './vendor/autoload.php';
require_once  './vendor/captcha/ValidateCode.php';
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use Captcha\ValidateCode;

if($_POST && $_POST['key']=='checkImgCode'){
    if($_SESSION['imgCode'] === $_POST['messagecode']){
        AlibabaCloud::accessKeyClient('', '')->regionId('cn-hangzhou')->asGlobalClient();
        try {
            $code = getCode();
            $result = AlibabaCloud::rpcRequest()
                ->product('Dysmsapi')
                ->version('2017-05-25')
                ->action('SendSms')
                ->method('POST')
                ->options(array(
                    'query' => array(
                        'PhoneNumbers'=>$_POST['moblie'],
                        'SignName'=>'专筑iarch',
                        'TemplateCode'=>'SMS_161596929',
                        'TemplateParam'=>json_encode(array("code"=>$code))
                    ),
                ))
                ->request();
            if($result->Code == 'OK'){
                $_SESSION['smsCode'] = $code;
                die(json_encode(array('status'=>200,'messages'=>'手机验证码已发送')));
            }else{
                die(json_encode(array('status'=>5012,'messages'=>'验证码发送失败')));
            }
        } catch (ClientException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        } catch (ServerException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        }

    }else{
        die(json_encode(array('status'=>5011,'messages'=>'请输入图形验证码')));
    }
}

if($_GET['key'] == 'getImgCode'){
    $_SESSION['imgCode'] = '';
    $vc = new  ValidateCode();
    $vc->doimg();
    $_SESSION['imgCode'] = $vc->getCode();
    exit;
}

function getCode() {
    $code = '';
    $charset = '1234567890';
    $_len = strlen($charset)-1;
    for ($i=0; $i<6; $i++) {
        $code .= $charset[mt_rand(0,$_len)];
    }
    return $code;
}