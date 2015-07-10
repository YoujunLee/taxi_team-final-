<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
		 <title>공지사항</title>
		 <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		 <link rel="stylesheet" type="text/css" href="./css/mypage.css">
	</head>
	<body>
		<div class="div_root">
		<br><br><br>
		<div align="center">
				<h2>공지사항</h2>
		</div>
		<br><br><br>
		<hr/>
		<ul class="list-group">
		  <li class="list-group-item">
		 	<?php	
				require_once('./php/config.php');
			
				$db = new DBC;	 //db object생성
				$db->DBI();		//db 들어가기
				
				$db->query = "select * from notice";
				$db->DBQ();
				
				while($data = $db->result->fetch_assoc())
				{
					echo $data['subject']. "(". $data['time']. ")". "<br>";
				}
			?>
		    <div class="modify2">
		    <a href="#" class="btn btn-link">></a>
		    </div>
		  </li>
			<!--java script 써서 추가해야할 것 같아요 -->
		</ul>
		<hr/>		
		</div>
	</body>
</html>