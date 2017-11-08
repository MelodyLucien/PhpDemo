<?php 

    /*
        $mysql_conf = array(
            'host'    => '127.0.0.1:3306', 
            'db'      => 'keys_info', 
            'db_user' => 'root', 
            'db_pwd'  => 'zhouhao2', 
            );
    */
    require_once('2.mysql/mysql_connect.php');
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
