<?php
include "./session_out.php";
out();
   	$hostname=$_SERVER["HTTP_REFERER"]; //도메인명(호스트)명을 구합니다.
	date_default_timezone_set("Asia/Seoul");
	$post_id1=getenv("QUERY_STRING");
	
	require_once('./db.php');
	
	$db = new DBC; //db object생성
	$db->DBI();//db 들어가기
	$db->query = "select id from car_comment order by id desc limit 1";
	$db->DBQ();

	$num = $db->result->num_rows;
	$data = $db->result->fetch_row();

	if($num==1)
	$id = $data[0]+1;
	else
	$id=1;
	
	$stu_id =  $_SESSION['user_id'] ;
	$content = $_POST['댓글'];
	$time = date("Y-m-d H:i:s");
	
	
	if($content==null||$content==''){
		$db->DBO();
		echo"<script>location.replace('$hostname');</script>";
		exit;
	}
	$db->query = "insert into car_comment values('".$id."','".$stu_id."','".$post_id1."','".$content."','" . $time. "')";
	$db->DBQ();
	$db->DBO();
	echo"<script>location.replace('$hostname');</script>";
	exit;
?>	