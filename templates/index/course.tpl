
<div class="h80"></div>
<div class="home-div" id="serviceshowdiv">
    <div class="title">
        <div class="tt">
            <div class='m-title'>RAC课程</div>
            <div class='e-title'>体系</div>
        </div>


        <div class="bt">
            <div class="line"></div>
            <div class='bt-title'>COURSE SYSTEM</div>
        </div>
    </div>

<div class="rac-type">
    <div class="cp type-is t-active" data-val='0'>全部</div>
    {foreach $courseType as $type }
        <div class="cp type-is"  data-val="{$type['id']}">{$type['name']}</div>
    {/foreach}
</div>
<div class="h20"></div>

    <div class="course-d ajaxCourse"></div>
    
    <div class="b-d">
        <div class="b-more changeCourse" >换一批</div>
        <div class="b-more"> <a href="/list.php?key=course">查看更多</a></div>
    </div>
</div>

