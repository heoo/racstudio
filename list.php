<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require './libs/Smarty.class.php';
require './configs/configs.php';
require './configs/json.php';
require './ApiUtil.php';

$smarty = new Smarty;
$smarty->cache_dir = 'cache';
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$Api = new ApiUtil();

$classArr = array();
switch ($_GET['key']){
    case 'teacher' :
        $classArr = array('F1','F9','F11','F12');
        break;
    case 'charting' :
        $classArr = array('F11','F1','F2','F3','F4');
        break;
    default :
        $classArr = array('F1','F5','F6','F11');
        break;
}

$courseType = $Api::appGet($configs['rac'].'/category/list?type=course');
$smarty->assign('courseType',$courseType['data']);

$yearType = $Api::appGet($configs['rac'].'/category/list?type=year');
$smarty->assign('yearType',$yearType['data']);

$professionType = $Api::appGet($configs['rac'].'/category/list?type=profession');
$smarty->assign('professionType',$professionType['data']);

$siteType = $Api::appGet($configs['rac'].'/category/list?type=site');
$smarty->assign('siteType',$siteType['data']);

$semesterType = $Api::appGet($configs['rac'].'/category/list?type=semester');
$smarty->assign('semesterType',$semesterType['data']);

$newsType = $Api::appGet($configs['rac'].'/category/list?type=category_news');
$smarty->assign('newsType',$newsType['data']);

$countryType = $Api::appGet($configs['rac'].'/category/list?type=country');
$smarty->assign('countryType',$countryType['data']);

$rankingType = $Api::appGet($configs['rac'].'/category/list?type=ranking');
$smarty->assign('rankingType',$rankingType['data']);



$smarty->assign('classArr',$classArr);
$smarty->assign('category',json_decode($json,true));
$smarty->assign('nav',$configs['nav']);
$smarty->assign('uri',$configs['uri']);

$smarty->display('list.tpl');
