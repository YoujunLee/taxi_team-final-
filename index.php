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
   		<!-- // <meta name="viewport" content="width=device-width, initial-scale=1"> -->
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/로그인.css">	
	</head>
	<body>
		<div style="top: 120px" class= "col-xs-12  col-md-4 col-md-offset-4">
		
		<div align="center">
			<img src="./img/logo_big.png">
		</div>
		<br><br><br>
  			
  			<!-- Id 입력창 -->
	  		<form action='./php/login.php'  method='post'>
		  		<div class="input-group input-group-lg" class="div_login">
		  		
				  <span class="input-group-addon" id="sizing-addon1">
				  	<img src="../img/login.png">
				  </span>
				  <input type="text" class="form-control" placeholder="Student ID" name="logid" required>
			
				</div>
				<br>
				<!-- Pw 입력창 -->
				<div class="input-group input-group-lg" class="div_login">
					
					<span class="input-group-addon" id="sizing-addon1">
						<img id="profile-photo" src="../img/pwd.png">
					</span>
					<input type="password" class="form-control" placeholder="Password"  name="logpass" required>
				</div>
				<br><br><br>
	                <input sytle="background-color=#34c6be" class="btn btn-lg btn-block" type="submit" value="GO">
			</form>
			<br>			
		    <!-- 회원가입 버튼 -->
		    <form action='./SignUp.html.php'>
		     <input sytle="background-color=#34c6be"class="btn btn-lg btn-block" type="submit" value="회원가입">
		    
	       </form>
		   </div>
	</body>
</html>