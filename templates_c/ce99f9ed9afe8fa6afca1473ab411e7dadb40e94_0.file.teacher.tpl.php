<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-13 16:41:19
  from '/Users/pengjian/Project/Other/studio-smarty/templates/components/teacher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5ddb2f4f6323_18176805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce99f9ed9afe8fa6afca1473ab411e7dadb40e94' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/components/teacher.tpl',
      1 => 1599986445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5ddb2f4f6323_18176805 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teacherList']->value, 'teacher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
?>
    <div data-id="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
" class="course-b" onclick="window.location.href='/details.php?key=teacher&id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
'">

        <div class="course-po">
        <div class="course-im" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['teacher']->value['image'];?>
);"></div>
        </div>
    
        <div class="course-bttom t-bttom">
            <div class='t-n'>
                <div class="t-l-l">
                <p class="tea-n"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
</p>
                <p class="tea-job"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['site'];?>
-<?php echo $_smarty_tpl->tpl_vars['teacher']->value['category_job_id'];?>
</p>
                </div>
                <div class='limg'>
                    <img src="public/images/l.png" /> 
                </div>
            </div>
            <div class="tea-lin"></div>

            <div class="tea-bottom">
                <div class="tea-box">
                    <img class="tea-icon" src="public/images/f-icon.jpg">
                    <p class="wjs-a c-ellipse c-paragraph youziku-48c15647d6414b1d865b2ee9b7d53df4 paragraph_BwfXWq" data-c_e_id="paragraph84e56f49">
                        城市/景观
                    </p>
                </div>
                <div class="tea-bo">
                    <p class="c-ellipse c-paragraph paragraph_yLkgCS">
                        哈佛大学
                    </p>
                    <p class="c-ellipse c-paragraph paragraph_yLkgCS2">
                        RAC Studio创始人
                    </p>
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
