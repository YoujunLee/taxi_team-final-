<?php
include "./php/session_out.php";
out();
?>
<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 <title>i-Taxi</title>
   		 <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="./css/mypage.css">
	</head>
	<body>
		<div class="div_root">
			<br><br><br>
			<div align="center">
				<h2>마이페이지</h2>
			</div>
			<br>
			<div class="panel panel-default">
			  <div class="panel-body">
			   이름
			   <br> 학번
			   <br> 010-0000-0000
			   <div class="modify">
			   <a href="#" class="btn btn-link">개인정보 수정</a>
			   </div>
			  </div>
			</div>
			<br>
			<ul class="list-group">
			  <li class="list-group-item">
			 	   탑승내역
			    <div class="modify2">
			    <a href="./mypage-탑승내역.html.php" class="btn btn-link">></a>
			    </div>
			  </li>
			  <li class="list-group-item">
			    공지사항
			    <div class="modify2">
			    <a href="./공지사항.html.php" class="btn btn-link">></a>
			    </div>
			  </li>
			  <li class="list-group-item">
			    설정
			    <div class="modify2">
			    <a href="#" class="btn btn-link">></a>
			    </div>
			  </li>
			</ul>
			<br><br><br><br>
			<div class="div_go">
                <input class="btn btn-lg btn-block" type="submit" value="로그아웃">
			</div>
		</div>
	</body>
</html>