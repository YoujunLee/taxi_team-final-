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

$num= (int)$_GET['num'];


$money = str_replace("'", "/'", $_POST['money']);

session_start();

$email = $_SESSION['user_id'];
$pw =  $_SESSION['user_pw']; 

$db = new DBC; //db object생성
$db->DBI();//db 들어가기
$db->query = "SELECT num2 FROM money ORDER BY num2 desc LIMIT 1";
$db->DBQ();
$num2 = $db->result->num_rows;
$data = $db->result->fetch_row();

if($num2==1)
{	$post_id = $data[0]+1;
}
else
{	$post_id=1;	
}
$db->query = "insert into money values ('".$post_id ."','".$num."','".$money."','".$email."')";
$db->DBQ();
if(!$db->result)
{
	
	echo "<script>alert('fail to project.');history.back();</script>";
	$db->DBO();
	
	exit;	
} 
else
{
	echo "<script>location.replace('../index.php');</script>";
}

$db->DBO();





?>
</body>
</html>