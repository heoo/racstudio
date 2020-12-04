<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-22 10:40:33
  from '/Users/pengjian/Project/Other/studio-smarty/templates/details/school.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f696421031876_15920829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a737475eea49b94bf7dc432304467baa5cf951' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/details/school.tpl',
      1 => 1600742431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_5f696421031876_15920829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="grey">
    <div class="school-top" style="background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['caseArr'][0];?>
);">




    <div class="home-div detail-top">
        <div class="teacher-bag">
            <div class="course-b w25">
                <div class="course-po">
                <div class="course-im h340" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
);"></div>
                </div>
            </div>
            <div class="school-top w25">
                <div class="course-top-t-n"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>

                <div class="school-nameen"><?php echo $_smarty_tpl->tpl_vars['data']->value['nameen'];?>
</div>
                <div class="course-top-t-type"><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
               
                <div class="school-mes-box mt30">
                    <div class="school-site"><?php echo $_smarty_tpl->tpl_vars['data']->value['site'];?>
</div>
                </div>
                <div class="school-btn"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" target="_blank"> 进入官网</a></div>
            </div>

            <div class="school-top w50 school-top-right">
                <div class="school-qs">
                    <div class="mb15"><span>QS建筑排名：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['qsb'];?>
</div>
                    <div class="mb15"><span>QS排名：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['qs'];?>
</div>
                </div>
                <div class="school-off">
                    <div class=""><?php echo $_smarty_tpl->tpl_vars['data']->value['offernum'];?>
</div>
                    <div class="">OFFER</div>
                </div>
            </div>

        </div>
    </div>






    </div>
</div>


<div class="home-div news-cont">
    <div class="content-title">基本信息</div>
    <div class="school-t"><div class="school-t-t">院校地址：</div><div ><?php echo $_smarty_tpl->tpl_vars['data']->value['site'];?>
</div></div>
    <div class="school-t"><div class="school-t-t">基本介绍：</div><div><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div></div>
    <div class="school-t"><div class="school-t-t">院校优势：</div><div><?php echo $_smarty_tpl->tpl_vars['data']->value['advantage'];?>
</div></div>

    <div class="grey-line"></div>

    <div class="content-title">院校图片</div>
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
