<?php

$db_name = "users-mysql-db";
$mysql_username = "zahir";
$mysql_password = "Salmahyake1415";
$server_name = "Endpoint: users-mysql-db.cxx422xmap65.us-east-2.rds.amazonaws.com";

$connect = myswli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if(!$connect){
	die("connection failed!", mysqli_connect_errno());
}else{
	echo "connection successful";
}


