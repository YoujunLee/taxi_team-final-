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

$db = new DBC; //db object생성
$db->DBI();//db 들어가기
$db->query = "SELECT post_id FROM post ORDER BY post_id desc LIMIT 1";
$db->DBQ();
$num = $db->result->num_rows;
$data = $db->result->fetch_row();

if($num==1)
{	$post_id = $data[0]+1;
}
else
{	$post_id=1;	
}

$room_start = $_POST['room_start'];
$room_arrive = $_POST['room_arrive'];
$room_date = $_POST['room_date'];
$room_time = $_POST['room_time'];
$room_population = $_POST['room_population'];
$room_memo = $_POST['room_memo'];

$db2 = new DBC; //db object생성
$db2->DBI();//db 들어가기
$db2->query = "SELECT id FROM room_user ORDER BY id desc LIMIT 1";
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

session_start();
$stu_id= $_SESSION['user_id'];
$name =  $_SESSION['name'] ;
$cellphone	= $_SESSION['cellphone'];

if($room_date==null||$room_date=='')
{
	echo "<script>alert('날짜를 입력해 주세요.');history.back();</script>";
	exit;
}
else if($room_population>4||$room_population<1)
{
	echo "<script>alert('최대 인원은 4명 입니다.');history.back();</script>";
	exit;
}

$db->query = "insert into post values ('".$post_id ."','".$stu_id."','".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."','".$room_population."', '".$room_memo."')";
$db2->query = "insert into room_user values('".$id."', '".$post_id ."','".$stu_id."','".$name."','".$cellphone."')";

$db->DBQ();
$db2->DBQ();

if(!$db->result)
{
	
	echo "<script>alert('fail to posting.');history.back();</script>";
	$db->DBO();
	$db2->DBO();
	exit;	
} 
else
{
	echo "<script>location.replace('../Room.html.php?$post_id');</script>";
}
?>
</body>
</html>