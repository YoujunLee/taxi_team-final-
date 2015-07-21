!DOCTYPE html>
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
$db->query = "SELECT post_id FROM car_post ORDER BY post_id desc LIMIT 1";
$db->DBQ();
$num = $db->result->num_rows;
$data = $db->result->fetch_row();

if($num==1)
{	$post_id = $data[0]+1;
}
else
{	$post_id=1;	
}

$car_start = $_POST['car_start'];
$car_arrive = $_POST['car_arrive'];
$car_date = $_POST['car_date'];
$car_time = $_POST['car_time'];
$car_num = $_POST['car_num'];
$car_price = $_POST['car_price'];
$car_population = $_POST['car_population'];

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

$stu_id= $_SESSION['user_id'];
$name =  $_SESSION['name'] ;
$cellphone	= $_SESSION['cellphone'];

$db3 = new DBC; //db object생성
$db3->DBI();//db 들어가기
$db3->query = "SELECT post_id FROM car_user WHERE stu_id='".$stu_id."' AND date='".$car_date."' AND time='".$car_time."'";
$db3->DBQ();
$count_room = $db3->result->num_rows;

if($car_start==null||$car_start=='')
{
	echo "<script>alert('출발지를 입력해 주세요.');history.back();</script>";
	exit;
}
else if($car_arrive==null||$car_arrive=='')
{
	echo "<script>alert('도착지를 입력해 주세요.');history.back();</script>";
	exit;
}
else if($car_date==null||$car_date=='')
{
	echo "<script>alert('날짜를 입력해 주세요.');history.back();</script>";
	exit;
}
else if($car_num==null||$car_num=='')
{
	echo "<script>alert('차종을 입력해 주세요.');history.back();</script>";
	exit;
}
else if($car_date==null||$car_date=='')
{
	echo "<script>alert('가격을 입력해 주세요.');history.back();</script>";
	exit;
}
else if($count_room>0)
{
	echo "<script>alert('동일 시간대에 참여하신 방이 이미 있습니다.'); history.back();</script>";
	$db3->DBO();
	exit;
}
else if($car_population>4||$car_population<1)
{
	echo "<script>alert('최대 인원은 4명 입니다.');history.back();</script>";
	exit;
}

$db->query = "insert into car_post values ('".$post_id ."','".$stu_id."','".$car_start."', '".$car_arrive."','".$car_date."','".$car_time."','".$car_population."', '".$car_num."', '".$car_price."')";
$db2->query = "insert into car_user values('".$id."', '".$post_id ."','".$stu_id."','".$name."','".$cellphone."','".$car_start."', '".$car_arrive."','".$car_date."','".$car_time."')";

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
	echo "<script>location.replace('../car_Room.html.php?$post_id');</script>";
}
$db->DBO();
$db2->DBO();
?>
</body>
</html>