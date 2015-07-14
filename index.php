<?php
session_start();
if(isset($_SESSION['user_id']) && isset($_SESSION['user_pw']))
echo "<script>location.replace('./조회창.html.php');</script>";
?>

<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
   		 <title>i-Taxi</title>
   		<!-- // <meta name="viewport" content="width=device-width, initial-scale=1"> -->
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/로그인.css">	
   		 
	</head>
	<body class="background_color">
		<div class = "col-xs-12  col-md-6 col-md-offset-3">
		
  		<!-- <div class="div_root"> -->
		<br><br><br><br>
		<div align="center">
			<h2>로그인</h2>
		</div>
		<br><br><br>
  			<!-- Id 입력창 -->
  			<form action='./php/login.php'  method='post'>
	  		<div class="input-group input-group-lg" class="div_login">
	  		
			  <span class="input-group-addon" id="sizing-addon1">
			  	<img src="../img/login.png">
			  </span>
			  <input type="text" class="form-control" placeholder="Student ID" aria-describedby="sizing-addon1" name="logid" required>
		
			</div>
			<br>
			<!-- Pw 입력창 -->
			<div class="input-group input-group-lg" class="div_login">
				
				<span class="input-group-addon" id="sizing-addon1">
					<img id="profile-photo" src="../img/pwd.png">
				</span>
				<input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1"  name="logpass" required>
			</div>
			<br><br>
			<br><br><br>
			<div class="div_go">
                <input class="btn btn-lg btn-block" type="submit" value="GO!">
			</div>
			
		</form>
			<br>
				    <!-- 보기 좋게 띄우기 -->
		    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		    <!-- 회원가입 버튼 -->
		    <a href="./SignUp.html.php"><button class="btn btn-lg btn-block">회원가입→</button></a>
		    </div>
		</div>
		<!-- </div> -->
	</body>
</html>