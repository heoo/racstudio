{include file="header.tpl"}

{assign var=currentKey value=$smarty.get.key|default:'index' }
<div class="h20"></div>

<script>
$(function(){
var page = 1
const type = `${$currentKey}`.replace('$','')
    //初始化课程
    getRacData({ type: type,limit: 12, page: page});
    $(window).scroll(function() {
        if ($(document).scrollTop() >= $(document).height() - $(window).height()) {
            getRacData({ type: type,limit: 12, page: page++, append: true });
            console.log("滚动条已经到达底部为" + $(document).scrollTop());
        }
    });

}) 
</script>
{if $currentKey|in_array:[charting,course] }
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
                    {foreach $courseType as $type }
                        <div class="cp type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">专业</div>
                    <div class="cp profession-type-is t-active" data-val='0'>全部</div>
                    {foreach $professionType as $type }
                        <div class="cp profession-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">年份</div>
                    <div class="cp year-type-is t-active" data-val='0'>全部</div>
                    {foreach $yearType as $type }
                        <div class="cp year-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxCourse"></div>
{elseif $currentKey eq teacher}
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
                    {foreach $professionType as $type }
                        <div class="cp teacher-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">授课地点</div>
                    <div class="cp site-type-is t-active" data-val='0'>全部</div>
                    {foreach $siteType as $type }
                        <div class="cp site-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxTeacher"></div>
{elseif $currentKey eq exa}

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
                    {foreach $professionType as $type }
                        <div class="cp case-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">学期</div>
                    <div class="cp semester-type-is t-active" data-val='0'>全部</div>
                    {foreach $semesterType as $type }
                        <div class="cp semester-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxCase"></div>
{elseif $currentKey eq news}

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
                    {foreach $newsType as $type }
                        <div class="cp news-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
                {* <div class="rac-type list-type">
                    <div class="s-top-tit ">分类</div>
                    <div class="cp semester-type-is t-active" data-val='0'>全部</div>
                    {foreach $semesterType as $type }
                        <div class="cp semester-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div> *}
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxNews"></div>
{elseif $currentKey eq school}

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
                    {foreach $professionType as $type }
                        <div class="cp school-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">国家</div>
                    <div class="cp country-type-is t-active" data-val='0'>全部</div>
                    {foreach $countryType as $type }
                        <div class="cp country-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
                <div class="rac-type list-type">
                    <div class="s-top-tit ">排名</div>
                    <div class="cp ranking-type-is t-active" data-val='0'>全部</div>
                    {foreach $rankingType as $type }
                        <div class="cp ranking-type-is"  data-val="{$type['id']}">{$type['name']}</div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <div class="home-div course-d course-list ajaxSchool"></div>
{/if}


{include file="foot.tpl"}