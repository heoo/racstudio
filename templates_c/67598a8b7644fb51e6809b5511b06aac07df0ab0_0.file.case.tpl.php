<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-13 16:44:46
  from '/Users/pengjian/Project/Other/studio-smarty/templates/components/case.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5ddbfe3b8da1_78113982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67598a8b7644fb51e6809b5511b06aac07df0ab0' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/components/case.tpl',
      1 => 1599986677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5ddbfe3b8da1_78113982 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exaList']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>

<div data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="course-b case-b" onclick="window.location.href='/details.php?key=case&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
'">
    <div class="course-po case-po">
    <div class="course-im" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
);"></div>
        
    <div class="ca-bottom" >
        <div class="ca-n">
        
            <p class="c-ellipse c-paragraph youziku-dc3470e3a1754f5197b8b7e1610f0499 paragraph_AYC841">
                <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>

            </p>
            <div class="ca-l">
            </div>
        </div>
    </div>
    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
