<?php
	require_once('./db.php');
	
	$db = new DBC; //db object생성
$db->DBI();//db 들어가기

	$content = $_POST['댓글'];
	
	$db->query = "insert into comment values('" . $content . "')";
	$db->DBQ();

?>
	