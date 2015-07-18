<!-- car full 방 만드는 Page
.....이유준-->
<?php

include "./php/config.php";
include "./php/session_out.php";
out();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="./css/make_room.css"> 
	<title>i-Taxi</title>
</head>

<body class = "center">
	<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
		<tr class="row">
  			<td class = "logo" >
       		<a  href="./조회창.html.php"><img src="./img/logo.png"></a>
  		    </td >
      
      		<td class = "logout">
      			<form action='./php/logout.php'>
		     		<input class="btn1" type="submit" value="LogOut">
	       		</form>
        	</td>
  		</tr>
	</table>
		
	<div class="form-group col-xs-12  col-md-4 col-md-offset-4">
	<table class="table">
		<tbody>
			<tr>
			<form action="./php/post_car.php"  method="post">
				<label for="start">
				<td class="col-md-3">
					출발지
				</td>
				<td class="col-md-9">
					<input type="text" id="start" name="car_start" class="form-control" required>
				</td>
				</label>
			
			<tr>
				<label for="arrive">
				<td class="col-md-3">도착지</td>
				<td class="col-md-9">
					<input type="text" id="arrive" name="car_arrive" class="form-control" required>
				</td>
				</label>
			</tr>		
				
			<tr>
				<label for="make_date">
				<td class="col-md-3">
					날짜
				</td>
				<td class="col-md-9">
					<input type="date" id="make_date" name="car_date" class="form-control" placeholder="YYYYMMDD" required>
				</td>
				</label>
			</tr>
			
			<tr>
				<label for="make_time">
				<td class="col-md-3">
					시간
				</td>
				<td class="col-md-9">
					<input type="time" id="make_time" name="car_time" class="form-control" value="09:00">
				</td>
				</label>
			</tr>

			<tr>
				<label for="car">
				<td class="col-md-3">차종</td>
				<td class="col-md-9">
					<input type="text" id="car" name="car_num" class="form-control" required>
				</td>
				</label>
			</tr>
			
			<tr>
				<label for="arrive">
				<td class="col-md-3">가격</td>
				<td class="col-md-9">
					<input type="tel" id="arrive" name="car_arrive" class="form-control" required>
				</td>
				</label>
			</tr>
			
			<tr>
				<label for="make_population">
				<td class="col-md-5">최대탑승인원</td>
					<td class="col-md-7">
						<input type="tel" id="make_populaion" name="room_population" class="form-control" min="2" max="4" maxlength="1" value="4" >
					</td>
					</label>
			</tr>
			</tbody>
		</table>
	<div class = "div_yg">
	<input type="submit" value="방만들기" class=" margin_right btn-info" style="background-color:#34c6be; color: #ffffff;">
	<a href="./조회창.html.php"><input type="button" value="취소" class="btn btn-danger"></a>
	</div>
	</div>
</form>
</body>
</html>