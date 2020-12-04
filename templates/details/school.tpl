{include file="header.tpl"}
<div class="grey">
    <div class="school-top" style="background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url({$data['caseArr'][0]});">




    <div class="home-div detail-top">
        <div class="teacher-bag">
            <div class="course-b w25">
                <div class="course-po">
                <div class="course-im h340" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url({$data['image']});"></div>
                </div>
            </div>
            <div class="school-top w25">
                <div class="course-top-t-n">{$data['name']}</div>

                <div class="school-nameen">{$data['nameen']}</div>
                <div class="course-top-t-type">{$data['profession']}</div>
               
                <div class="school-mes-box mt30">
                    <div class="school-site">{$data['site']}</div>
                </div>
                <div class="school-btn"><a href="{$data['url']}" target="_blank"> 进入官网</a></div>
            </div>

            <div class="school-top w50 school-top-right">
                <div class="school-qs">
                    <div class="mb15"><span>QS建筑排名：</span>{$data['qsb']}</div>
                    <div class="mb15"><span>QS排名：</span>{$data['qs']}</div>
                </div>
                <div class="school-off">
                    <div class="">{$data['offernum']}</div>
                    <div class="">OFFER</div>
                </div>
            </div>

        </div>
    </div>






    </div>
</div>


<div class="home-div news-cont">
    <div class="content-title">基本信息</div>
    <div class="school-t"><div class="school-t-t">院校地址：</div><div >{$data['site']}</div></div>
    <div class="school-t"><div class="school-t-t">基本介绍：</div><div>{$data['content']}</div></div>
    <div class="school-t"><div class="school-t-t">院校优势：</div><div>{$data['advantage']}</div></div>

    <div class="grey-line"></div>

    <div class="content-title">院校图片</div>
    <div class="case-info spotlight-group">
    {foreach $data['caseArr'] as $item}
        <a class="spotlight case-img" href="{$item}">
            <img src="{$item}">
        </a>
    {/foreach}
    </div>
</div>
{include file="foot.tpl"}