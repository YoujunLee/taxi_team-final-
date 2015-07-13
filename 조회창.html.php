<?php
include "./php/session_out.php";
out();
?>
<!DOCTYPE html>
<html>
<head>
	<title>i-Taxi</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="./css/search.css">  
</head>
<body class="center">
	<div class = "col-xs-12  col-md-6 col-md-offset-3">
		<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="./index.php">Home</a></li>
  <li role="presentation"><a href="./조회창.html.php">조회창</a></li>
  <li role="presentation"><a href="./MyPage.html.php">Mypage</a></li>
</ul>
<form action='./php/logout.php'>
<div class="div_go">
                <input class="btn btn-lg btn-block" type="submit" value="LogOut">
			</div>
		
			
</form>	
	<!-- 방만들기, 방조회  -->
	<table >
		<tr class="tr1 row">
			<td class="col-xs-12 col-md-8" >
				<h3>방만들기</h3>
			</td>
			<td class="col-xs-6 col-md-4">
				<a href="./make_room.html.php" class="btn-primary btn-lg " >click</a>
    	   	</td>
		</tr>
		<tr class = "tr2 row" >
			<td class="col-xs-12 col-md-8" >
				<h3>방조회</h3>
			</td>
			<td class="col-xs-6 col-md-4">
    			<a href="./search_room.html.php" class="btn-primary btn-lg">click</a>
    		</td>
    	</tr>
		<tr class="tr1 row">
			<td class="col-xs-12 col-md-8" ></td>
			<td class="col-xs-6 col-md-4"></td>
		</tr>
		<tr class = "tr2 row" >
			<td class="col-xs-12 col-md-8" ></td>
			<td class="col-xs-6 col-md-4"></td>
		</tr>
		<tr class="tr1 row">
			<td class="col-xs-12 col-md-8" ></td>
			<td class="col-xs-6 col-md-4"></td>
		</tr>
		<tr class = "tr2 row" >
			<td class="col-xs-12 col-md-8" ></td>
			<td class="col-xs-6 col-md-4"></td>
		</tr>
		<tr class="tr1 row">
			<td class="col-xs-12 col-md-8" ></td>
			<td class="col-xs-6 col-md-4"></td>
		</tr>
		<tr class = "tr2 row" >
			<td class="col-xs-12 col-md-8" ></td>
			<td class="col-xs-6 col-md-4"></td>
		</tr>
		<tr class="tr1 row">
			<td class="col-xs-12 col-md-8" ></td>
			<td class="col-xs-6 col-md-4"></td>
		</tr>
		<tr class = "tr2 row" >
			<td class="col-xs-12 col-md-8" ></td>
			<td class="col-xs-6 col-md-4"></td>
		</tr>
		


	</table>
	<!-- 택시번호 요금계산기 마이페이지  -->
	
	<table class="myposition" name="taxi">
		<tr class="row">
			<td class="col-xs-6 col-md-4"><img src="http://image.shutterstock.com/display_pic_with_logo/68929/102419020/stock-vector-vector-taxi-icon-isolated-102419020.jpg" class="image" >
			 	</br>Taxi number
			</td>
			
			<td class="col-xs-6 col-md-4" >
				<a href="./계산기.html.php" target="taxi">
				<img src="http://365psd.com/images/premium/thumbs/193/vector-calculator-icon-861700.jpg" class="image " >
				</br>요금계산기</a>
			</td>
			<td class="col-xs-6 col-md-4">
				<a href="./MyPage.html.php" target="taxi">
				<img src="http://pds18.egloos.com/pds/201005/06/59/d0005159_4be26bd1f0632.jpg" class="image" >
			</br>My Page
			</td>
		</tr>
	</table>
</div>
</body>
</html>
