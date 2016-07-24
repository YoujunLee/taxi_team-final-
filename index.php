<!--Login page -->

<?php
session_start();//세션사용을 시작한다.
if(isset($_SESSION['user_id']) && isset($_SESSION['user_pw']))
echo "<script>location.replace('./main.html.php');</script>";//만약 로그인을 했을 경우에 ./php/login.php에서 $_SESSION['user_id']과 $_SESSION['user_pw']를(각각 학번과 비번)
                                                                  // 설정해 놓고 로그인 세션이 남아있을 경우 로그인 없이 메인화면으로 넘어가게 한다.
?>

<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8"> <!-- 한글깨짐방지로 utf-8로 설정 -->
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><!-- 모바일 가로 사이즈에 맞추고 (가로 스크롤 안생김) 정상배율에 확대축소 안되게 설정 -->
   		 <title>iTaxi</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"><!-- https://bootswatch.com/에 있는 공짜 css테마를 사용(약간 수정) -->
   		 <link rel="stylesheet" type="text/css" href="../css/login.css"><!-- 직접만든 css -->
   		 <meta name="apple-mobile-web-app-capable" content="yes" /><!-- 모바일 사파리 풀 스크린으로 시작 -->
   		 <link rel="apple-touch-icon-precomposed" href="./img/logo_big.png" /><!-- 아이폰 precomposed 아이콘 지정 -->
   		 <link rel="apple-touch-icon" href="./img/logo_big.png" /><!-- 아이폰 터치아이콘 지정 -->
   		 <script type="text/javascript" src="./js/bookmark_bubble.js"></script>
   		 <script type="text/javascript" src="./js/page.js"></script>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="./js/set.js"></script> <!-- 아이폰 바로가기추가 하기 위한 자바스크립트 및 라이브러리들 -->
	</head>
	
	<body>
		
		<div class= "col-xs-12  col-md-4 col-md-offset-4"><!-- col-xs-12는 모바일에서 가로를 12등분 했을 때 모두 사용 col-md-4 col-md-offset-4는 컴퓨터에서 가로 12등분했을 때 4칸 뛰고 4칸만 사용 -->
			<div class="wrapper">
				<img src="./img/logo_big.png"  width = "100%" > <!-- 아이택시 로고 이미지 -->
			</div>
		
  			<!-- Id 입력창 -->
	  		<form action='./php/login.php'  method='post'> <!-- 로그인 버튼 누를 시 /php/login.php로 넘어감 사용자가 입력한 학번과, 비밀번호 데이터를 post형태로 넘긴다. -->
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
			<form action='./info.html.php'> <!-- 회원가입 버튼 누를 시 /info.html.php로 넘어감 -->
				<input class="btn btn-lg btn-block" type="submit" style="background-color:#ffde00; color: #ffffff;" value="회원가입">
	    	</form>
	
	    	<form class="right_go" action='./password.html.php'> <!-- 비밀번호 찾기 버튼 누를 시 /password.html.php로 넘어감 -->
				<input class = "btn1" type="submit" value="비밀번호 찾기">
			</form>
		
			<div class="div2">
			   <span>본 서비스는 모바일 환경에 최적화 되어 있습니다.</span> <br>
			   <span>로그인 오류시 hguitaxi@gmail.com으로 메일주세요</span>
			</div>
		</div>
	</body>
</html>