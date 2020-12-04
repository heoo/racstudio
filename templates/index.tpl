{include file="header.tpl"}
<script>
$(function(){
    //初始化课程
    getRacData({ type: 'course' });
    //初始化师资
    getRacData({ type: 'teacher' });
    //初始化案例
    getRacData({ type: 'exa', limit: 6 });
})
</script>


{include file="banner.tpl"}

{include file="index/service.tpl"}

{include file="index/course.tpl"}

{include file="index/teacher.tpl"}

{include file="index/exa.tpl"}

{include file="index/charting.tpl"}

{include file="index/design.tpl"}

{* {include file="index/contact.tpl"} *}

{include file="foot.tpl"}