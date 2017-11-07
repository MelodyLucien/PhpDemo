<?php 
    require_once('./info.php');
    $mysqli->query("set names 'utf8';");//编码转化
    $select_db = $mysqli->select_db($mysql_conf['db']);
    if (!$select_db) {
        die("could not connect to the db:\n" .$mysqli->error);
    }
    $sql = "select * from keys_info;";
    $res = $mysqli->query($sql);
    if ($res) {
    	while ($row = $res->fetch_assoc()) {
           echo $row['keyname']."<-----> ".$row['keycode']."<br>";
        }
    }else{
        die("sql error:\n" . $mysqli->error);
    }
    $res->free();
    $mysqli->close();

?>