<?php
include "./php/session_out.php";
out();
?>
<!DOCTYPE html>
<html>
<head>
	<title>i-Taxi</title>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="./css/search.css">
	
</head>
<body class="center">
	

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


			
	<!-- 방만들기, 방조회  -->

	<table class = "col-xs-12  col-md-4 col-md-offset-4">
		<tr class="tr1 row">
			<td >
			<form action='./make_room.html.php'>
		     <input class="btn2" type="submit" value="방만들기">
	       </form>
			
			</td>
			</tr>
		<tr class = "tr2 row" >
			<td  >
				<form action='./search_room.html.php'>
		     <input class="btn2" type="submit" value="방조회">
	       </form>
			</td>
			</tr>
		<tr class = "tr1 row" >
			<td  >
				<form action='./mypage-탑승내역.html.php'>
		     <input class="btn2" type="submit" value="탑승내역">
	       </form>
			</td>
		<tr class="tr2 row">
			<td  >
				<form action='./MyPage.html.php'>
		     <input class="btn2" type="submit" value="MyPage">
	       </form>
			</td>
		</tr>	
	</table>
	
	<!-- 택시번호 요금계산기 마이페이지  -->
	
<table class=" col-xs-12  col-md-4 col-md-offset-4" >	
		
		<tr class="row">
			<td >
			<form class="div_yg" action='./taxi_num.html.php'>
			  <input class = "image-size1" type="image" src="./img/taxi.png"><br>
			  <input class="btn3" type="submit" value="Taxi number">
	       </form>
			
			</td>
			
			<td  >
			<form class="div_yg" action='./계산기.html.php'>
			  <input class = "image-size2" type="image" src="http://365psd.com/images/premium/thumbs/193/vector-calculator-icon-861700.jpg"><br>
			  <input class="btn3" type="submit" value="요금계산기">
	       </form>
			
			</td>
			
		</tr>
		
	</table>
	

</body>
</html>
