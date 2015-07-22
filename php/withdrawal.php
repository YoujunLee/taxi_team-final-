<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
   		 <title>i-Taxi</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
	</head>
	<body>
		<?php
		
		require_once './config.php';
		
		$db = new DBC; //db object생성
		$db->DBI();//db 들어가기
		
		$pass = $_POST['pass'];
		session_start();
		
		$db->query = "select password from student_info where studentid = '".$_SESSION['user_id']."'";
		$db->DBQ();
		$data = $db->result->fetch_row();
		
		if(!$db->result)
		{
			echo "<script>alert('탈퇴에 실패하였습니다. 다시 시도해주세요.');history.back();</script>";
			$db->DBO();
			exit;
		}
		
		if (password_verify($pass, $data[0]))
		{
			$db->query = "delete from student_info where studentid='".$_SESSION['user_id']."'";
			$db->DBQ();
			
			if(!$db->result)
			{
				
				echo "<script>alert('탈퇴에 실패하였습니다. 다시 시도해주세요.');history.back();</script>";
				$db->DBO();
				exit;
				
			}
			else
			{
				echo "<script>location.replace('../byebye.html.php');</script>";
				$db->DBO();
				exit;
			}
		}  			// 비밀번호가 맞음 
		else
		{ 
		     echo "<script>alert('비밀번호가 맞지 않습니다. 다시 입력해주세요.');history.back();</script>";
			$db->DBO();
			exit;
		}	        // 비밀번호가 틀림 
		
		?>
</body>
</html>