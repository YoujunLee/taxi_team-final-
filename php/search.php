<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php
include "./session_out.php";
out();
$start = $_POST['search_start'];
$arrive = $_POST['search_arrive'];
$date = $_POST['search_date'];
$s_time= $_POST['start_time'];
$e_time = $_POST['end_time'];

echo $s_time.$e_time."<br>";
require_once './config.php';

$db = new DBC;
$db->DBI();

$db->query = "select start, arrive, date, time from post where start='".$start."' and arrive='".$arrive."'and date='".$date."'and time>='".$s_time."'and time<='".$e_time."'";
$db->DBQ();


while($data = $db->result->fetch_row())
{
	echo $data[0];
	echo $data[1];
	echo $data[2];
	echo $data[3]."<br>";
}

$db->DBO();
/*
require_once './config.php';
  
$db = new DBC; //db object생성
$db->DBI();//db 들어가기

$db->query = "SELECT start, arrive, date, time FROM post";
$db->DBQ();

$num = $db->result->num_rows;
$result=$db->result;

while($data = mysql_fetch_array($db->query))
{
	var_dump($data);
	echo'<br>';
}

if($num==1)
	$post_id = $data[0]+1;
else
	$post_id=1;

$start = $_POST['search_start'];
$arrive = $_POST['search_arrive'];
$date = $_POST['search_date'];
$s_time= $_POST['start_time'];
$e_time = $_POST['end_time'];


if($room_date==null||$room_date=='')
{
	echo "<script>alert('비밀번호를 입력해주세요.');history.back();</script>";
	exit;
}

$db->DBQ();

if(!$db->result)
{
	
	echo "<script>alert('fail to posting.');history.back();</script>";
	$db->DBO();
	exit;
	
} else
{
	echo "<script>alert('Success. Move to 1');location.replace('../Room1.php');</script>";
	//$db->DBO();
	exit;
}
 * */
?>
</body>
</html>