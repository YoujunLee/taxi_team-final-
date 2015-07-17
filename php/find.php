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

$db->query = "select password from student_info where studentid='".$student_no."'and name='".$name."'and cellphone='".$cellPhone."'and question='".$question."'and answer='".$answer."'";
$db->DBQ();
 
$num = $db->result->num_rows;
if($num==1)	
{
   while($data = $db->result->fetch_row())
	 {$pass = $data[0]; }
   echo "<script>alert('비밀번호는 (".$pass.") 입니다.');location.replace('../index.php');</script>";
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
