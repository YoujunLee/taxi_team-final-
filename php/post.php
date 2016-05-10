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
//post는  방만든 학생에 대한 정보와 택시 정보를 담은 테이블, room_user는 방에 참여한 학생들에 대한 정보를 담은 테이블
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
//학생이 입력한 택시 정보 변수에 저장시키고 디비에 저장
$room_start = $_POST['room_start'];
$room_arrive = $_POST['room_arrive'];
$room_date = $_POST['room_date'];
$room_time = $_POST['room_time'];
$room_population = $_POST['room_population'];


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

$stu_id= $_SESSION['user_id'];
$name =  $_SESSION['name'] ;
$cellphone	= $_SESSION['cellphone'];

$db3 = new DBC; //db object생성
$db3->DBI();//db 들어가기
$db3->query = "SELECT post_id FROM room_user WHERE stu_id='".$stu_id."' AND date='".$room_date."' AND time='".$room_time."'";
$db3->DBQ();
$count_room = $db3->result->num_rows;

if($room_date==null||$room_date=='')
{
	echo "<script>alert('날짜를 입력해 주세요.');history.back();</script>";
	$db3->DBO();
	exit;
}
else if($count_room>0)
{
	echo "<script>alert('동일 시간대에 참여하신 방이 이미 있습니다.'); history.back();</script>";
	$db3->DBO();
	exit;
}
else if($room_population>4)
{
	echo "<script>alert('최대 탑승인원은 4명입니다. '); history.back();</script>";
	$db3->DBO();
	exit;
}
else if($room_population<=1)
{
	echo "<script>alert('최소 탑승인원은 2명 입니다.'); history.back();</script>";
	$db3->DBO();
	exit;
}

$db->query = "insert into post values ('".$post_id ."','".$stu_id."','".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."','".$room_population."', '1')";
$db2->query = "insert into room_user values('".$id."', '".$post_id ."','".$stu_id."','".$name."','".$cellphone."','".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."')";

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
	echo "<script>location.replace('../Room1.html.php?$post_id');</script>"; // 방 만들었을 시에 방으로 넘어감
}

$db->DBO();
$db2->DBO();
?>
</body>
</html>