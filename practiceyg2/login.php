<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
   		 <title>로그인</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
	</head>
	<body>
<?php
require_once './db.php';

$db = new DBC;
$db->DBI();

$studentid = $_POST['logid'];
$pass = $_POST['logpass'];

$db->query = "select studentid, password from student_info where studentid='".$studentid."' and password='".$pass."'";
$db->DBQ();

$num = $db->result->num_rows;
$data = $db->result->fetch_row();

$db->DBO();
if($num==1)
{
	
	echo "<script>location.replace('./조회창yg.html');</script>";
	exit;
} 
else if(($studentid==null))
{
	echo "<script>alert('학번을 입력해주세요.');location.replace('./indexyg.php');</script>";
	exit;
}
else if(($pass==null))
{
	echo "<script>alert('비밀번호를 입력해주세요.');location.replace('./indexyg.php');</script>";
	exit;
}
else if(($studentid!="" || $pass!=""))
{
	echo "<script>alert('학번과 비밀번호가 맞지 않습니다.');location.replace('./indexyg.php');</script>";
	exit;
}
?>
</body>
</html>
