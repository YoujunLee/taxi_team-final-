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
		<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
			<tr class="row">
  			   <td class = "logo" >
      				<a  href="./조회창.html.php"><img src="./img/logo.png"></a>
  			   </td >
				<td class = "logout">
    			  <form action='./php/logout.php'>
		     	  <input class="btn1" type="submit" value="LogOut">
	              </form>
      		    </td >
      		</tr>
		</table>
		<div class = "col-xs-12  col-md-4 col-md-offset-4">
		<br>
		<form align="center" name="myForm" method="post" action="./php/insert.php">
			<div>
				제목  <input name="subject" type="text" size=40  maxlength=70>
			</div>
			<br/>
			<div>
				내용  <textarea align="center" name="memo" cols=42 rows=20  maxlength=500></textarea>
			</div>
			<br/>
				<input class="btn5" type="submit" value="문의하기"/>
			<br/>
			</div>
		</form>
	</body>
</html>