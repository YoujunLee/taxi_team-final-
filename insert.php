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
			
						
			$db->query = "select num from notice order by num desc limit 1'";
			$db->DBQ();
			
			
			$data = $db->result->fetch_row();
			$num1 = $db->result->num_rows;
			if($num1==1)
				$num = $data[0]+1;
			else
				$num=1;
						$num = $data[0]+1;
			
			$db->query = "insert into notice values('".$num."','" . $subject . "','".$memo."')";
			$db->DBQ();
			$db->DBO();
			echo "<script>location.replace('./공지사항_글쓰기.php');</script>";
			exit;
		?>
	</body>
</html>