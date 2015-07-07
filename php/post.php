<?php

require_once './config.php';

$db = new DBC; //db object생성
$db->DBI();//db 들어가기


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

$db->query = "insert into post values ('".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."','".$room_population."', '".$room_memo."')";
$db->DBQ();

if(!$db->result)
{
	
	echo "<script>alert('회원가입에 실패하였습니다.');history.back();</script>";
	$db->DBO();
	exit;
	
} else
{
	echo "<script>alert('회원가입 되었습니다. 로그인 화면으로 이동합니다.');location.replace('../Room1.php');</script>";
	$db->DBO();
	exit;
}



?>
