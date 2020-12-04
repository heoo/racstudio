{include file="header.tpl"}
<div class="grey">
    <div class="home-div detail-top">
        <div class="teacher-bag">
            <div class="course-top w60">
                <div class="course-top-t-n">{$data['name']}</div>

                <div class="profession-box">
                    <div class="course-top-t-type">{$data['profession']}</div>
                    <div class="course-top-t-type">{$data['profession']}</div>
                </div>

                <div class="exa-mes-box mt30">
                    <div class="exa-t"><span>背景：</span>{$data['background']}</div>
                    <div class="exa-t"><span>语言：</span>{$data['language']}</div>
                    <div class="exa-t"><span>结果：</span>{$data['result']}</div>
                </div>
            </div>

            <div class="exa-top w40">
                <div class="course-top-t-n">辅导老师</div>
                <div class="tea-bx" onclick="window.location.href='/details.php?key=teacher&id={$data['teacher']['id']}'">
                    <img src="{$data['teacher']['image']}" />
                    <div class='tea-i'>
                        <div class="exa-name">{$data['teacher']['name']}</div>
                        <div class="tea-l"></div>
                        <div class="tea-map">
                            <img class="c-image image_YevNYf" src="public/images/tea-map.png">
                            <span>{$data['teacher']['profession']}</span>
                        </div>
                        <div class="mes-box">
                            <div>{$data['teacher']['school_str']}</div>
                            <div class="exa-main">{$data['teacher']['main']}</div>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
</div>


<div class="home-div">
    <div class="content-title">辅导后作品</div>

    <div class="case-info spotlight-group">
    {foreach $data['caseArr'] as $item}
        <a class="spotlight case-img" href="{$item}">
            <img src="{$item}">
        </a>
    {/foreach}
    </div>
</div>
{include file="foot.tpl"}