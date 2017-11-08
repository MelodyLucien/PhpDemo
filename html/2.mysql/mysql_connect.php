<?php

$mysql_conf = array(
    'host'    => '127.0.0.1:3306', 
    'db'      => 'keys_info', 
    'db_user' => 'root', 
    'db_pwd'  => 'zhouhao2', 
    );

$mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']) OR  die("could not connect to the database:\n" . $mysqli->connect_error);//诊断连接错误;

$mysqli->query("set names 'utf8';");//编码转化

?>


