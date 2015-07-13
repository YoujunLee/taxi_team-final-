<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
include "./session_out.php";
out();
require_once './config.php';





$db2 = new DBC; //db object생성
$db2->DBI();//db 들어가기
$db2->query = "SELECT id FROM room_user ORDER BY id desc LIMIT 1";
$db2->DBQ();
$num1 = $db2->result->num_rows;
$data1 = $db2->result->fetch_row();
if($num1==1)
{
	$id = $data1[0]+1;	
}
else
{
	$id=1;
}
$post_id = $_GET['post_id'];
$stu_id= $_SESSION['user_id'];
$name =  $_SESSION['name'] ;
$cellphone	= $_SESSION['cellphone'];


$db2->query = "insert into room_user values('".$id."', '".$post_id ."','".$stu_id."','".$name."','".$cellphone."')";


$db2->DBQ();
$db2->DBO();

echo "<script>location.replace('../Room.html.php?".$post_id."');</script>";

?>
</body>
</html>