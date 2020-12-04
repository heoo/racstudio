<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 13:54:42
  from '/Users/pengjian/Project/Other/studio-smarty/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc9cf221c47a2_54330507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359cf8cad1dcc30364e594b639bd75b0af60d9f3' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/header.tpl',
      1 => 1607061277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc9cf221c47a2_54330507 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon" />

    <?php $_smarty_tpl->_assignInScope('getKey', (($tmp = @$_GET['key'])===null||$tmp==='' ? 'index' : $tmp));?>
    
    <title><?php if ($_smarty_tpl->tpl_vars['getKey']->value == 'works') {?>作品集<?php } elseif ($_smarty_tpl->tpl_vars['getKey']->value == 'serve') {?>留学申请<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value[$_smarty_tpl->tpl_vars['getKey']->value]['name'];
}?></title>
        <?php echo '<script'; ?>
 src="public/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/header.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/common.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="public/css/common.css">
    <link rel="stylesheet" href="public/css/rac.css">
    <?php echo '<script'; ?>
>
        var detailsUri = '/teacher.php?key=teacher';
        <?php if ($_smarty_tpl->tpl_vars['getKey']->value == 'case') {?>
            var detailsUri = '/details.php?key=exa';
        <?php }?>
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/spotlight.bundle.js"><?php echo '</script'; ?>
>

</head>
<body style="margin: auto;">

<div id="titlebig">

    <div class="menu" style="position: fixed; width:100%; margin: auto; box-shadow: #f0eeee 0px 1px 5px 1px ; z-index: 199; background: #fff; min-width:760px;">
        <div class="h10"></div>
        <div class="cflist home-div" id="cflist">
            <div  class="cfheadleft" id="cfheadleft">
                <div name="menudiv">
                    <img src="public/images/indexlogo.png" class="rac-logo" style="margin-top:-2px; margin-left: -8px;">
                    
                </div>
                <div class="rac-area">上海 | 广州 | 北京 | 成都| 苏州</div>
            </div>

            <div class="cfheadright" id="cfheadright">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value, 'n', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['n']->value) {
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['n']->value['url'];?>
">
                        <div name="menudiv" class="cf  <?php if ($_smarty_tpl->tpl_vars['getKey']->value == $_smarty_tpl->tpl_vars['k']->value) {?>rac-active<?php }?>">
                            <div><span><?php echo $_smarty_tpl->tpl_vars['n']->value['name'];?>
</span></div>
                        </div>
                    </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                <a class="serve-men cf  <?php if ($_smarty_tpl->tpl_vars['getKey']->value == 'serve' || $_smarty_tpl->tpl_vars['getKey']->value == 'works') {?>rac-active<?php }?>">
                    服务
                </a>
                <div class="serve-ul">
                    <div><a class="rac-menu <?php if ($_smarty_tpl->tpl_vars['getKey']->value == 'works') {?>rac-active<?php }?>" href="/serve.php?key=works">作品集</a></div>
                    <div><a class="rac-menu <?php if ($_smarty_tpl->tpl_vars['getKey']->value == 'serve') {?>rac-active<?php }?>" href="/serve.php?key=serve">留学服务</a></div>
                </div>
                                

                
            </div>

            <div class="c-right">
                <div class="in-t">在线课堂</div>
                <div class="rac-evaluation"><a href="/evaluation.php">免费评估</a></div>
                <div class="r-logo"><img src="public/images/r-logo.png" class="rac-r-logo"></div>
            </div>
        </div>
    </div>
    <div class="menu"></div>
</div>

<div class="left-menu">

    <div class="h10"></div>
    <div>
        <a data-pin-do="buttonBookmark" data-pin-custom="true" href="javascript:void(0);">
            <img src="public/images/right_p.png" height="40">
        </a>
    </div>

    <div class="clear h10"></div>
    <div class="showcalldiv"></div>

    <div class="clear h10"></div>
    <a href="javascript:void(0);">
        <div class="left-menu-yun"></div>
    </a>

    <div class="clear h10"></div>
    <a href="javascript:void(0);" onclick="window.scrollTo(0,0);">
        <div class="left-menu-top"></div>
    </a>

</div>

<div class="callshowdiv">
    <div >
        <span style="">联系电话：400-863-5573</span>
    </div>
</div><?php }
}
