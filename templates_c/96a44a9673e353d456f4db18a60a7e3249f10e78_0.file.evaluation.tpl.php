<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 17:32:31
  from '/Users/pengjian/Project/Other/studio-smarty/templates/evaluation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc4bc2f6df018_27659840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96a44a9673e353d456f4db18a60a7e3249f10e78' => 
    array (
      0 => '/Users/pengjian/Project/Other/studio-smarty/templates/evaluation.tpl',
      1 => 1606728747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5fc4bc2f6df018_27659840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="public/css/validform.css">
<?php echo '<script'; ?>
 src="public/js/Validform_v5.3.2_min.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="public/css/rac-evaluation.css">

<?php echo '<script'; ?>
 src="https://cdn.bootcdn.net/ajax/libs/qiniu-js/3.0.3/qiniu.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="public/layui/css/layui.css" />
<?php echo '<script'; ?>
 src="public/layui/layui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/rac-evaluation.js"><?php echo '</script'; ?>
>

<div>

    <div class="eva-bg">
        <div class="banner_text">
            <h1>优秀的设计教育中心</h1>
            <p>RACstudio开阔的国际视眼，先进的教学理念，优质的学生服务领先于设计同类行业。</p>
        </div>
        <div class='banner_'></div>
    </div>


    <div class="h60"></div>
        <div class="form-div layui-container">

        <div class="layui-nav-title layui-anim-upbit">
            <p>免费评估</p>
            <p>ASSESSMENT</p>
        </div>

        <div class="layui-form">
            <div class="layui-form-item" id="region">
                <label class="layui-form-label">意向校区<span class="red">*</span></label>
                <div class="layui-input-block">
                    <input type="radio" name="region" value="上海" title="上海"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>上海</div></div>
                    <input type="radio" name="region" value="广州" title="广州"><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon layui-anim-scaleSpring"></i><div>广州</div></div>
                    <input type="radio" name="region" value="北京" title="北京"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>北京</div></div>
                </div>
                <div class="layui-input-block">
                    <input type="radio" name="region" value="成都" title="成都"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>成都</div></div>
                    <input type="radio" name="region" value="待定" title="待定"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>待定</div></div>
                </div>
            </div>
            <div class="layui-form-item" id="needagentpaper">
                <label class="layui-form-label">是否需要中介文书<span class="red">*</span></label>
                <div class="layui-input-block">
                    <input type="radio" name="needagentpaper" value="是" title="是"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>是</div></div>
                    <input type="radio" name="needagentpaper" value="否" title="否"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>否</div></div>
                    <input type="radio" name="needagentpaper" value="待定" title="待定"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>待定</div></div>
                </div>
            </div>
            <div class="layui-form-item" id="des_country">
                <label class="layui-form-label">准备申请国家地区<span class="red">*</span><p style="color: darkgrey;margin:0 3px;">可以多选</p></label>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="des_country0" lay-skin="primary" title="美国"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>美国</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_country1" lay-skin="primary" title="加拿大"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>加拿大</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_country2" lay-skin="primary" title="欧洲"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>欧洲</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="des_country3" lay-skin="primary" title="英国"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>英国</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_country4" lay-skin="primary" title="澳洲"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>澳洲</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_country5" lay-skin="primary" title="日本"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>日本</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="des_country6" lay-skin="primary" title="德国"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>德国</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_country7" lay-skin="primary" title="香港"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>香港</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_country8" lay-skin="primary" title="新加坡"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>新加坡</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block">
                    <input type="checkbox" name="des_country9" lay-skin="primary" title="Other"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>Other</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
            </div>
            <div class="layui-form-item" id="des_degree">
                <label class="layui-form-label">准备申请的学历<span class="red">*</span></label>
                <div class="layui-input-block flex">
                    <select name="xueli" lay-filter="xueli">
                    <option value="">请选择</option>
                    <option value="0">申请硕士</option>
                    <option value="1">申请本科</option>
                    <option value="2">申请博士</option>
                    </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择</dd><dd lay-value="0" class="">申请硕士</dd><dd lay-value="1" class="">申请本科</dd><dd lay-value="2" class="">申请博士</dd></dl></div>
                    <div style="padding: 0 5px;"></div>
                    <select name="des_degree">
                    
                    </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-disabled">没有选项</dd></dl></div>
                </div>
            </div>
            <div class="layui-form-item" id="des_major">
                <label class="layui-form-label">准备申请的专业<span class="red">*</span><p style="color: darkgrey;margin:0 3px;">可以多选</p></label>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="des_major0" lay-skin="primary" title="建筑"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>建筑</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_major1" lay-skin="primary" title="景观"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>景观</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_major2" lay-skin="primary" title="城设Urban Design"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>城设Urban Design</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="des_major3" lay-skin="primary" title="室内"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>室内</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_major4" lay-skin="primary" title="城规Planning"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>城规Planning</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_major5" lay-skin="primary" title="MDes"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>MDes</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block">
                    <input type="checkbox" name="des_major6" lay-skin="primary" title="工业设计"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>工业设计</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_major7" lay-skin="primary" title="服务设计"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>服务设计</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="des_major8" lay-skin="primary" title="其他专业"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>其他专业</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="des_major9" lay-skin="primary" title="人机交互HCI"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>人机交互HCI</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="des_major10" lay-skin="primary" title="界面设计/用户体验设计UI/UX"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>界面设计/用户体验设计UI/UX</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="des_major11" lay-skin="primary" title="数字媒体设计 Digital Media Design"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>数字媒体设计 Digital Media Design</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
            </div>
            <div class="layui-form-item" id="des_year">
                <label class="layui-form-label">申请入学年份<span class="red">*</span></label>
                <div class="layui-input-block flex">
                    <input type="radio" name="des_year" value="2021年秋季" title="2021年秋季"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>2021年秋季</div></div>
                    <input type="radio" name="des_year" value="2022年春季" title="2022年春季"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>2022年春季</div></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="radio" name="des_year" value="2022年秋季" title="2022年秋季"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>2022年秋季</div></div>
                    <input type="radio" name="des_year" value="2023年春季" title="2023年春季"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>2023年春季</div></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="radio" name="des_year" value="2023年秋季" title="2023年秋季"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>2023年秋季</div></div>
                    <input type="radio" name="des_year" value="2024年春季" title="2024年春季"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>2024年春季</div></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="radio" name="des_year" value="2024年秋季" title="2024年秋季"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>2024年秋季</div></div>
                    <input type="radio" name="des_year" value="Other" title="Other"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>Other</div></div>
                </div>
            </div>
            <fieldset class="layui-elem-field layui-field-title">
                <legend>您的现状</legend>
            </fieldset>
            <div class="layui-form-item" id="realname">
                <label class="layui-form-label">姓名<span class="red">*</span></label>
                <div class="layui-input-block mr20">
                    <input type="text" name="realname" autocomplete="off" placeholder="请输入姓名" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" id="wxid">
                <label class="layui-form-label">微信<span class="red">*</span></label>
                <div class="layui-input-block mr20">
                    <input type="text" name="wxid" autocomplete="off" placeholder="请输入微信" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" id="phone">
                <label class="layui-form-label">手机<span class="red">*</span></label>
                <div class="layui-input-block mr20">
                    <input type="text" name="phone" autocomplete="off" placeholder="请输入手机号码" class="layui-input">
                    <div class="layui-form-mid layui-word-aux">如没有国内手机，请在下面邮箱处输入能联系上的邮箱</div>
                </div>
            </div>
            <div class="layui-form-item" id="email">
                <label class="layui-form-label">邮箱<span style="opacity: 0;" class="red">*</span></label>
                <div class="layui-input-block mr20">
                <input placeholder="请输入邮箱" type="email" name="email" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" id="cur_school">
                <label class="layui-form-label">在读/毕业院校<span class="red">*</span></label>
                <div class="layui-input-block flex mr20">
                    <select name="cur_school" lay-filter="cur_school">
                    <option value="">请选择</option>
                    <option value="本科在读，请输入学校名称">本科在读，请输入学校名称</option>
                    <option value="本科已毕业，请输入学校名称">本科已毕业，请输入学校名称</option>
                    <option value="研究生在读，请输入学校名称">研究生在读，请输入学校名称</option>
                    <option value="研究生已毕业，请输入学校名称">研究生已毕业，请输入学校名称</option>
                    <option value="高中，请输入学校名称">高中，请输入学校名称</option>
                    </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择</dd><dd lay-value="本科在读，请输入学校名称" class="">本科在读，请输入学校名称</dd><dd lay-value="本科已毕业，请输入学校名称" class="">本科已毕业，请输入学校名称</dd><dd lay-value="研究生在读，请输入学校名称" class="">研究生在读，请输入学校名称</dd><dd lay-value="研究生已毕业，请输入学校名称" class="">研究生已毕业，请输入学校名称</dd><dd lay-value="高中，请输入学校名称" class="">高中，请输入学校名称</dd></dl></div>
                    <input style="margin-left: 10px;" type="text" name="cur_school_name" autocomplete="off" placeholder="请输入" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" id="cur_major">
                <label class="layui-form-label">在读专业<span class="red">*</span></label>
                <div class="layui-input-block flex">
                <input type="radio" name="cur_major" value="建筑" title="建筑"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>建筑</div></div>
                <input type="radio" name="cur_major" value="景观" title="景观"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>景观</div></div>
                <input type="radio" name="cur_major" value="室内" title="室内"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>室内</div></div>
                </div>
                <div class="layui-input-block flex">
                <input type="radio" name="cur_major" value="城规Planning" title="城规Planning"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>城规Planning</div></div>
                <input type="radio" name="cur_major" value="城设Urban Design" title="城设Urban Design"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>城设Urban Design</div></div>
                </div>
                <div class="layui-input-block flex">
                <input type="radio" name="cur_major" value="工业设计" title="工业设计"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>工业设计</div></div>
                <input type="radio" name="cur_major" value="产品设计" title="产品设计"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>产品设计</div></div>
                <input type="radio" name="cur_major" value="动画设计" title="动画设计"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>动画设计</div></div>
                </div>
                <div class="layui-input-block flex">
                <input type="radio" name="cur_major" value="游戏设计" title="游戏设计"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>游戏设计</div></div>
                <input type="radio" name="cur_major" value="在读高中生" title="在读高中生"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>在读高中生</div></div>
                <input type="radio" name="cur_major" value="其他" title="其他"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>其他</div></div>
                </div>
            </div>
            <div class="layui-form-item" id="cur_score">
                <div class="layui-box">
                    <h3 class="box-title">本科/研究生成绩单加权均分<span class="red">*</span></h3>
                    <div class="layui-input-block mr20">
                        <input placeholder="0 ~ 100" name="cur_score" type="number" autocomplete="off" class="layui-input">
                        <div class="layui-form-mid layui-word-aux">100分制 Please enter a number between 0 and 100 .</div>
                    </div>
                </div>
            </div>
            <div class="layui-form-item" id="cur_languagescore">
                <div class="layui-box">
                    <h3 class="box-title">语言成绩<span class="red">*</span></h3>
                    <div class="layui-input-block flex">
                        <select name="lang" lay-filter="lang">
                            <option value="">请选择</option>
                            <option value="托福">托福</option>
                            <option value="雅思">雅思</option>
                            <option value="日语">日语</option>
                            <option value="德福">德福</option>
                        </select><div class="layui-unselect layui-form-select"><div class="layui-select-title"><input type="text" placeholder="请选择" value="" readonly="" class="layui-input layui-unselect"><i class="layui-edge"></i></div><dl class="layui-anim layui-anim-upbit"><dd lay-value="" class="layui-select-tips">请选择</dd><dd lay-value="托福" class="">托福</dd><dd lay-value="雅思" class="">雅思</dd><dd lay-value="日语" class="">日语</dd><dd lay-value="德福" class="">德福</dd></dl></div>
                        <input placeholder="请输入" name="cur_languagescore" style="margin-left: 10px;" type="number" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-block">
                        <div class="layui-form-mid layui-word-aux">（若还没有成绩，请写0）雅思请填写总分（小分）  如 6.5（6）。日语请填写考试名称+成绩</div>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <h3 class="box-title">展现同学现阶段设计能力（可以是想放入作品集里面的项目），压成10M以内的PDF文件太多或太大，建议发送到评估邮箱：getoffer@racstudio.cn邮件主题标注一下你的名字，正文里面备注一下你的基本信息（年级、专业、学校、准备申请国家、准备申请专业）</h3>
                <div class="layui-input-block mr20">
                    <input value="" id="upload" type="file">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">想对老师说的话</label>
                <div class="layui-input-block mr20">
                    <input type="text" name="remark" autocomplete="off" placeholder="请输入" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <h3 class="box-title">您是如何知道RACstudio的呢？</h3>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="cur_channel0" lay-skin="primary" title="学长学姐推荐"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>学长学姐推荐</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="cur_channel1" lay-skin="primary" title="朋友推荐"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>朋友推荐</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="cur_channel2" lay-skin="primary" title="老师推荐"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>老师推荐</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="cur_channel3" lay-skin="primary" title="微信公众号"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>微信公众号</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="cur_channel4" lay-skin="primary" title="微博"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>微博</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="cur_channel5" lay-skin="primary" title="知乎"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>知乎</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
                <div class="layui-input-block flex">
                    <input type="checkbox" name="cur_channel6" lay-skin="primary" title="百度/谷歌搜索"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>百度/谷歌搜索</span><i class="layui-icon layui-icon-ok"></i></div>
                    <input type="checkbox" name="cur_channel7" lay-skin="primary" title="Other"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>Other</span><i class="layui-icon layui-icon-ok"></i></div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block" style="text-align: center;padding-bottom:30px;">
                <button style="background-color: #000000;" class="layui-btn" lay-submit="" lay-filter="formDemo">立即提交</button>
                </div>
            </div>
        </div>














    </div>
    
</div>


<div class="logindivgreyss" style="display:none; width: 100%; height:100%; position:fixed; z-index:200; top:0; left:0px; background-color: #000000;-moz-opacity:0.6; -khtml-opacity: 0.6; opacity: 0.6; "></div>
<div class="logindivshowss" style="display:none; width:100%; height:100%; position:fixed; z-index:200; top:0; left:0px;">
    <div class="login_divss" style="background-color:#ffffff; width:250px; height:100px; margin-top: 25%;">
        <div style="height:30px;"></div>
        <div style="background:url('publiv/images/jindu.gif') center center; background-size:cover; height:15px; width:128px; margin: auto;">

        </div>

        <div style="height:15px;"></div>
        <div style="font-size:14px; color:#787878;">文件上传中...</div>
    </div>
</div>

<div class="logindivcodegrey"></div>
<div class="logindivcheckcode">
    <div class="login_div">
        <div class="closecodelogindiv">x</div>
        <div class="h35"></div>
        <img src="/sms.php?key=getImgCode" alt="captcha" id="showmessagecode" onclick="this.src=this.src+'&'+Math.random()"/>

        <div class="h20"></div>
        <div style="text-align:left; width:260px; margin:auto;">输入验证码：<input type="text" id="messagecode" name="messagecode" style=""/></div>

        <div class="h20"></div>
        <button class="code-button" name="checkcode" type="submit">确认</button>

    </div>
</div>


</BODY>
</HTML>
<?php }
}
