<?php
$configs = array(
    'uri'=>'http://www.lac-studio.com',
    'rac'=>'http://data.racstudio.cn',
    'thems' => 'rac/',
    'nav' =>array(
        'index'=>array('name'=>'首页','url'=>'/','key'=>'index'),
        'course'=>array('name'=>'课程','url'=>'/list.php?key=course','key'=>'course'),
        'teacher'=>array('name'=>'师资','url'=>'/list.php?key=teacher','key'=>'teacher'),
        'exa'=>array('name'=>'案例','url'=>'/list.php?key=exa','key'=>'exa'),
        'news'=>array('name'=>'资讯','url'=>'/list.php?key=news','key'=>'news'),
        'school'=>array('name'=>'选校','url'=>'/list.php?key=school','key'=>'school'),
        // 'school'=>array('name'=>'选校','url'=>'/evaluation.php?key=school','key'=>'school'),
        // 'charting'=>array('name'=>'服务','url'=>'/list.php?key=charting','key'=>'charting'),
    ),
    'databases'=>array(
        'adapter'  => 'Mysql',
        'port'	   => 3306,
//        'host'     => '127.0.0.1',
//        'username' => 'root',
//        'password' => 'password-for@mysql',
        'host'     => '172.16.8.58',
        'username' => 'iarch',
        'password' => 'iarch@160812',
        'dbname'   => 'studio',
        'charset'  => 'UTF8',
    )
);