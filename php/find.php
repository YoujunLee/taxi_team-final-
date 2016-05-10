<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
   		 <title>비밀번호 찾기</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
	</head>
	<body>
<?php

require_once './config.php';

$db = new DBC; //db object생성
$db->DBI();//db 들어가기


$cellPhone = $_POST['cellPhone'];
$name = $_POST['name'];
$student_no = $_POST['student_no'];
$question = $_POST['question'];
$answer = $_POST['answer'];






if($student_no==null||$student_no=='')
{
	echo "<script>alert('학번을 입력해주세요.');history.back();</script>";
	exit;
}
if($cellPhone==null||$cellPhone=='')
{
	echo "<script>alert('번호를 입력해주세요.');history.back();</script>";
	exit;
}


if($name==null||$name=='')
{
	echo "<script>alert('이름을 입력해주세요.');history.back();</script>";
	exit;
}

$db->query = "select password from student_info where studentid='".$student_no."'and name='".$name."'and cellphone='".$cellPhone."'and question='".$question."'and answer='".$answer."'";//학생이 입력한 학번, 이름, 전화번호, 질문과 답이 회원가입시에 입력한 데이터와 일치할 경우 비밀번호 초기화
$db->DBQ();
 
$num = $db->result->num_rows;
if($num==1)	
{  $hash = password_hash("1234", PASSWORD_DEFAULT);//php에서 제공하는 hash를 이용해 비밀번호 암호화
   $db->query = "update student_info set cellphone='".$cellPhone."', password='".$hash."' where studentid='".$student_no."'" ;//비밀번호를 1234로 초기화 한다.
   $db->DBQ();
   echo "<script>alert('비밀번호는 ("."1234".") 입니다.로그인 후 비밀번호를 변경해주세요');location.replace('../index.php');</script>";
   $db->DBO();
   exit;
}else
{
	
	echo "<script>alert('다시 정보를 입력해주세요');history.back();</script>";
	$db->DBO();
	exit;
	
} 


?>
</body>
</html>
