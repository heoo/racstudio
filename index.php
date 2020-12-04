<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require './libs/Smarty.class.php';
require './configs/configs.php';
require './ApiUtil.php';
$smarty = new Smarty;
$smarty->cache_dir = 'cache';
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$Api = new ApiUtil();

$banner = $Api::appGet($configs['rac'].'/carousel?site=home&pc=1');
$smarty->assign('banner',$banner['data']);

// $charting = $Api::appGet($configs['uri'].'/index/getinfo/get_matter?pagenum=1');
// $smarty->assign('charting',$charting? array_slice($charting['data'] ? $charting['data'] : [] ,0,8) : array());
$courseType = $Api::appGet($configs['rac'].'/category/list?type=course');
$smarty->assign('courseType',$courseType['data']);

// $courseList = $Api::appGet($configs['rac'].'/content/course?page=1&limit=4');
// $smarty->assign('courseList',$courseList['data']);

// $teacherList = $Api::appGet($configs['rac'].'/content/teacher?page=1&limit=4');
// $smarty->assign('teacherList',$teacherList['data']);

// $exaList = $Api::appGet($configs['rac'].'/content/exa?page=1&limit=6');
// $smarty->assign('exaList',$exaList['data']);



$smarty->assign('nav',$configs['nav']);
$smarty->assign('uri',$configs['uri']);

$smarty->display('index.tpl');
