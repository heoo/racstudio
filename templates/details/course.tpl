{include file="header.tpl"}
<div class="grey">
    <div class="home-div detail-top">
        <div class="course-b w40">
            <div class="course-po">
              <div class="course-im h340" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url({$data['image']});"></div>
            </div>
        </div>
        <div class="course-top w60">
            <div class="course-top-t-n">{$data['name']}</div>

            <div class="course-top-t-type">{$data['category_course_id']}</div>
            <div class="course-top-name"><span>所属专业：</span>{$data['profession']}</div>
            <div class="course-top-name"><span>课程难度：</span>{$data['profession']}</div>
            <div class="course-top-name"><span>课程类别：</span>{$data['profession']}</div>
            <div class="course-top-name"><span>授课方式：</span>{$data['coursetype']}</div>
            <div class="course-top-name"><span>授课时间：</span>{$data['coursetime']|date_format:'%Y-%m-%d %H:%M:%S'}</div>
            <div class="course-top-status">{$data['status']}</div>
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
            {foreach $data['teacher'] as $key => $teacher}
                <div class="tea-bx" onclick="window.location.href='/details.php?key=teacher&id={$teacher['id']}'">
                    <img src="{$teacher['image']}" />
                    <div class='tea-i'>
                        <div>{$teacher['name']}</div>
                        <div class="tea-l"></div>
                        <div class="tea-map">
                            <img class="c-image image_YevNYf" src="public/images/tea-map.png">
                            <span>{$teacher['profession']}</span>
                        </div>
                        <div class="mes-box">
                            <div>{$teacher['school_str']}</div>
                            <div>{$teacher['main']}</div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
           <div class="grey-line"></div>
           
        <div class="content-title">课程详情</div>
        <div class="info"> {$data['content']}</div>
    </div>
    <div class="detail-recom">
        <div class="content-title">相关课程</div>
        <div class="detail-course ajaxCourse"></div>
    </div>
</div>
<script>
$(function(){
    //初始化课程
    getRacData({ type: 'course' });
})
</script>
{include file="foot.tpl"}