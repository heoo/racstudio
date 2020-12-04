
var timenums,timenum,timer;
var choosenum=ischooses=1;

$(function(){

    $('.myform').Validform({
        btnSubmit:'.input-button',
        ajaxPost:true,
        postonce:true,
        callback:function (data) {
            console.log(data,data.status,data.messages)
            if(data.status != 200){
                showError(data.messages)
                return false
            }
            showError(data.messages);
            setTimeout(function(){
                window.location.reload();
            }, 2000);
        },
    });

    $(".closecodelogindiv").click(function(){
        $(".logindivcodegrey").hide();
        $(".logindivcheckcode").hide();
    })

    var moblie = "";
    $(".register_send_code").click(function(){
        if(timenum>0){
            return false
        }
        if($("[name='student_tel']").val() != ""){
            moblie = $("[name='student_tel']").val();
        }else{
            alert("请输入手机号");
            return;
        }
        choosenum=1;
        $(".logindivcodegrey").show();
        $(".logindivcheckcode").show();

    })



    $(".register_send_codess").click(function(){
        var moblie = $("#pwdtel").val();
        if(moblie == ""){
            alert("请输入手机号");
            return;
        }
        $.ajax({
            url: "/sms.php?key=getImgCode",
            data: {
                moblie:moblie
            },
            type: 'POST',
            error: function () {
                alert("服务器超时");
            },
            success: function (data) {
                timenums = 60;
                var k = 1;
                var json = eval('(' + data + ')');

                if(json["code"] == "1"){
                    $(".register_send_code_spanss").html("重新发送("+timenums+")");
                    if(ischooses == 1){
                        timer=window.setInterval("changetime()",1000);
                    }
                    alert("验证码发送成功");
                }else{
                    alert(json["errmsg"]);
                }
            }
        });
    })

    $("#file_post").change(function(){
        var str = $("#file_post").val();
        $("#filetext").html(str.substring(12));

        var formData = new FormData();
        formData.append('file', $('#file_post')[0].files[0]);
        formData.append('uploads', 'yes');
        $.ajax({
            url: '/evaluation.php?key=evaluation',
            type: 'POST',
            cache: false,
            data: formData,
            processData: false,
            contentType: false
        }).done(function(res) {
            var data = JSON.parse(res);
            console.log(data)
            if(data.status != 200){
                showError(data.messages)
                return false
            }
            $('input[name="student_file"]').val(data.path)
        });
    });


    $("[name='checkcode']").click(function(){

        var messagecode = $("#messagecode").val();
        $.ajax({
            url: "/sms.php",
            data: {
                moblie:moblie,
                messagecode:messagecode,
                key: 'checkImgCode'
            },
            type: 'POST',
            dataType: "JSON",
            timeout: 10000,
            error: function () {
                alert("服务器超时");
            },
            success: function (data) {
                timenum = 60;
                var k = 1;
                if(data.status  == 200){
                    if(choosenum == 1){
                        $(".stu_register_send_code_span").html("重新发送("+timenum+")");
                    }else{
                        $(".teacher_register_send_code_span").html("重新发送("+timenum+")");
                    }
                    if(ischooses == 1){
                        timer=window.setInterval("changetime()",1000);
                    }
                    $("#messagecode").val("")
                    $("#showmessagecode").attr("src","/sms.php?key=getImgCode");
                    $(".logindivcodegrey").hide();
                    $(".logindivcheckcode").hide();
                    alert("验证码发送成功");
                }else{
                   showError('验证码错误')
                    $("#showmessagecode").attr("src","/sms.php?key=getImgCode");

                }
            }
        });
    })

});
function useinputfile(){
    $("#file_post").click();
}
function changetime(){
    console.log('sss')
    ischooses = 2;
    if(timenum <= 0){
        $(".register_send_code_spanss").html("获取验证码");
        window.clearInterval(timer);
        ischooses = 1;
    }else{
        $(".register_send_code_spanss").html("重新发送("+timenum+")");
    }
    timenum--;
}
