<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon" />

    {assign var=getKey value=$smarty.get.key|default:'index' }
    
    <title>{if $getKey=='works'}作品集{else if $getKey=='serve'}留学申请{else}{$nav[$getKey]['name']}{/if}</title>
    {* <link rel="stylesheet" href="public/css/bootstrap.min.css"> *}
    <script src="public/js/jquery-2.1.4.min.js"></script>
    {* <script src="public/js/bootstrap.min.js"></script> *}
    <script src="public/js/header.js"></script>
    <script src="public/js/common.js"></script>
    <link rel="stylesheet" href="public/css/common.css">
    <link rel="stylesheet" href="public/css/rac.css">
    <script>
        var detailsUri = '/teacher.php?key=teacher';
        {if $getKey eq case}
            var detailsUri = '/details.php?key=exa';
        {/if}
    </script>
    <script src="public/js/spotlight.bundle.js"></script>

</head>
<body style="margin: auto;">

<div id="titlebig">

    <div class="menu" style="position: fixed; width:100%; margin: auto; box-shadow: #f0eeee 0px 1px 5px 1px ; z-index: 199; background: #fff; min-width:760px;">
        <div class="h10"></div>
        <div class="cflist home-div" id="cflist">
            <div  class="cfheadleft" id="cfheadleft">
                <div name="menudiv">
                    <img src="public/images/indexlogo.png" class="rac-logo" style="margin-top:-2px; margin-left: -8px;">
                    
                </div>
                <div class="rac-area">上海 | 广州 | 北京 | 成都| 苏州</div>
            </div>

            <div class="cfheadright" id="cfheadright">
                {foreach $nav as $k=>$n }
                    <a href="{$n['url']}">
                        <div name="menudiv" class="cf  {if $getKey eq $k}rac-active{/if}">
                            <div><span>{$n['name']}</span></div>
                        </div>
                    </a>
                {/foreach} 
                <a class="serve-men cf  {if $getKey eq 'serve' ||  $getKey eq 'works'}rac-active{/if}">
                    服务
                </a>
                <div class="serve-ul">
                    <div><a class="rac-menu {if $getKey eq 'works'}rac-active{/if}" href="/serve.php?key=works">作品集</a></div>
                    <div><a class="rac-menu {if $getKey eq 'serve'}rac-active{/if}" href="/serve.php?key=serve">留学服务</a></div>
                </div>
                {* <ul class="serve-ul">
                    <li><a href="/serve.php?key=works">作品集</a></li>
                    <li><a href="/serve.php?key=serve">留学服务</a></li>
                </ul> *}
                

                {* <div class="dropdown">
                    <div name="menudiv" class="dropdown-toggle cf {if $getKey eq 'serve' ||  $getKey eq 'works'}rac-active{/if}" data-toggle="dropdown">
                     服务
                    </div>
                    <ul class="min60 dropdown-menu dropdown-menu-left" >
                        <li>
                            <a class="dropdown-a" role="menuitem" tabindex="-1" href="/serve.php?key=works">作品集</a>
                        </li>
                        <li>
                            <a class="dropdown-a" role="menuitem" tabindex="-1" href="/serve.php?key=serve">留学服务</a>
                        </li>
                    </ul>
                </div> *}

            </div>

            <div class="c-right">
                <div class="in-t">在线课堂</div>
                <div class="rac-evaluation"><a href="/evaluation.php">免费评估</a></div>
                <div class="r-logo"><img src="public/images/r-logo.png" class="rac-r-logo"></div>
            </div>
        </div>
    </div>
    <div class="menu"></div>
</div>

<div class="left-menu">

    <div class="h10"></div>
    <div>
        <a data-pin-do="buttonBookmark" data-pin-custom="true" href="javascript:void(0);">
            <img src="public/images/right_p.png" height="40">
        </a>
    </div>

    <div class="clear h10"></div>
    <div class="showcalldiv"></div>

    <div class="clear h10"></div>
    <a href="javascript:void(0);">
        <div class="left-menu-yun"></div>
    </a>

    <div class="clear h10"></div>
    <a href="javascript:void(0);" onclick="window.scrollTo(0,0);">
        <div class="left-menu-top"></div>
    </a>

</div>

<div class="callshowdiv">
    <div >
        <span style="">联系电话：400-863-5573</span>
    </div>
</div>