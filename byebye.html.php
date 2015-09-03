<?php
	session_start();
	session_unset('user_id');
	session_unset('user_pw');
	session_unset('name');
	session_unset('cellphone');
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
      				<a  href="./main.html.php"><img src="./img/logo.png"></a>
  			   </td >
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
			  		탈퇴가 완료되었습니다.<br />그동안 <a style="color: #34C6BE">iTaxi</a>를 이용해주셔서 감사합니다.<br />오늘도 행복한 하루 보내세요 :) 
			  		<br /><br />
					<a href="./index.html.php"><input type="submit" value="처음으로 돌아가기" class="margin_right btn btn-info" style="background-color:#34c6be; color: #ffffff; border-color: #34C6BE"></a>
			  </div>
			</div>
		</div>
	</body>
</html>