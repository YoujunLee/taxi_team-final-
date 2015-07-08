<?php
	require_once('./php/db.php');
	$db = new DBC;
	$db->DBI();
	
	$subject = $_POST['subject'];
	$memo= $_POST['memo'];
	
	$db->query = "insert into notice values('" . $subject . "','".$memo."')";
	$db->DBQ();
	$db->DBO();
	echo "<script>location.replace('./공지사항_글쓰기.php');</script>";
	exit;
?>