<!-- QnA 질문창 -->

<!DOCTYPE html>
<?php
	include "./php/session_out.php";
	out();
?>
<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<title>i-Taxi</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/mypage.css">
	</head>
	<body>
		<table class="navi col-xs-12  col-md-4 col-md-offset-4" >	
		<tr class="row">
		   <td class = "logo" >
      			<a onclick="location.href='./main.html.php'">
      				<img src="./img/logo.png">
      			</a>
  		   </td>
  		   <td class = "logout1">
      	   		<a onclick="history.back(-1)">
		     		<img src="./img/back.png" width="25px" height="25px">
	       		</a>
           </td>
  		   <td class = "logout">
      	   		<a  onclick="location.href='./php/logout.php'">
      	   			<img src="./img/power.png" width="30px" height="30px">
	       		</a>
           </td>
  		</tr>
		</table>
		
		<div class = "col-xs-12  col-md-4 col-md-offset-4">
		<br>
		<form align="center" name="myForm" method="post" action="./php/insert_QnA.php">
			<div>
				<input name="subject" type="text" size=40  maxlength=70 placeholder=" 제목을 입력해주세요.">
			</div>
			<br/>
			<div>
				<textarea name="memo" cols=40 rows=18  maxlength=500 placeholder=" 문의사항을 입력해주세요."></textarea>
			</div>
			<br/>
				<input class="btn5" type="submit" value="문의하기"/>
			<br/>
			</div>
		</form>
	</body>
</html>