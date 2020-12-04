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

if($_GET['type'] == 'course'){

    $courseList = $Api::appGet($configs['rac'].'/content/course?'.$_SERVER["QUERY_STRING"] );
    // if($courseList['data']['teacher_ids']){
    //     $arr = explode(',',$courseList['data']['teacher_ids']);
    //     if( count($arr)){
    //         $teacher = array();
    //         foreach($arr as $key=>$val ){
    //             $teacher[$key] =  $api::getTeacher($configs['rac'].'/content/teacher/'.$val); 
    //         }
    //         $courseList['data']['teacher'] = $teacher;
    //     }
    // }
    $smarty->assign('courseList',$courseList['data']);
    $smarty->display('components/course.tpl');
}else if( $_GET['type'] == 'teacher' ){

    $teacherList = $Api::appGet($configs['rac'].'/content/teacher?'.$_SERVER["QUERY_STRING"] );
    $smarty->assign('teacherList',$teacherList['data']);
    $smarty->display('components/teacher.tpl');
}else if($_GET['type'] == 'exa'){

    $exaList = $Api::appGet($configs['rac'].'/content/exa?'.$_SERVER["QUERY_STRING"] );
    $smarty->assign('exaList',$exaList['data']);
    $smarty->display('components/exa.tpl');
}else if($_GET['type'] == 'news'){

    $newsList = $Api::appGet($configs['rac'].'/content/news?'.$_SERVER["QUERY_STRING"] );
    $smarty->assign('newsList',$newsList['data']);
    $smarty->display('components/news.tpl');
}else if($_GET['type'] == 'school'){

    $schoolList = $Api::appGet($configs['rac'].'/content/school?'.$_SERVER["QUERY_STRING"] );
    $smarty->assign('schoolList',$schoolList['data']);
    $smarty->display('components/school.tpl');
}
