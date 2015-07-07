<?php

require_once './config.php';

$db = new DBC; //db object생성
$db->DBI();//db 들어가기
$db->query = "select post_id from post order by post_id desc limit 1";
$db->DBQ();

$num = $db->result->num_rows;
$data = $db->result->fetch_row();

<<<<<<< HEAD
if($num==1)
$post_id = $data[0]+1;
else
	$post_id = 1;
=======
>>>>>>> dd1b7e35875bdb7c05ad7a7cdf4b6f35ca38b8f1
$room_start = $_POST['room_start'];
$room_arrive = $_POST['room_arrive'];
$room_date = $_POST['room_date'];
$room_time = $_POST['room_time'];
$room_population = $_POST['room_population'];
$room_memo = $_POST['room_memo'];


if($room_date==null||$room_date=='')
{
	echo "<script>alert('비밀번호를 입력해주세요.');history.back();</script>";
	exit;
}

<<<<<<< HEAD
$db->query = "insert into post values ('".$post_id ."','".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."','".$room_population."', '".$room_memo."')";
=======
$db->query = "insert into post values ('".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."','".$room_population."', '".$room_memo."')";
>>>>>>> dd1b7e35875bdb7c05ad7a7cdf4b6f35ca38b8f1
$db->DBQ();

if(!$db->result)
{
	
	echo "<script>alert('fail to posting.');history.back();</script>";
	$db->DBO();
	exit;
	
} else
{
	echo "<script>alert('Success. Move to 1');location.replace('../Room1.php');</script>";
	//$db->DBO();
	exit;
}



?>
