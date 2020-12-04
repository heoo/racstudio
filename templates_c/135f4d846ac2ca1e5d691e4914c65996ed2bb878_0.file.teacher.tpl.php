<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-04 16:59:36
  from '/Users/pengjian/Project/Other/studio-smarty/templates/teacher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa26d787ddba6_37279476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135f4d846ac2ca1e5d691e4914c65996ed2bb878' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/teacher.tpl',
      1 => 1551956190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_5fa26d787ddba6_37279476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <div style="width:100%; background:url(<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_banner_backimg'];?>
) center; background-size:cover; height:500px;">
        <div style="width:1174px; margin:auto;">
            <div style="height:100px;"></div>
            <div style="width:390px; color:#ffffff; text-align:justify;">
                <div style="min-height:35px; text-align:left;">
                    <span style="font-size:28px; "><?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_banner_title'];?>
</span>
                </div>

                <div style="height:13px;"></div>
                <span style="font-size:14px;  line-height:24px;"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_banner_text'];?>
</span>
            </div>
            <div style="height:40px;"></div>
            <div style="border:1px #ffffff solid; width: 150px; height:35px; color:#ffffff; font-size:18px; text-align:center; line-height:35px;">
            </div>
        </div>
    </div>
    <div style="width:100%;">
        <div style="width:1174px; position: relative;  margin:auto; top:-50px; border-radius:60px;">
            <div style="width:120px; height:120px; overflow: hidden; margin:auto; border-radius:60px;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['picture'];?>
" width="120">
            </div>
        </div>
    </div>
    <div style="width:100%;  position: relative; top:-15px;">
        <div style="width:1174px; margin:auto; text-align:center;">
            <div style="width:1174px; margin:auto;">
                <div style="text-align:center; margin:auto; border-bottom:1px #d5d5d5 solid; width:237px; font-size:22px; font-weight:bold;">
                    <span style="text-transform:uppercase;"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['english_name'];?>
</span>
                    <div style="height:7px;"></div>
                </div>
                <div style="text-align:center; margin:auto; font-size: 18px; color:#666666; text-transform:uppercase;">
                    <div style="height:3px;"></div>
                    <span>About Me</span>
                </div>
            </div>
            <div style="height:50px;"></div>
            <div style="width:100%; background:url(/public//resources/index/index/img/teacher_aboutback.jpg) bottom center; background:none; height:auto; border:1px #e4e4e4 solid;">
                <div style="width:1174px; margin:auto; font-size:15px; color:#727171;">

                    <div style="clear:both; height:25px;"></div>
                    <div style="width:358px; float:left; margin-left:50px;">
                        <div style="width:358px; font-size:14px; font-weight: bold; text-align:left;">
                            <span style="color:#000000;"><span style="color:#727171;">WHO</span> AM I？</span>
                            <div style="height:7px;"></div>
                        </div>

                        <div style="height:7px;"></div>
                        <div style="width:358px; text-align:left;">
                            <span style="font-size: 14px; line-height:21px;">所在城市：</span>
                        </div>

                        <div style="height:7px;"></div>
                        <div style="width:358px; text-align:left;">
                            <span style="font-size: 14px; line-height:21px;">毕业学院：<?php echo $_smarty_tpl->tpl_vars['teacher']->value['finish_school'];?>
</span>
                        </div>

                        <div style="height:7px;"></div>
                        <div style="width:358px; text-align:left;">
                        </div>

                        <div style="height:7px;"></div>

                        <div style="background:#dbdbdb; width:100px; bottom:70px; height:25px; font-size: 14px; line-height:25px;">Follow&nbsp;</div>
                    </div>
                    <div style="width:358px; float:left;">
                        <div style="width:358px; font-size:14px; font-weight: bold; text-align:left;">
                            <span style="color:#000000;">授课教学</span>
                            <div style="height:7px;"></div>
                        </div>

                        <div style="height:7px;"></div>
                        <div style="width:358px; text-align:left;">
                            <span style="font-size: 14px; line-height:21px;">辅导方向：<?php echo $_smarty_tpl->tpl_vars['teacher']->value['profression'];?>
</span>
                        </div>

                        <div style="height:7px;"></div>
                        <div style="width:358px; text-align:left;">
                            <span style="font-size: 14px; line-height:21px;">是否面授：<?php if ($_smarty_tpl->tpl_vars['teacher']->value['teacher_status'] == 1) {?>是<?php } else { ?>否<?php }?></span>
                        </div>
                        <div style="height:7px;"></div>

                    </div>
                    <div style="width:358px; float:left;">
                        <div style="width:358px; font-size:14px; font-weight: bold; text-align:left;">
                            <span style="color:#000000;">工作经历</span>
                            <div style="height:7px;"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['describe'];?>
</div>
                        </div>

                        <div style="height:7px;"></div>
                        <div style="width:358px; text-align:left; height:50px;">
                            <span style="font-size: 14px; line-height:21px;"></span>
                        </div>

                        <div style="color:#000000; position:absolute; width:100px; bottom:70px; height:25px; font-size: 14px; line-height:25px; font-weight:bold; text-align:left;">
                            联系我们<img src="public/images/teacher_arrow.png" style="height:10px; margin-left: 5px;">
                        </div>
                    </div>

                    <div class="clear h25"></div>
                </div>
            </div>
            <div class="clear h40"></div>


        </div>
    </div>

    <div class="clear"></div>





    <div>

        <div style="width:1174px; margin:auto; text-align:center;">
            <div style="width:1174px; margin:auto;">
                <div style="text-align:center; margin:auto; border-bottom:1px #d5d5d5 solid; width:237px; font-size:22px; font-weight:bold;">
                    <span style="">设计作品</span>
                    <div style="height:7px;"></div>
                </div>
                <div style="text-align:center; margin:auto; font-size: 18px; color:#666666; text-transform:uppercase;">
                    <div style="height:3px;"></div>
                    <span>Design Works</span>
                </div>
            </div>
            <div class="h55"></div>



            <div>

                <div style="width:270px; float:left;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_works_img_one'];?>
" width="270" height="370">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_works_img_five'];?>
" width="270" height="263" style="margin-top:30px;">
                </div>
                <div style="width:270px; float:left; margin-left:30px;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_works_img_two'];?>
" width="270" height="263">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_works_img_six'];?>
" width="270" height="370" style="margin-top:30px;">
                </div>
                <div style="width:270px; float:left; margin-left:30px;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_works_img_three'];?>
" width="270" height="370">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_works_img_seven'];?>
" width="270" height="263" style="margin-top:30px;">
                </div>
                <div style="width:270px; float:left; margin-left:30px;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_works_img_four'];?>
" width="270" height="263">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/public/downimg/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher_works_img_eight'];?>
" width="270" height="370" style="margin-top:30px;">
                </div>

            </div>
        </div>
    </div>


    <div class="clear h60"></div>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
