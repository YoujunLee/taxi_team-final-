<html>
	<head>
		<meta charset="utf-8">
		<title>공지사항</title></head>
	<body>
		<?php	
			require_once('./php/db.php');
		
			$db = new DBC; //db object생성
			$db->DBI();//db 들어가기
			
			$db->query = "select * from notice";
			$db->DBQ();
			
			while($data = $db->result->fetch_assoc())
			{
				echo "제목: ".$data['subject']."<br>";
				echo "내용: ".$data['memo'];
			}
		?>
	</body>
</html>