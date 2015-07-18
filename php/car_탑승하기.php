<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
include "./session_out.php";
out();
require_once './config.php';

$db2 = new DBC; //db object생성
$db2->DBI();//db 들어가기
$db2->query = "SELECT id FROM car_user ORDER BY id desc LIMIT 1";
$db2->DBQ();
$num1 = $db2->result->num_rows;
$data1 = $db2->result->fetch_row();
if($num1==1)
{
	$id = $data1[0]+1;	
}
else
{
	$id=1;
}

$post_id = $_GET['post_id'];
$stu_id= $_SESSION['user_id'];
$name =  $_SESSION['name'] ;
$cellphone	= $_SESSION['cellphone'];

$db2->query = "SELECT start,arrive,date,time FROM car_user where post_id='".$post_id."'";
$db2->DBQ();
$num1 = $db2->result->num_rows;
$data1 = $db2->result->fetch_row();
$room_start = $data1[0];
$room_arrive = $data1[1];
$room_date = $data1[2];
$room_time = $data1[3];

$db3 = new DBC; //db object생성
$db3->DBI();//db 들어가기
$db3->query = "SELECT post_id FROM car_user WHERE stu_id='".$stu_id."' AND time='".$room_time."' AND date='".$room_date."'";
$db3->DBQ();
$count_me = $db3->result->num_rows;

if($count_me>0)
{
	echo "<script>alert('동일 시간대에 이미 방을 참여하였습니다.'); history.back();</script>";
	$db3->DBO();
	exit;
}

$db2->query = "insert into car_user values('".$id."', '".$post_id ."','".$stu_id."','".$name."','".$cellphone."','".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."')";
$db2->DBQ();
$db2->DBO();

echo "<script>location.replace('../car_Room.html.php?".$post_id."');</script>";

?>
</body>
</html>