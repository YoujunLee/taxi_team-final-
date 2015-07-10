<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
   		 <title>개인정보 수정</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
	</head>
	<body>
<?php

require_once './config.php';

$db = new DBC; //db object생성
$db->DBI();//db 들어가기

session_start();
$stu_id= $_SESSION['user_id'];
$name =  $_SESSION['name'] ;
$cellPhone = $_POST['cellPhone'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];




if($pass1 == $pass2)
{
	$pass = $pass1;
} else
{
	
	echo "<script>alert('비밀번호가 맞지 않습니다.');history.back();</script>";
	exit;
}

if($cellPhone==null||$cellPhone=='')
{
	echo "<script>alert('번호를 입력해주세요.');history.back();</script>";
	exit;
}

if($pass==null||$pass=='')
{
	echo "<script>alert('비밀번호를 입력해주세요.');history.back();</script>";
	exit;
}

$db->query = "update student_info set cellphone='".$cellphone."' where studentid= '".$stu_id."'" ;
$db->query = "update student_info set pass='".$pass."' where studentid= '".$stu_id."'" ;
$db->DBQ();

if(!$db->result)
{
	
	echo "<script>alert('회원가입에 실패하였습니다.');history.back();</script>";
	$db->DBO();
	exit;
	
} else
{
	echo "<script>alert('회원가입 되었습니다. 로그인 화면으로 이동합니다.');location.replace('../index.php');</script>";
	$db->DBO();
	exit;
}



?>
</body>
</html>
