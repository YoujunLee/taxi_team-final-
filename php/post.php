<?php

require_once './config.php';

$db = new DBC; //db object생성
$db->DBI();//db 들어가기
$db->query = "SELECT post_id FROM post ORDER BY post_id desc LIMIT 1";
$db->query = "SELECT id FROM room_user ORDER BY id desc LIMIT 1";
$db->DBQ();

$num = $db->result->num_rows;
$data = $db->result->fetch_row();
//$num1 = $db->result->num_rows;
//$data1 = $db->result->fetch_row();

if($num==1)
{	$post_id = $data[0]+1;
	$id = $data[0]+1;
}
else
{	$post_id=1;	
	$id = 1;
}

//if($num==1)
//{	$id = $data[0]+1;	}
//else
//{	$id=1;	}



$room_start = $_POST['room_start'];
$room_arrive = $_POST['room_arrive'];
$room_date = $_POST['room_date'];
$room_time = $_POST['room_time'];
$room_population = $_POST['room_population'];
$room_memo = $_POST['room_memo'];

session_start();
$stu_id= $_SESSION['user_id'];

// 바꾼 코드 ---------------------------------------

$name =  $_SESSION['name'] ;
$cellphone	= $_SESSION['cellphone'];

//여기까지-------------------------------------------

if($room_date==null||$room_date=='')
{
	echo "<script>alert('비밀번호를 입력해주세요.');history.back();</script>";
	exit;
}


$db->query = "insert into post values ('".$post_id ."','".$stu_id."','".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."','".$room_population."', '".$room_memo."')";
//바꾼 코드 room_user DB로 전송하기----------------------------------
$db->query = "insert into room_user values('".$id ."','".$post_id ."','".$stu_id."','".$name."','".$cellphone."')";
//여기까지-------------------------------------------------------
$db->DBQ();

if(!$db->result)
{
	
	echo "<script>alert('fail to posting.');history.back();</script>";
	$db->DBO();
	exit;	
} 
else
{
	echo "<script>location.replace('../Room1.php?$post_id');</script>";
}
?>
