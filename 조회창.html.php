<?php
include "./php/session_out.php";
out();
?>
<!DOCTYPE html>
<html>
<head>
	<title>i-Taxi</title>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="./css/search.css">
	<style>
		.imgpa
		{
			margin-top: -6%;
		}
		ul.right
		{
			float:right !important;
			padding-right : 5% !important;
		}
		
	</style>  
</head>
<body class="center">
	<div class = "col-xs-12  col-md-6 col-md-offset-3 padding">

		<nav class="navbar navbar-inverse">
  <!-- <div class="container-fluid"> -->
  	 <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
    <!-- <div class="navbar-header"> -->
      <a class="navbar-brand" href="./index.php"><div class="imgpa"><img src="./img/logo.png"></div></a>
    <!-- </div> -->
      <ul class="nav navbar-nav navbar-right right">
        <li><a href="./php/logout.php">LogOut</a></li>
      </ul>
    <!-- </div> -->
  
</nav>
</div>
			
	<!-- 방만들기, 방조회  -->
	
	<table class = "col-xs-12  col-md-6 col-md-offset-3">
		<tr class="tr1 row">
			<td >
				<a href="./make_room.html.php">
				<h3>방만들기</h3></a>
			</td>
			</tr>
		<tr class = "tr2 row" >
			<td  >
				<a href="./search_room.html.php" >
				<h3>방조회</h3></a>
			</td>
			</tr>
		<tr class="tr1 row">
			<td  >
				<a href="./MyPage.html.php">
				<h3>MyPage</h3></a>
			</td>
		</tr>
		<tr class = "tr2 row" >
			<td  >
				<a href="./mypage-탑승내역.html.php" >
				<h3>탑승내역</h3></a>
			</td>
			
	</table>
	
	<!-- 택시번호 요금계산기 마이페이지  -->
	<br><br><br>
	<table class = "col-xs-12  col-md-6 col-md-offset-3" >
		<br><br><br>
		<tr class="row">
			<a href="#">
			<td ><img src="./img/taxi.png" class="image" >
			 	</br>Taxi number</a>
			</td>
			
			<td  >
				<a href="./계산기.html.php" target="taxi">
				<img src="http://365psd.com/images/premium/thumbs/193/vector-calculator-icon-861700.jpg" class="image " >
				</br>요금계산기</a>
			</td>
			
		</tr>
		
	</table>
	
</div>
</body>
</html>
