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
include "./session_out.php";
out();

$stu_id= $_SESSION['user_id'];
$name =  $_SESSION['name'] ;
$cellPhone = $_POST['cellPhone'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$db->query = "select studentid, name, cellphone, password from student_info where studentid='".$stu_id."'";
$db->DBQ();
$data = $db->result->fetch_row();
$num = $db->result->num_rows;
if(!$db->result)
{
	
	echo "<script>alert('개인정보 수정에 실패하였습니다. 다시 시도하시기바랍니다.');history.back();</script>";
	$db->DBO();
	exit;
	
}

if (password_verify($pass, $data[3])) {
  	;  // 비밀번호가 맞음 
                }else 
                { 
       echo "<script>alert('기존 비밀번호가 맞지 않습니다.');history.back();</script>";
	$db->DBO();
	exit;
		            // 비밀번호가 틀림 
                } 

if($num!=1)
{
	echo "<script>alert('기존 비밀번호가 맞지 않습니다.');history.back();</script>";
	$db->DBO();
	exit;
}

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
$hash = password_hash($pass, PASSWORD_DEFAULT);
$db->query = "update student_info set cellphone='".$cellPhone."', password='".$hash."' where studentid='".$stu_id."'" ;
$db->DBQ();

if(!$db->result)
{
	
	echo "<script>alert('개인정보 수정에 실패하였습니다. 다시 시도하시기바랍니다.');history.back();</script>";
	$db->DBO();
	exit;
	
} else
{
	echo "<script>alert('개인정보가 수정 되었습니다. 다시 로그인하면 변경된 사항이 적용됩니다.');location.replace('../index.php');</script>";
	$db->DBO();
	exit;
}



?>
</body>
</html>
