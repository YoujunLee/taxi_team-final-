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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="./css/search.css">
	<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
</head>

<body class="center">
	
	<table class="navi col-xs-12  col-md-4 col-md-offset-4" >	
		<tr class="row">
		   <td class = "logo" >
      			<a  href="./조회창.html.php">
      				<img src="./img/logo.png">
      			</a>
  		   </td>
      	   <td class = "logout">
      	   		<form action='./php/logout.php'>
		     		<input class="btn1" type="submit" value="LogOut">
	       		</form>
           </td>
  		</tr>
	</table>
			
	<!-- 방만들기, 방조회  -->
	<table class="col-xs-12  col-md-4 col-md-offset-4 backg">
		<tr class="tr1" onclick="location.href='./make_room.html.php'">
			<td>
			<form action='./make_room.html.php'>
				<a href="./make_room.html.php" class="noul">
					<img src=./img/make_room.png class="img">
					&nbsp;&nbsp;&nbsp;
				</a>
		    	<input class="btn2" type="submit" value="택시모집">
	    	</form>
			</td>
		</tr>
		
		<tr class = "tr2" onclick="location.href='./search_room.html.php'">
			<td>
			<form action='./search_room.html.php'>
				<a href="./search_room.html.php" class="noul">
					<img src=./img/search.png class="img">
					&nbsp;&nbsp;&nbsp;
				</a>
		     	<input class="btn2" type="submit" value="택시조회">
	       </form>
			</td>
		</tr>
		
			
		<tr class="tr1" onclick="location.href='./make_car.html.php'">
			<td>
			<form action='./make_car.html.php'>
		     	<a href="./make_car.html.php" class="noul">
					<img src=./img/car.png class="img">
					&nbsp;&nbsp;&nbsp;
				</a>
		    	<input class="btn2" type="submit" value="카풀모집">
	       </form>
		   </td>
		</tr>
		
		<tr class="tr2" onclick="location.href='./search_car.html.php'">
			<td>
			<form action='./search_car.html.php'>
		     	<a href="./search_car.html.php" class="noul">
					<img src=./img/car_s.png class="img">
					&nbsp;&nbsp;&nbsp;
				</a>
		    	<input class="btn2" type="submit" value="카풀조회">
	       </form>
		   </td>
		</tr>		
		
		<tr class = "tr1" onclick="location.href='./mypage-탑승내역.html.php'">
			<td>
			<form action='./mypage-탑승내역.html.php'>
				<a href="./mypage-탑승내역.html.php" class="noul">
					<img src=./img/list.png class="img2">
					&nbsp;&nbsp;&nbsp;
				</a>
		     	<input class="btn2" type="submit" value="탑승내역">
	       </form>
		   </td>
		</tr>
	</table>
	
	<!-- blank -->
	
	<table class = "col-xs-12  col-md-4 col-md-offset-4 ">
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
	</table>

	<!-- 택시번호 요금계산기 마이페이지  -->
	
	<table class=" col-xs-12  col-md-4 col-md-offset-4" >	
		<tr class="row">
			<td>
			<form class="div_yg" action='./taxi_num.html.php'>
			  <a href="./taxi_num.html.php" class="noul">
			  <img src="./img/calltaxi.png" class="img"><br>
			  <input class="btn3" type="submit" value="콜택시">
	    	</form>
			</td>
			
			<td>
			<form class="div_yg" action='./계산기.html.php'>
			  <a href="./계산기.html.php" class="noul">
			  <img src="./img/cacul.png" class="img"><br>
			  <input class="btn3" type="submit" value="계산기">
			  </a>
	        </form>
			</td>
			
			<td>
			<form class="div_yg" action='javascript:;'>
			  <a id="kakao-link-btn" href="javascript:;" >
			  <img src="./img/kakao.png" class="img"><br>
			  </a>
			  <input id="kakao-link-btn" class="btn3" type="submit" value="친구초대">
			  </form>
	      
	        
	        <script>
			    Kakao.init('99930094479238c325ba429e2ace07a2');

   				Kakao.Link.createTalkLinkButton({
      				container: '#kakao-link-btn',
      				label: 'itaxi HGU 택시 카풀 서비스에 오신걸 환영합니다.',
      				image: {
       						 src: 'http://itaxi.handong.edu/img/logo_big.png',
        					width: '200',
      						height: '100'	
      				},
     				 webButton: {
        						text: 'itaxi',
       							url: 'https://itaxi.handong.edu' 
      				}		
   			   });
	        </script>
			</td>
			
			<td>
			<form class="div_yg" action='./MyPage.html.php'>
			  <a href="./MyPage.html.php" class="noul">
			  <img src="./img/mypage.png" class="img"><br>
			  <input class="btn3" type="submit" value="My Page">
			  </a>
	        </form>
			</td>
		</tr>
	</table>
</body>
</html>
