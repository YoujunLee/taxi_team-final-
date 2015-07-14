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
	<body >
		<div class=" col-xs-12  col-md-6 col-md-offset-3">
		<div class="div_root">
			<br><br><br>
			<div align="center">
				<h2>마이페이지</h2>
			</div>
			<br>
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<?php
		       
			   $name =  $_SESSION['name'] ;
			   echo "이름 : "."$name"."<br>";
			   $stu_id= $_SESSION['user_id'];
			 	echo "학번 : "."$stu_id"."<br>";
				$cellphone	= $_SESSION['cellphone'];
				echo "전화번호 : "."$cellphone"
		      ?>
			
			   <div class="modify">
			   <a href="./update_mypage.html.php" class="btn btn-link">개인정보 수정</a>
			   </div>
			  </div>
			</div>
			<br>
			<ul class="list-group">
			  <li class="list-group-item">
			 	  <a href="./mypage-탑승내역.html.php" class="btn btn-link">탑승내역 </a>
			  </li>
			  <li class="list-group-item">
			 	  <a href="./mypage-탑승내역.html.php" class="btn btn-link">공지사항</a>
			  </li>
			</ul>
			<br><br><br><br>
			<div class="div_go">
                <input class="btn btn-lg btn-block" type="submit" value="로그아웃">
			</div>
		</div>
		</div>
	</body>
</html>