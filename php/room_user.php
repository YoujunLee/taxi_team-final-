<?php

   $hostname=$_SERVER["HTTP_REFERER"]; //도메인명(호스트)명을 구합니다.

  
	require_once('./db.php');
	session_start();
	$db = new DBC; //db object생성
	$db->DBI();//db 들어가기
	
	
	$user_id = $_SESSION['user_id'];
	$name =  $_SESSION['name'] ;
	$cellphone	= $_SESSION['cellphone'];
	
	$db->query = "insert into room_user values('".$user_id."','".$name."','".$cellphone."')";
	$db->DBQ();
	$db->DBO();
	echo "<script>location.replace('$hostname');</script>";
	exit;
?>

	