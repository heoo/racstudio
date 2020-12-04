
$(function(){
    $('.myform').Validform({
        btnSubmit:'.input-button',
        ajaxPost:true,
        postonce:true,
        callback:function (data) {
            console.log(data,data.status,data.messages)
            if(data.status != 200){
                showError(data.messages)
            }
            showError(data.messages);
            setTimeout(function(){
                window.location.reload();
            }, 2000);
        },
    });

});