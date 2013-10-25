<?php

$name = $_GET["name"];
$phone = $_GET["phone"];
$friend = $_GET["friend"];
$num = $_GET["num"];

$mysql = new SaeMysql();
$sql = "INSERT INTO `tb_sign` ( `name` , `phone` , `friend` , `num` , `mark` ) VALUES ( '" . $mysql->escape( $name ) . "' , '" . $mysql->escape( $phone ) . "' , '" . intval( $friend ) . "' , '" . intval( $num ) . "' , 0 ) ";
//echo $sql;
$mysql->runSql( $sql );
if( $mysql->errno() != 0 ){
	die( "Error:" . $mysql->errmsg());
}
 
$mysql->closeDb();

echo "thanks";
?>