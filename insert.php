<<<<<<< HEAD
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
=======
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			require_once('./php/db.php');
			$db = new DBC;
			$db->DBI();
			
			$subject = $_POST['subject'];
			$memo= $_POST['memo'];
			
			$db->query = "insert into notice values('1','" . $subject . "','".$memo."')";
			$db->DBQ();
			$db->DBO();
			echo "<script>location.replace('./공지사항_글쓰기.php');</script>";
			exit;
		?>
	</body>
</html>
>>>>>>> 845f0b867a93dde6262c45efb868a10c7bedecbc
