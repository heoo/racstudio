<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-19 14:43:15
  from '/Users/pengjian/Project/Other/studio-smarty/templates/components/course.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f65a88319f0f0_26130477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '204423cf73fbf28096ca5b496c8ea966585d0779' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/components/course.tpl',
      1 => 1600494839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f65a88319f0f0_26130477 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courseList']->value, 'data', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
  <div data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="course-b" onclick="window.location.href='/details.php?key=course&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
'">
      <div class="course-po">
      <div class="course-im" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
);"></div>
      </div>
    
    <div class="course-bttom">
      <div class="course-t">小组课</div>
      <div class="course-tt"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>
      <div class="course-li"></div>
      <div class="course-au">
      
          <img class="au-c-image" src="https://wcdn.racstudio.cn/upload/liuxue/5afe82dade748.jpg">
          <div class="au-n">
              <div class="au-name">XXX</div>
              <div class="au-ty"><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
          </div>
          <div class='au-l'></div>
      </div>
    </div>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
