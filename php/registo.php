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

require_once './config.php'; // config.php는 db에 접속하고 쿼리문을 실행하기 쉽게 미리 class 와 method를 만들어 놨다. 그래서 class를 선언해서 db를 쉽게 접속해서 쓴다.

$db = new DBC; //db object생성
$db->DBI();//db 들어가기



$cellPhone = $_POST['cellPhone'];//사용자가 입력한 전화번호
$pass1 = $_POST['pass1'];// 사용자가 입력한 비밀번호
$pass2 = $_POST['pass2'];// 사용자가 입력한 비밀번호 (재확인용)
$name = $_POST['name'];// 사용자가 입력한 이름
$student_no = $_POST['student_no'];// 사용자가 입력한 학번
$question = $_POST['question'];// 사용자가 선택한 질문(비밀번호 찾기용)
$answer = $_POST['answer'];// 사용자가 입력한 답(비밀번호 찾기용)

$db2 = new DBC;
$db2->DBI();
$db2->query = "SELECT name, stu_id FROM stugov_member WHERE stu_id='".$student_no."' AND name='".$name."'";//db에서 stugov_member(학교측에서 받은 학생들의 학번과 이름이 있는 테이블)라는 테이블에서 학생이 입력한 학번과 이름이 존재하는지 확인 단, 16학번부터는 미리 학번과 이름에 관한 데이터를 받지 않아서 16년도 부터는 체크 안함
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

/*학번 확인 꼼수 (8자리 점검 및 학번이 '2'로 시작하는지 점검) 16학번부터는 학교측에서 미리 학번과 이름에관한 데이터를 받지 못했으므로 임의로 16학번이 가입할수 있도록 코드를 짬*/
if(strlen($student_no)!=8)
{
	echo "<script>alert('존재하지 않는 학번입니다.');history.back();</script>";
	exit;
}

if($student_no[0]!="2")
{
		echo "<script>alert('존재하지 않는 학번입니다.');history.back();</script>";
		exit;
}

/*학생 여부*/
/*
if($data[0]==null||$data[1]==null)
{
	echo "<script>alert('이름과 학번이 일치하는 학생 정보가 존재하지 않습니다.');history.back();</script>";
	$db2->DBO();
	exit;
}
*/
/*이름 입력 여 부*/
if($name==null||$name=='')
{
	echo "<script>alert('이름을 입력해주세요.');history.back();</script>";
	exit;
}

/*회원 가입 여부(이미 가입한 학번은 재가입 못하도록)*/
$db->query = "select studentid from student_info where studentid='".$student_no."'";
$db->DBQ();
$num = $db->result->num_rows;
if($num==1)	
{
   
   echo "<script>alert('이미 회원가입되어 있습니다.');history.back();</script>";
   exit;
}

$hash = password_hash($pass, PASSWORD_DEFAULT);
	

$db->query = "insert into student_info values ('".$student_no."', '".$name."','".$cellPhone."','".$hash."','".$question."','".$answer."')";//student_info라는 테이블에 학생이 입력한 데이터 저장
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
