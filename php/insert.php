<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			require_once './config.php';
			$db = new DBC;
			$db->DBI();
			$db->query = "select num from notice order by num desc limit 1";
			
			$db->DBQ();
			
			$num1 = $db->result->num_rows;
			$data = $db->result->fetch_row();
			
			
			$num = $data[0]+1;
			
			
			$subject = $_POST['subject'];
			$memo= $_POST['memo'];
			$time = date("Y-m-d");
									
			if($subject==null||$subject=='')
			{
				echo "<script>alert('제목을 입력해주세요.');history.back();</script>";
				exit;
			}

			$db->query = "insert into notice values('".$num."','" . $subject . "','".$memo."','".$time."')";
			$db->DBQ();
			
			if(!$db->result)
			{
				echo "<script>alert('fail to posting.');history.back();</script>";
				$db->DBO();
				exit;	
			} 
			else
			{
				echo "<script>location.replace('../공지사항.html.php');</script>";
			}
		?>
	</body>
</html>