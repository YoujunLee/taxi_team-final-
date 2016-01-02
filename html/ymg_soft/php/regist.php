<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
   		 <title>회원가입여부</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
	</head>
	<body>
<?php

require_once './db.php';

$db = new DBC; //db object생성
$db->DBI();//db 들어가기



$email = $_POST['userName'];
$pass1 = $_POST['password'];
$pass2 = $_POST['repassword'];



/*비밀번호 일치 여부*/
if($pass1 == $pass2)
{
	$pass = $pass1;
} else
{
	echo "<script>alert('비밀번호가 맞지 않습니다.');history.back();</script>";
	exit;
}



/*이메일 입력 여부*/
if($email==null||$email=='')
{
	echo "<script>alert('이메일을 입력해주세요.');history.back();</script>";
	exit;
}

/*비밀번호 입력 여부*/
if($pass==null||$pass=='')
{
	echo "<script>alert('비밀번호를 입력해주세요.');history.back();</script>";
	exit;
}



/*회원 가입 여부*/
$db->query = "select email from user where email='".$email."'";
$db->DBQ();
$num = $db->result->num_rows;
if($num==1)	
{
   
   echo "<script>alert('이미 회원가입되어 있습니다.');history.back();</script>";
   exit;
}

$hash = password_hash($pass, PASSWORD_DEFAULT);
	

$db->query = "insert into user values ('".$email."', '".$hash."')";
$db->DBQ();

if(!$db->result)
{
	
	echo "<script>alert('회원가입에 실패하였습니다.');history.back();</script>";
	$db->DBO();
	exit;
	
} else
{
	echo "<script>alert('회원가입 되었습니다. 로그인 화면으로 이동합니다.');location.replace('../login.html');</script>";
	$db->DBO();
	exit;
}
?>
</body>
</html>
