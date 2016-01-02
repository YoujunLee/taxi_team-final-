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

require_once './config.php';

$db = new DBC; //db object생성
$db->DBI();//db 들어가기



$cellPhone = $_POST['cellPhone'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$name = $_POST['name'];
$student_no = $_POST['student_no'];
$question = $_POST['question'];
$answer = $_POST['answer'];

$db2 = new DBC;
$db2->DBI();
$db2->query = "SELECT name, stu_id FROM stugov_member WHERE stu_id='".$student_no."' AND name='".$name."'";
$db2->DBQ();
$data=$db2->result->fetch_row();

/*비밀번호 일치 여부*/
if($pass1 == $pass2)
{
	$pass = $pass1;
} else
{
	echo "<script>alert('비밀번호가 맞지 않습니다.');history.back();</script>";
	exit;
}

/*학번 입력 여부*/
if($student_no==null||$student_no=='')
{
	echo "<script>alert('학번을 입력해주세요.');history.back();</script>";
	exit;
}

/*전화번호 입력 여부*/
if($cellPhone==null||$cellPhone=='')
{
	echo "<script>alert('번호를 입력해주세요.');history.back();</script>";
	exit;
}

/*비밀번호 입력 여부*/
if($pass==null||$pass=='')
{
	echo "<script>alert('비밀번호를 입력해주세요.');history.back();</script>";
	exit;
}

/*학생 여부*/
if($data[0]==null||$data[1]==null)
{
	echo "<script>alert('이름과 학번이 일치하는 학생 정보가 존재하지 않습니다.');history.back();</script>";
	$db2->DBO();
	exit;
}

/*이름 입력 여 부*/
if($name==null||$name=='')
{
	echo "<script>alert('이름을 입력해주세요.');history.back();</script>";
	exit;
}

/*회원 가입 여부*/
$db->query = "select studentid from student_info where studentid='".$student_no."'";
$db->DBQ();
$num = $db->result->num_rows;
if($num==1)	
{
   
   echo "<script>alert('이미 회원가입되어 있습니다.');history.back();</script>";
   exit;
}

$hash = password_hash($pass, PASSWORD_DEFAULT);
	

$db->query = "insert into student_info values ('".$student_no."', '".$name."','".$cellPhone."','".$hash."','".$question."','".$answer."')";
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
