<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
WOW
<?php
$start = $_POST['search_start'];
$arrive = $_POST['search_arrive'];
$date = $_POST['search_date'];
$s_time= $_POST['start_time'];
$e_time = $_POST['end_time'];

mysql_connect('localhost','root', 'taxi');
mysql_select_db('youjun');

mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

$result = mysql_query("SELECT start, arrive, date, time FROM post");

while($data = mysql_fetch_array($result))
{
	echo $data['date'];
	echo '<br>';
}
echo '123';
echo $data['date'];

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