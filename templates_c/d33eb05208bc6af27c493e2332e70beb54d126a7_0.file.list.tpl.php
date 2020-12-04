<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 15:24:17
  from '/Users/pengjian/Project/Other/studio-smarty/templates/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc1fb2176f302_74011181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd33eb05208bc6af27c493e2332e70beb54d126a7' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/list.tpl',
      1 => 1606548251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_5fc1fb2176f302_74011181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('currentKey', (($tmp = @$_GET['key'])===null||$tmp==='' ? 'index' : $tmp));?>
<div class="h20"></div>

<?php echo '<script'; ?>
>
$(function(){
var page = 1
const type = `$<?php echo $_smarty_tpl->tpl_vars['currentKey']->value;?>
`.replace('$','')
    //初始化课程
    getRacData({ type: type,limit: 12, page: page});
    $(window).scroll(function() {
        if ($(document).scrollTop() >= $(document).height() - $(window).height()) {
            getRacData({ type: type,limit: 12, page: page++, append: true });
            console.log("滚动条已经到达底部为" + $(document).scrollTop());
        }
    });

}) 
<?php echo '</script'; ?>
>
<?php if (in_array($_smarty_tpl->tpl_vars['currentKey']->value,array('charting','course'))) {?>
    <div class="type-search">
        <div class="home-div">
            <div class="c-div div_Wp0lg2 sdfghj">
                <h1 class="c-heading heading_HYzMbV">课程</h1>
                <div class="c-div div_J3B7Bs asdvf">
                    <p class="c-paragraph paragraph_s0ZkYb">Course</p>
                </div>
            </div>
            <div class="t-s-box">
                <div class="rac-type list-type">
                    <div class="s-top-tit ">课程</div>
                    <div class="cp type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courseType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">专业</div>
                    <div class="cp profession-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['professionType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp profession-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">年份</div>
                    <div class="cp year-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yearType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp year-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxCourse"></div>
<?php } elseif ($_smarty_tpl->tpl_vars['currentKey']->value == 'teacher') {?>
    <div class="type-search">
        <div class="home-div">
            <div class="c-div div_Wp0lg2 sdfghj">
                <h1 class="c-heading heading_HYzMbV">师资</h1>
                <div class="c-div div_J3B7Bs asdvf">
                    <p class="c-paragraph paragraph_s0ZkYb">Faculty</p>
                </div>
            </div>
            <div class="t-s-box">
                <div class="rac-type list-type">
                    <div class="s-top-tit" style="width:65px; text-align:left;">专业</div>
                    <div class="cp teacher-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['professionType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp teacher-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">授课地点</div>
                    <div class="cp site-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['siteType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp site-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxTeacher"></div>
<?php } elseif ($_smarty_tpl->tpl_vars['currentKey']->value == 'exa') {?>

    <div class="type-search">
        <div class="home-div">
            <div class="c-div div_Wp0lg2 sdfghj">
                <h1 class="c-heading heading_HYzMbV">案例</h1>
                <div class="c-div div_J3B7Bs asdvf">
                    <p class="c-paragraph paragraph_s0ZkYb">Teaching case</p>
                </div>
            </div>
            <div class="t-s-box">
                <div class="rac-type list-type">
                    <div class="s-top-tit">专业</div>
                    <div class="cp case-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['professionType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp case-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">学期</div>
                    <div class="cp semester-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['semesterType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp semester-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxCase"></div>
<?php } elseif ($_smarty_tpl->tpl_vars['currentKey']->value == 'news') {?>

    <div class="type-search">
        <div class="home-div">
            <div class="c-div div_Wp0lg2 sdfghj">
                <h1 class="c-heading heading_HYzMbV">资讯</h1>
                <div class="c-div div_J3B7Bs asdvf">
                    <p class="c-paragraph paragraph_s0ZkYb">News</p>
                </div>
            </div>
            <div class="t-s-box">
                <div class="rac-type list-type">
                    <div class="s-top-tit">专栏</div>
                    <div class="cp news-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp news-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxNews"></div>
<?php } elseif ($_smarty_tpl->tpl_vars['currentKey']->value == 'school') {?>

    <div class="type-search">
        <div class="home-div">
            <div class="c-div div_Wp0lg2 sdfghj">
                <h1 class="c-heading heading_HYzMbV">选校</h1>
                <div class="c-div div_J3B7Bs asdvf">
                    <p class="c-paragraph paragraph_s0ZkYb" style="width:180px;">School selection</p>
                </div>
            </div>
            <div class="t-s-box">
                <div class="rac-type list-type">
                    <div class="s-top-tit">专业</div>
                    <div class="cp school-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['professionType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp school-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">国家</div>
                    <div class="cp country-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countryType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp country-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">排名</div>
                    <div class="cp ranking-type-is t-active" data-val='0'>全部</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rankingType']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <div class="cp ranking-type-is"  data-val="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxSchool"></div>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
