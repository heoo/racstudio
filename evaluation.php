<?php
/**
 * Example Application
 *
 * @package Example-application
 */
session_start();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require './configs/configs.php';
require './libs/Smarty.class.php';
if($_POST){

    if(isset($_POST['submit']) && $_POST['submit'] == 'password'){
        if( isset($_POST['password']) && $_POST['password'] === 'studio@20190314'){
            $_SESSION['password'] = $_POST['password'];
            header('Location:/evaluation.php?key=evaluation&export=Yes&page=1');
        }
       die(json_encode(array('status'=>5001,'messages'=>'密码错误')));
    }

    $dsn = "mysql:dbname={$configs['databases']['dbname']};host={$configs['databases']['host']}";
    $dbh = new PDO($dsn, $configs['databases']['username'], $configs['databases']['password']);
    $dbh->exec('set names utf8');

    if(isset($_POST['delect']) && $_POST['delect'] == 'Yes' && isset($_SESSION['password']) && $_SESSION['password']==='studio@20190314'){
        $ids = isset($_POST['ids']) ? $_POST['ids'] : array();
        if(is_array($ids) && count($ids) >0){
            $idsStr = implode(',',$ids);
            $sql = "SELECT `id`,`student_file` FROM `evaluation` WHERE `id` IN ($idsStr)";
            $res = $dbh->prepare($sql);
            $res->execute();
            if($dbh->errorCode() == 0000){
                $data = $res->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $id) {
                    if(file_exists( '.'.$id['student_file'])){
                        @unlink('.'.$id['student_file']);
                    }
                    $delSql = "DELETE  FROM `evaluation` WHERE id={$id['id']}";
                    $delStmt = $dbh->prepare($delSql);
                    $delStmt->execute();
                    $delRow = $delStmt->rowCount();
                    if(!$delRow) {
                        die(json_encode(array('status'=>5006,'messages'=>"数据{$id['id']}删除失败")));
                    }
                }
                die(json_encode(array('status'=>200,'messages'=>"删除成功")));

            }else{
                die(json_encode(array('status'=>5007,'messages'=>'数据不存在')));
            }
        }else{
            die(json_encode(array('status'=>5008,'messages'=>'请选择要删除的数据')));
        }
    }else if(isset($_POST['submit']) && $_POST['submit'] == 'yes'){
        $postData = $_POST;

        if(!isset($postData['student_code']) || empty($postData['student_code'])){
            die(json_encode(array('status'=>5002,'messages'=>'请输入手机验证码')));
        }

        if($_SESSION['smsCode'] !== $postData['student_code']){
            die(json_encode(array('status'=>5003,'messages'=>'手机验证码错误')));
        }
        $tmp = array();
        if($postData && is_array($postData)){
            foreach ($postData as $key=>$value){
                $tmp[$key] = safe_replace($value);
            }
        }else{
            die(json_encode(array('status'=>5004,'messages'=>'提交信息错误')));
        }

        $sql = "INSERT INTO `evaluation` (`student_name` ,`student_school`,`student_major`,`student_gpa`,`student_langscore`,`student_weixin`,`student_tel`,`student_email`,`student_file`,`student_software`,`student_country`,`student_applyschool`,`student_applymajor`,`student_applytype`,`student_time`) VALUES ('{$tmp['student_name']}', '{$tmp['student_school']}','{$tmp['student_major']}','{$tmp['student_gpa']}','{$tmp['student_langscore']}','{$tmp['student_weixin']}','{$tmp['student_tel']}','{$tmp['student_email']}','{$tmp['student_file']}','{$tmp['student_software']}','{$tmp['student_country']}','{$tmp['student_applyschool']}','{$tmp['student_applymajor']}','{$tmp['student_applytype']}','{$tmp['student_time']}')";
        $stmt = $dbh->exec($sql);
        if(empty($stmt) || $dbh->errorCode()!= 0000){
            die(json_encode(array('status'=>5005,'messages'=>'存储数据失败，请联系工作人员')));
        }else{
            die(json_encode(array('status'=>200,'messages'=>'提交成功')));
        }
    }else if (isset($_POST['uploads']) && $_POST['uploads'] == 'yes'){
        require_once ('./vendor/uploads/fileUploadPlugin.php');
        $uploadsObj = new fileUploadPlugin();
        $res = $uploadsObj->upload('file',$_FILES);
        die($res);
    }
}else{

    $smarty = new Smarty;
    $smarty->cache_dir = 'cache';
    $smarty->debugging = false;
    $smarty->caching = false;
    $smarty->cache_lifetime = 120;
    $smarty->assign('nav',$configs['nav']);



    if(isset($_GET['export']) && $_GET['export'] === 'Yes'){

        if(isset($_SESSION['password']) && $_SESSION['password']=='studio@20190314'){

            $data = array();
            $dsn = "mysql:dbname={$configs['databases']['dbname']};host={$configs['databases']['host']}";
            $dbh = new PDO($dsn, $configs['databases']['username'], $configs['databases']['password']);
            $dbh->exec('set names utf8');
            $page = intval(isset($_GET['page']) ? $_GET['page'] : 1);
            $nums = intval(isset($_GET['nums']) ? $_GET['nums'] : 10);
            $start = intval(($page-1)*$nums);

            $sql = "SELECT * FROM `evaluation` ORDER BY `id` DESC LIMIT {$start},{$nums}";
            $res = $dbh->prepare($sql);
            $res->execute();
            if($dbh->errorCode() == 0000){
                $data = $res->fetchAll(PDO::FETCH_ASSOC);

                $countSql = "SELECT COUNT(`id`) FROM `evaluation`";
                $countRes = $dbh->prepare($countSql);
                $countRes->execute();
                $count = $countRes->fetch();

                require_once ('./vendor/pages/numPage.php');
                $pageObj = new numPage($count[0],$page,$nums);
                $smarty->assign('pageStr',$pageObj->GetPager());
                if (isset($_GET['download']) && $_GET['download'] == 'Yes'){
                    $excel = new Office();
                    //设置表头：
                    $head = array('申请编号','申请时间','姓名', '学校','专业','平均成绩','语言成绩','微信号','手机号','邮箱','作品','软件','申请国家','目标学校','申请专业','申请类别','入学时间');

                    //数据中对应的字段，用于读取相应数据：
                    $keys = array('id','created','student_name' ,'student_school','student_major','student_gpa','student_langscore','student_weixin','student_tel','student_email','student_file','student_software','student_country','student_applyschool','student_applymajor','student_applytype','student_time');
                    $excel->outdata('申请信息', $data, $head, $keys);
                }
                $smarty->assign('data',$data);
            }
            $smarty->display('export.tpl');
        }else{

            $smarty->display('admin.tpl');
        }
    }else{
        $smarty->display('evaluation.tpl');
    }

}



