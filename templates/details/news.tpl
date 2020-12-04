{include file="header.tpl"}
<div class="grey">
    <div class="home-div news-top">
        <div class="cst_contentTP_FM c-div cbdiv_dd92bf89" style="background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url({$data['image']});">
            <div class="c-div cbdiv_f106c6da">
            <h1 class="c-ellipse c-heading youziku-48c15647d6414b1d865b2ee9b7d53df4 cbhead_499e84b2">
            {$data['name']}   
            </h1>
            </div>
        </div>
    </div>
</div>


<div class="home-div news-cont">
    <div class="createtime">{$data['createtime']|date_format:'%Y-%m-%d'}</div>
    {$data['content']}
</div>
{include file="foot.tpl"}