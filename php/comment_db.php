<?php
	require_once('./db.php');
	session_start();
	$db = new DBC; //db object생성
	$db->DBI();//db 들어가기
	$db->query = "select id from comment order by id desc limit 1";
	$db->DBQ();
<<<<<<< HEAD

	$num = $db->result->num_rows;
	$data = $db->result->fetch_row();

=======

	$num = $db->result->num_rows;
	$data = $db->result->fetch_row();

>>>>>>> 845f0b867a93dde6262c45efb868a10c7bedecbc
	if($num==1)
	$id = $data[0]+1;
	else
	$id=1;
	
	$name =  $_SESSION['name'] ;
	$content = $_POST['댓글'];
	$time = date("Y-m-d h:i:s");
	
<<<<<<< HEAD
=======
	$db1 = new DBC; //db object생성
	$db1->DBI();//db 들어가기
	$db1->query = "select post_id from post";
	$db1->DBQ();

	$num = $db1->result->num_rows;
	$data = $db1->result->fetch_row();
	echo $data['post_id'];
>>>>>>> 845f0b867a93dde6262c45efb868a10c7bedecbc
	
	if($content==null||$content==''){
		$db->DBO();
		echo "<script>location.replace('../Room1.php/$data[0]);</script>";
		exit;
	}
	$db->query = "insert into comment values('".$id."','".$name."','".$content."','" . $time. "')";
	$db->DBQ();
	$db->DBO();
	echo "<script>location.replace('../Room1.php/$data[0]);</script>";
	exit;
?>

	