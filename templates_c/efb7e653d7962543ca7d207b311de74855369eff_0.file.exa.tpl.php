<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 16:35:48
  from '/Users/pengjian/Project/Other/studio-smarty/templates/details/exa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6865e485c1c3_21694618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efb7e653d7962543ca7d207b311de74855369eff' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/details/exa.tpl',
      1 => 1600677336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_5f6865e485c1c3_21694618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="grey">
    <div class="home-div detail-top">
        <div class="teacher-bag">
            <div class="course-top w60">
                <div class="course-top-t-n"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>

                <div class="profession-box">
                    <div class="course-top-t-type"><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
                    <div class="course-top-t-type"><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
                </div>

                <div class="exa-mes-box mt30">
                    <div class="exa-t"><span>背景：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['background'];?>
</div>
                    <div class="exa-t"><span>语言：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['language'];?>
</div>
                    <div class="exa-t"><span>结果：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['result'];?>
</div>
                </div>
            </div>

            <div class="exa-top w40">
                <div class="course-top-t-n">辅导老师</div>
                <div class="tea-bx" onclick="window.location.href='/details.php?key=teacher&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['teacher']['id'];?>
'">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['teacher']['image'];?>
" />
                    <div class='tea-i'>
                        <div class="exa-name"><?php echo $_smarty_tpl->tpl_vars['data']->value['teacher']['name'];?>
</div>
                        <div class="tea-l"></div>
                        <div class="tea-map">
                            <img class="c-image image_YevNYf" src="public/images/tea-map.png">
                            <span><?php echo $_smarty_tpl->tpl_vars['data']->value['teacher']['profession'];?>
</span>
                        </div>
                        <div class="mes-box">
                            <div><?php echo $_smarty_tpl->tpl_vars['data']->value['teacher']['school_str'];?>
</div>
                            <div class="exa-main"><?php echo $_smarty_tpl->tpl_vars['data']->value['teacher']['main'];?>
</div>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
</div>


<div class="home-div">
    <div class="content-title">辅导后作品</div>

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
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