class Office
{

    /**
     * 导出excel表
     * $data：要导出excel表的数据，接受一个二维数组
     * $name：excel表的表名
     * $head：excel表的表头，接受一个一维数组
     * $key：$data中对应表头的键的数组，接受一个一维数组
     * 备注：此函数缺点是，表头（对应列数）不能超过26；
     *循环不够灵活，一个单元格中不方便存放两个数据库字段的值
     */
    public function outdata($name = '测试表', $data = array(), $head = array(), $keys = array())
    {
        $count = count($head);  //计算表头数量
        require_once './vendor/autoload.php';

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        for ($i = 65; $i < $count + 65; $i++) {     //数字转字母从65开始，循环设置表头：
            $sheet->setCellValue(strtoupper(chr($i)) . '1', $head[$i - 65]);
        }

        /*--------------开始从数据库提取信息插入Excel表中------------------*/


        foreach ($data as $key => $item) {             //循环设置单元格：
            //$key+2,因为第一行是表头，所以写到表格时   从第二行开始写

            for ($i = 65; $i < $count + 65; $i++) {     //数字转字母从65开始：
                $sheet->setCellValue(strtoupper(chr($i)) . ($key + 2), $item[$keys[$i - 65]]);
                $spreadsheet->getActiveSheet()->getColumnDimension(strtoupper(chr($i)))->setWidth(20); //固定列宽
            }

        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $name . '.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');

        //删除清空：
        $spreadsheet->disconnectWorksheets();
        unset($spreadsheet);
        exit;
    }
}



    function safe_replace($string) {
    $string = str_replace('%20','',$string);
    $string = str_replace('%27','',$string);
    $string = str_replace('%2527','',$string);
    $string = str_replace('*','',$string);
    $string = str_replace('"','"',$string);
    $string = str_replace("'",'',$string);
    $string = str_replace('"','',$string);
    $string = str_replace(';','',$string);
    $string = str_replace('<','<',$string);
    $string = str_replace('>','>',$string);
    $string = str_replace("{",'',$string);
    $string = str_replace('}','',$string);
    $string = str_replace('\\','',$string);
    return $string;
}
