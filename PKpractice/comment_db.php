<?php
	require_once('./db.php');
	
	$db = new DBC; //db object생성	
	$db->DBI();//db 들어가기
	

	$content = $_POST['댓글'];
	$time = date("Y-m-d H:i:s",time());
	
	if($content==null||$content==''){
		$db->DBO();
		echo "<script>location.replace('./Room.php');</script>";
		exit;
	}
	$db->query = "insert into comment values('" . $content . "','".$time."')";
	$db->DBQ();
	$db->DBO();
	echo "<script>location.replace('./Room.php');</script>";
	exit;

?>

	