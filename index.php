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
	                <input class="btn btn-lg btn-block" type="submit" value="GO">
			</form>
			<br>			
		    <!-- 회원가입 버튼 -->
		    <form action='./SignUp.html.php'>
		     <input class="btn btn-lg btn-block" type="submit" value="회원가입">
	       </form>
		   </div>
		   
		   <!--시도-->
		   <div class="form">
		      <div class="tab-content">
		    
		        <div id="login">   
		          <h1>Welcome!</h1>
		          
		          <form action="/" method="post">
		          
		            <div class="field-wrap">
		            <label>
		              Student ID<span class="req">*</span>
		            </label>
		            <input type="email"required autocomplete="off"/>
		          </div>
		          
		          <div class="field-wrap">
		            <label>
		              Password<span class="req">*</span>
		            </label>
		            <input type="password"required autocomplete="off"/>
		          </div>
		          
		          <p class="forgot"><a href="#">Forgot Password?</a></p>
		          
		          <button class="button button-block"/>로그인</button>
		          
		          </form>
		
		        </div>
		        
		      </div><!-- tab-content -->
		      
		</div> <!-- /form -->
	</body>
</html>