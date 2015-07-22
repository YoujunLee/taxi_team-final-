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
			  		정말 탈퇴하시겠습니까?
			  		<br /><br />
			  		<div class = "div_yg" >
						<a href="./byebye.html.php"><input type="submit" value="탈퇴" class="margin_right btn btn-info" style="background-color:#34c6be; color: #ffffff; border-color: #34C6BE"></a>
						<input style="border: none; width: 50px;" />
						<a href="./MyPage.html.php"><input type="button" value="취소" class="btn btn-danger"></a>
					</div>
					<br />
			  </div>
			</div>
		</div>
		</form>
	</body>
</html>