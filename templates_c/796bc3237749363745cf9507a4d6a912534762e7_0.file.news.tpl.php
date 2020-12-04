<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-13 16:41:43
  from '/Users/pengjian/Project/Other/studio-smarty/templates/components/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5ddb477568e0_17971355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '796bc3237749363745cf9507a4d6a912534762e7' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/components/news.tpl',
      1 => 1599986453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5ddb477568e0_17971355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/pengjian/Project/Other/studio-smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsList']->value, 'data', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
  <div data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="course-b news-b" onclick="window.location.href='/details.php?key=news&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
'">
    <div class="news-i">
          <div class="news-i-im" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
);"></div>
    </div>
    <div class="news-tt"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>
    <div class="news-bo">
      <div class="news-m">More</div>
      <div class="news-date">  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['createtime'],"%Y-%m-%d");?>
</div>
    </div>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
