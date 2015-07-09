<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
		 <title>공지사항</title>
		 <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		 <link rel="stylesheet" type="text/css" href="./css/mypage.css">
	</head>
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
				echo "내용: ".$data['memo']."<br>";
			}
		?>
		<div class="div_root">
		<br><br><br>
		<div align="center">
				<h2>공지사항</h2>
		</div>
		<br><br><br>
		<hr/>
  		<ul class="list-group">
		  <li class="list-group-item">
		 	   안녕하세요! 드디어 택시 카풀 어플이 나왔습니다! (8/1)
		    <div class="modify2">
		    <a href="#" class="btn btn-link">></a>
		    </div>
		  </li>
			<!--공지사항은 그때그때 쓸말 생길때마다 칸 만들어서 써도 될 것 같아요~ -->
		</ul>
		<hr/>		
		</div>
	</body>
</html>