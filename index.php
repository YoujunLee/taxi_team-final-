<!-- Login page -->
<?php
session_start();
if(isset($_SESSION['user_id']) && isset($_SESSION['user_pw']))
echo "<script>location.replace('./조회창.html.php');</script>";
?>

<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   		 <title>i-Taxi</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/로그인.css">
   		 <link rel="apple-touch-icon-precomposed">
   		 
   		 <script type="text/javascript" src="./js/bookmark_bubble.js"></script>
   		 <script type="text/javascript" src="./js/example.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="./js/set.js"></script> 
	</head>
	
	<body>
		<div class= "col-xs-12  col-md-4 col-md-offset-4">
		
		<div class="wrapper">
			<img src="./img/logo_big.png"  width = "100%" >
		</div>
		
  		<!-- Id 입력창 -->
	  	<form action='./php/login.php'  method='post'>
			<div class="div1">
			    <input type="tel" class="form-control" autofocus placeholder="Student ID" name="logid" required>
			</div>
			<br>
			<!-- Pw 입력창 -->
			<div class="div1">
		    	<input type="password" class="form-control" placeholder="Password"  name="logpass" required>
			</div>
					
			<br><br><br>
	            <input class="btn btn-lg btn-block" type="submit" style="background-color:#34c6be; color: #ffffff;" value="GO">
		</form>
		<br>			

		<!-- 회원가입 버튼 -->
		<form action='./약관.html.php'>
			<input class="btn btn-lg btn-block" type="submit" style="background-color:#ffde00; color: #ffffff;" value="회원가입">
	    </form>
	    <form class="right_go" action='./password.html.php'>
			<input class = "btn1" type="submit" value="비밀번호 찾기">
		</form>
		<div class="div2">
			   
			   <span>본 서비스는 모바일 환경에 최적화 되어있습니다.</span>
		</div>
		
		</div>
		
	</body>
</html>