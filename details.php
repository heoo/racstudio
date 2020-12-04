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


$api = new ApiUtil();
$data = $api::appGet($configs['rac'].'/content/'.$_GET['key'].'/'.$_GET['id']);

//获取教师信息
if(isset($data['data']['teacher_ids']) ){
    $arr = explode(',',$data['data']['teacher_ids']);
    if( count($arr)){
        $teacher = array();
        foreach($arr as $key=>$val ){
            $teacher[$key] =  $api::getTeacher($configs['rac'].'/content/teacher/'.$val); 
        }
        $data['data']['teacher'] = $teacher;
    }
}
//处理教师相关作品
if($_GET['key'] === 'teacher'){
    $data['data']['caseArr'] = explode(',',$data['data']['images']);
}

if($_GET['key'] == 'exa'){
    if($data['data']['imageed']){
        $data['data']['caseArr'] = explode(',',$data['data']['imageed']);
    }
    if($data['data']['teacher_id']){
        $data['data']['teacher'] =  $api::getTeacher($configs['rac'].'/content/teacher/'.$data['data']['teacher_id']); 
    }
}

if($_GET['key'] == 'school'){
    if($data['data']['images']){
        $data['data']['caseArr'] = explode(',',$data['data']['images']);
    }
}

// var_dump($data['data']);exit;
$smarty->assign('data',$data['data']);

$smarty->assign('nav',$configs['nav']);
$smarty->assign('uri',$configs['uri']);
// if($_GET['key'] == 'course'){
    $smarty->display('details/'.$_GET['key'].'.tpl');
// }
