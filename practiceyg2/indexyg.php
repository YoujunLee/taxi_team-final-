<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
   		 <title>로그인</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/로그인.css">
	</head>
	<body>

  		<div class="div_root">
		<br><br><br><br>
		<div align="center">
			<h2>로그인</h2>
		</div>
		<br><br><br>
  			<!-- Id 입력창 -->
  			<form action='./login.php'  method='post'>
	  		<div class="input-group input-group-lg" class="div_login">
			  <span class="input-group-addon" id="sizing-addon1">
			  	<img src="../img/login.png">
			  </span>
			  <input type="text" class="form-control" placeholder="ID" aria-describedby="sizing-addon1" name="logid">
			</div>
			<br>
			<!-- Pw 입력창 -->
			<div class="input-group input-group-lg" class="div_login">
				<span class="input-group-addon" id="sizing-addon1">
					<img id="profile-photo" src="../img/pwd.png">
				</span>
				<input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1"  name="logpass">
			</div>

			<br><br>
			

			<br><br><br>

			<div class="div_go">
                <input class="btn btn-lg btn-block" type="submit" value="GO!">
			</div>
			
		</form>
			<br>
			<!-- remember id and pw -->
	        <div align="center" class="checkbox">
	        <label>
		        <input type="checkbox" value="remember-me">
		         로그인 상태 유지
		    </label>
		    <!-- 보기 좋게 띄우기 -->
		    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		    <!-- 회원가입 버튼 -->
		    <a href="./SignUpyg.php"><button class="btn btn-primary">회원가입→</button></a>
		    </div>
		</div>
	</body>
</html>