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
      				<a  href="./main.html.php"><img src="./img/logo.png"></a>
  			   </td >
				<td class = "logout">
    			  <form action='./php/logout.php'>
		     	  <input class="btn1" type="submit" value="LogOut">
	              </form>
      		    </td >
      		</tr>
		</table>
		<div class = "col-xs-12  col-md-4 col-md-offset-4">
		<br><br><br>

		<form name="myForm" method="post" action="./php/insert.php">
			제목 : <input name="subject" type="text" size=50  maxlength=70> <br/><br/>
			내용 : <textarea name="memo" cols=55 rows=20  maxlength=500></textarea>
			<br/>
			<br/>
			<div align="right">
				<input type="submit" value="글쓰기"/>
			</div>
			</div>
		</form>
	</body>
</html>