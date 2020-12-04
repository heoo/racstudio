<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 10:07:32
  from '/Users/pengjian/Project/Other/studio-smarty/templates/index/course.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f680ae4439b64_74185581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bdfadbdee79ec138be0c5c83dbf21d2d7d04ead' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/index/course.tpl',
      1 => 1600497691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f680ae4439b64_74185581 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="h80"></div>
<div class="home-div" id="serviceshowdiv">
    <div class="title">
        <div class="tt">
            <div class='m-title'>RAC课程</div>
            <div class='e-title'>体系</div>
        </div>


        <div class="bt">
            <div class="line"></div>
            <div class='bt-title'>COURSE SYSTEM</div>
        </div>
    </div>

<div class="rac-type">
    <div class="cp type-is t-active" data-val='0'>全部</div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courseType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
        <div class="cp type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="h20"></div>

    <div class="course-d ajaxCourse"></div>
    
    <div class="b-d">
        <div class="b-more changeCourse" >换一批</div>
        <div class="b-more"> <a href="/list.php?key=course">查看更多</a></div>
    </div>
</div>

<?php }
}
