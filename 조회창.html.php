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
	<style>
		
	</style>  
</head>
<body class="center">
	<div class = "col-xs-12  col-md-6 col-md-offset-3">

		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./index.php"><img src="./img/logo.png"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./php/logout.php">LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
			
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
			<td class="col-xs-12 col-md-8" >
				<h3>MyPage</h3>
			</td>
			<td class="col-xs-6 col-md-4">
				<a href="./MyPage.html.php" class="btn-primary btn-lg " >click</a>
    	   	</td>
		</tr>
		<tr class = "tr2 row" >
			<td class="col-xs-12 col-md-8" >
				<h3>탑승내역</h3>
			</td>
			<td class="col-xs-6 col-md-4">
    			<a href="./mypage-탑승내역.html.php" class="btn-primary btn-lg">click</a>
    		</td>
    	</tr>
		


	</table>
	<!-- 택시번호 요금계산기 마이페이지  -->
	<br>
	<table class="myposition" name="taxi">
		<tr class="row">
			<td class="col-xs-9 col-md-6"><img src="./img/taxi.png" class="image" >
			 	</br>Taxi number
			</td>
			
			<td class="col-xs-9 col-md-6" >
				<a href="./계산기.html.php" target="taxi">
				<img src="http://365psd.com/images/premium/thumbs/193/vector-calculator-icon-861700.jpg" class="image " >
				</br>요금계산기</a>
			</td>
			
		</tr>
	</table>
</div>

</body>
</html>
