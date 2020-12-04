<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 13:13:47
  from '/Users/pengjian/Project/Other/studio-smarty/templates/details/course.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68368b0d34b8_56261805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be84f4d2877aa0f7d7e43bf995ba596b43241fc7' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/details/course.tpl',
      1 => 1600509441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_5f68368b0d34b8_56261805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/pengjian/Project/Other/studio-smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="grey">
    <div class="home-div detail-top">
        <div class="course-b w40">
            <div class="course-po">
              <div class="course-im h340" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url(<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
);"></div>
            </div>
        </div>
        <div class="course-top w60">
            <div class="course-top-t-n"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</div>

            <div class="course-top-t-type"><?php echo $_smarty_tpl->tpl_vars['data']->value['category_course_id'];?>
</div>
            <div class="course-top-name"><span>所属专业：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
            <div class="course-top-name"><span>课程难度：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
            <div class="course-top-name"><span>课程类别：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['profession'];?>
</div>
            <div class="course-top-name"><span>授课方式：</span><?php echo $_smarty_tpl->tpl_vars['data']->value['coursetype'];?>
</div>
            <div class="course-top-name"><span>授课时间：</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['coursetime'],'%Y-%m-%d %H:%M:%S');?>
</div>
            <div class="course-top-status"><?php echo $_smarty_tpl->tpl_vars['data']->value['status'];?>
</div>
        </div>
    
    </div>
</div>

<div class="detail-type-box">
    <div class="home-div change-type">
        <div class="detail-change change-active">课程老师</div>
        <div class="detail-change" >课程详情</div>
    </div>
</div>

<div class="home-div detail-container">
    <div class="detail-content">
        <div class="content-title">课程老师</div>
        <div class="content-tea">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['teacher'], 'teacher', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['teacher']->value) {
?>
                <div class="tea-bx" onclick="window.location.href='/details.php?key=teacher&id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
'">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['image'];?>
" />
                    <div class='tea-i'>
                        <div><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
</div>
                        <div class="tea-l"></div>
                        <div class="tea-map">
                            <img class="c-image image_YevNYf" src="public/images/tea-map.png">
                            <span><?php echo $_smarty_tpl->tpl_vars['teacher']->value['profession'];?>
</span>
                        </div>
                        <div class="mes-box">
                            <div><?php echo $_smarty_tpl->tpl_vars['teacher']->value['school_str'];?>
</div>
                            <div><?php echo $_smarty_tpl->tpl_vars['teacher']->value['main'];?>
</div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
           <div class="grey-line"></div>
           
        <div class="content-title">课程详情</div>
        <div class="info"> <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div>
    </div>
    <div class="detail-recom">
        <div class="content-title">相关课程</div>
        <div class="detail-course ajaxCourse"></div>
    </div>
</div>
<?php echo '<script'; ?>
>
$(function(){
    //初始化课程
    getRacData({ type: 'course' });
})
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
