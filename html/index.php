<!--Login page -->

<?php
session_start();
if(isset($_SESSION['user_id']) && isset($_SESSION['user_pw']))
echo "<script>location.replace('./main.html.php');</script>";
?>

<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   		 <title>i-Taxi</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/login.css">
   		 <meta name="apple-mobile-web-app-capable" content="yes" />
   		 <link rel="apple-touch-icon-precomposed" href="./img/logo_big.png" />
   		 <link rel="apple-touch-icon" href="./img/logo_big.png" />
   		 <script type="text/javascript" src="./js/bookmark_bubble.js"></script>
   		 <script type="text/javascript" src="./js/page.js"></script>
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
			<form action='./info.html.php'>
				<input class="btn btn-lg btn-block" type="submit" style="background-color:#ffde00; color: #ffffff;" value="회원가입">
	    	</form>
	
	    	<form class="right_go" action='./password.html.php'>
				<input class = "btn1" type="submit" value="비밀번호 찾기">
			</form>
		
			<div class="div2">
			   <span>11/13 소규모 업데이트 완료.(포항역 출발지 수정 등)</span><br>
			   <span>본 서비스는 모바일 환경에 최적화 되어 있습니다.</span> <br>
			   <span>로그인 오류시 injxyj@gmail.com으로 메일주세요</span>
			</div>
		</div>
	</body>
</html>
