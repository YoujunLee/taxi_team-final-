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

$id = $_POST['logid'];
$pass = $_POST['logpass'];

$db->query = "select id, password from student_info where id='".$id."' and password='".$pass."'";
$db->DBQ();

$num = $db->result->num_rows;
$data = $db->result->fetch_row();

$db->DBO();
if($num==1)
{
	
	echo "<script>location.replace('./조회창yg.html');</script>";
} else if(($id!="" || $pass!="") && $data[0]!=1)
{
	echo "<script>alert('아이디와 비밀번호가 맞지 않습니다.');location.replace('./indexyg.php');</script>";
}
?>
</body>
</html>
