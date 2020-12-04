<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 16:59:44
  from '/Users/pengjian/Project/Other/studio-smarty/templates/details/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f686b801c18b9_70794840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2320b19ad5552b26c093d8607fdb659135fb45d' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/details/news.tpl',
      1 => 1600678768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_5f686b801c18b9_70794840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/pengjian/Project/Other/studio-smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="grey">
    <div class="home-div news-top">
        <div class="cst_contentTP_FM c-div cbdiv_dd92bf89" style="background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
);">
            <div class="c-div cbdiv_f106c6da">
            <h1 class="c-ellipse c-heading youziku-48c15647d6414b1d865b2ee9b7d53df4 cbhead_499e84b2">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
   
            </h1>
            </div>
        </div>
    </div>
</div>


<div class="home-div news-cont">
    <div class="createtime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['createtime'],'%Y-%m-%d');?>
</div>
    <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
