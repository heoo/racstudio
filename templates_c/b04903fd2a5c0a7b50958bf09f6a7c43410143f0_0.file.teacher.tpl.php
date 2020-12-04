<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 13:59:10
  from '/Users/pengjian/Project/Other/studio-smarty/templates/details/teacher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68412e960364_15958088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04903fd2a5c0a7b50958bf09f6a7c43410143f0' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/details/teacher.tpl',
      1 => 1600667946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_5f68412e960364_15958088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="grey">
    <div class="home-div detail-top">
        <div class="teacher-bag">
            <div class="course-b w25">
                <div class="course-po">
                <div class="course-im h340" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
);"></div>
                </div>
            </div>
            <div class="course-top w75">
                <div class="course-top-t-n"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>

                <div class="profession-box">
                    <div class="course-top-t-type"><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
                    <div class="course-top-t-type"><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
                </div>

                <div class="mes-box mt30">
                    <div><?php echo $_smarty_tpl->tpl_vars['data']->value['school_str'];?>
</div>
                    <div><?php echo $_smarty_tpl->tpl_vars['data']->value['main'];?>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-div detail-container">
    <div class="detail-content">
        <div class="content-title">基本信息</div>
        <div class="t-i-title"><span>当前城市：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['site'];?>
</div>
        <div class="t-i-title"><span>基本介绍：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['basicprofile'];?>
</div>
        <div class="t-i-title"><span>学生偏好：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['studentprefs'];?>
</div>
        <div class="t-i-title"><span>获奖经历：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['prize'];?>
</div>
        <div class="t-i-title"><span>熟悉领域：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['domain'];?>
</div>
        <div class="t-i-title"><span>工作经历：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['workexperience'];?>
</div>

        <div class="grey-line"></div>
       
        <div class="content-title">相关作品</div>

        <div class="case-info spotlight-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['caseArr'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <a class="spotlight case-img" href="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
            </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

    <div class="detail-recom">
        <div class="content-title">辅导案例</div>
        <div class="detail-course ajaxCase"></div>
    </div>
</div>
<?php echo '<script'; ?>
>
$(function(){
    //右侧案例
    getRacData({ type: 'exa', limit: 6 });
})
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
