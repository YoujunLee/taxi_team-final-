<?php
include "./php/session_out.php";
out();
?>
<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
      	   		<a href='./php/logout.php'>
      	   			<img src="./img/power.png" width="30px" height="30px">
	       		</a>
           </td>
      	   <td class = "logout1">
      	   		<a href='./조회창.html.php'>
		     		<img src="./img/home.png" width="25px" height="25px">
	       		</a>
           </td>
      		</tr>
		</table>
		
		<div top-padding:"20%" class="col-xs-12  col-md-4 col-md-offset-4">
			<div class="panel panel-default" style="text-align: center; border: none;">
			  <div class="panel-body">
			  		<br><br><br><br><br>
			  </div>
			</div>
			<div class="panel panel-default" style="text-align: center; border: none;">
			  <div class="panel-body">
			  		탈퇴가 완료되었습니다!<br />그동안 <a style="color: #34C6BE">iTaxi</a>를 이용해주셔서 감사합니다.<br />오늘도 행복한 하루 보내세요 :) 
			  		<br /><br />
			  </div>
			</div>
		</div>
	</body>
</html>