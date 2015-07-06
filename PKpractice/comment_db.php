<?php
	require_once('../Room.php');
	
	
	$content = $_POST['content'];
	
	$sql = 'insert into comment values("' . $content . '")';
	$result = $db->query($sql);

?>
	