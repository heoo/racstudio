{include file="header.tpl"}
<div class="grey">
    <div class="home-div detail-top">
        <div class="teacher-bag">
            <div class="course-b w25">
                <div class="course-po">
                <div class="course-im h340" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url({$data['image']});"></div>
                </div>
            </div>
            <div class="course-top w75">
                <div class="course-top-t-n">{$data['name']}</div>

                <div class="profession-box">
                    <div class="course-top-t-type">{$data['profession']}</div>
                    <div class="course-top-t-type">{$data['profession']}</div>
                </div>

                <div class="mes-box mt30">
                    <div>{$data['school_str']}</div>
                    <div>{$data['main']}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-div detail-container">
    <div class="detail-content">
        <div class="content-title">基本信息</div>
        <div class="t-i-title"><span>当前城市：</span>{$data['site']}</div>
        <div class="t-i-title"><span>基本介绍：</span>{$data['basicprofile']}</div>
        <div class="t-i-title"><span>学生偏好：</span>{$data['studentprefs']}</div>
        <div class="t-i-title"><span>获奖经历：</span>{$data['prize']}</div>
        <div class="t-i-title"><span>熟悉领域：</span>{$data['domain']}</div>
        <div class="t-i-title"><span>工作经历：</span>{$data['workexperience']}</div>

        <div class="grey-line"></div>
       
        <div class="content-title">相关作品</div>

        <div class="case-info spotlight-group">
        {foreach $data['caseArr'] as $item}
            <a class="spotlight case-img" href="{$item}">
                <img src="{$item}">
            </a>
        {/foreach}
        </div>
    </div>

    <div class="detail-recom">
        <div class="content-title">辅导案例</div>
        <div class="detail-course ajaxCase"></div>
    </div>
</div>
<script>
$(function(){
    //右侧案例
    getRacData({ type: 'exa', limit: 6 });
})
</script>
{include file="foot.tpl"}