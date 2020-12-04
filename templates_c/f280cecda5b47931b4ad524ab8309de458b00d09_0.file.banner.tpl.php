<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 15:17:24
  from '/Users/pengjian/Project/Other/studio-smarty/templates/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc1f9843dc7b7_44173068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f280cecda5b47931b4ad524ab8309de458b00d09' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/banner.tpl',
      1 => 1606547564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc1f9843dc7b7_44173068 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['banner']->value) {?>
<div class="device">
    <div class="swiper-container index-banner">
        <div class="swiper-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                <div class="swiper-slide" style="background: url(<?php echo $_smarty_tpl->tpl_vars['b']->value['imageurl'];?>
); background-size: cover; background-repeat: no-repeat; background-color: rgba(67, 67, 67, 0); background-position: 50% 50%;">
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>

<link rel="stylesheet" href="public/css/swiper.min.css">
<?php echo '<script'; ?>
 src="public/js/swiper.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
//        lazy: true,
//        autoHeight: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
//        pagination: {
//            el: '.swiper-pagination',
//            clickable: true,
//        },
//        navigation: {
//            nextEl: '.swiper-button-next',
//            prevEl: '.swiper-button-prev',
//        },
    });

<?php echo '</script'; ?>
>
<?php }
}
}
