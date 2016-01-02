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



$type = str_replace("'", "/'", $_POST['type']);
$title = str_replace("'", "/'", $_POST['title']);  //str 문을 통하여 보안강화
$manager= str_replace("'", "/'", $_POST['manager']);
$content = str_replace("'", "/'", $_POST['content']);
$year = str_replace("'", "/'", $_POST['year']);
$month = str_replace("'", "/'", $_POST['month']);
$day = str_replace("'", "/'", $_POST['day']);
$price = str_replace("'", "/'", $_POST['price']);
session_start();

$email = $_SESSION['user_id'];
$pw =  $_SESSION['user_pw']; 

$db = new DBC; //db object생성
$db->DBI();//db 들어가기
$db->query = "SELECT num FROM project ORDER BY num desc LIMIT 1";
$db->DBQ();
$num = $db->result->num_rows;
$data = $db->result->fetch_row();

if($num==1)
{	$post_id = $data[0]+1;
}
else
{	$post_id=1;	
}
$db->query = "insert into project values ('".$post_id ."','".$type."','".$title."','".$manager."', '".$content."','".$year."','".$month."','".$day."', '".$price."', '".$email."')";
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