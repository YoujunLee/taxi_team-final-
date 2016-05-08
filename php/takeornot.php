<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$hostname=$_SERVER["HTTP_REFERER"];
			
			echo "<script>
				   var result=confirm('탑승하시겠습니까?');
				   if(!result)
				   location.replace('$hostname');
				   </script>";
				   	
			include "./session_out.php";
			out();
			require_once './config.php';
			
			$post_id=getenv("QUERY_STRING");
			$stu_id= $_SESSION['user_id'];
			
			/*탑승 취소시 room_user db에서 인원 삭제*/
			$db = new DBC;
			$db->DBI();//db 들어가기
			$db->query = "DELETE FROM room_user WHERE post_id='".$post_id."' AND stu_id='".$stu_id."'";
			$db->DBQ();
			$db->DBO();
		?>
	</body>
</html>
