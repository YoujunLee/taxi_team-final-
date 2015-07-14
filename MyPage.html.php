<?php
include "./php/session_out.php";
out();
?>
<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		 <title>i-Taxi</title>
   		 <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="./css/mypage.css">
	</head>
	<body class="padding">
		<div class="col-xs-12  col-md-6 col-md-offset-3" style="
 		   padding-right: 0px; padding-left: 0px;">
			
			<nav class="navbar navbar-inverse">
			<a class="navbar-brand" href="./index.php"><img class="imgpa" src="./img/logo.png"></a>
			<ul class="nav navbar-nav navbar-right right" style=" margin-right: 0px;">
        <li ><a href="./php/logout.php">LogOut</a></li>
      </ul>
      </nav>

		
			<br>
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
			 	  <a href="./공지사항.html.php" class="btn btn-link">공지사항</a>
			  </li>
			</ul>		
		</div>
	</body>
</html>