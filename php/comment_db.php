<?php
	require_once('./db.php');
	session_start();
	$db = new DBC; //db object생성
	$db->DBI();//db 들어가기
	$db->query = "select id from comment order by id desc limit 1";
	$db->DBQ();

	$num = $db->result->num_rows;
	$data = $db->result->fetch_row();

	if($num==1)
	$id = $data[0]+1;
	else
	$id=1;
	
	$name =  $_SESSION['name'] ;
	$content = $_POST['댓글'];
	$time = date("Y-m-d h:i:s");
	
	
	if($content==null||$content==''){
		$db->DBO();
		echo "<script>location.replace('../Room1.php');</script>";
		exit;
	}
	$db->query = "insert into comment values('".$id."','".$name."','".$content."','" . $time. "')";
	$db->DBQ();
	$db->DBO();
	echo "<script>location.replace('../Room1.php');</script>";
	exit;
?>

	