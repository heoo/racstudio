<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-13 16:41:51
  from '/Users/pengjian/Project/Other/studio-smarty/templates/components/school.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5ddb4f34c0a3_14722604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9207924ee506cd651a07f9db921ab7001bde01d' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/components/school.tpl',
      1 => 1599986449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5ddb4f34c0a3_14722604 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schoolList']->value, 'data', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
  <div data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="course-b school-b " onclick="window.location.href='/details.php?key=school&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
'">
    <div class="s-i-bg"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" /></div>
    <div class="s-t-box">
      <div class="s-t-name"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>
      <div class="s-t-en"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>
      <div class="s-t-t">QS排名：<span class="s-t-t-f">48</span></div>
      <div class="s-t-t">QS排名：<span class="s-t-t-f">48</span></div>
      <div class="s-t-t">QS排名：<span class="s-t-t-f">48</span></div>
      <div class="s-t-line-b">
        <img src="public/images/c-icon.jpg">
        <div class="s-t-map"><?php echo $_smarty_tpl->tpl_vars['data']->value['country'];?>
</div>
      </div>
      <div class="course-li"></div>
    </div>
  
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
