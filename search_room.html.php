<?php
include "./php/session_out.php";
out();
?>
<!-- 방 조회 Page
.....이유준-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="./css/make_room.css"> 
	<meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=1">
	<title>i-Taxi</title>
</head>

<body class = "center">


	<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
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
	
		<div class="form-group col-xs-12  col-md-4 col-md-offset-4">
		<table class="table">
			<tbody>
				<tr>
				<form action="./php/search.php" method="post">
					<label for="search_start1">
					<td class="col-md-3">출발지</td>
					<td class="col-md-9">
						<select id="search_start1" size="1" name="search_start" class="form-control">
						<option value="전체보기" selected>전체보기</option>
						<option value="한동대학교 택시 승강장" selected>한동대 택시승강장</option>
						<option value="양덕 하나로마트">양덕 하나로마트</option>
						<option value="E1">E1</option>
						<option value="고속버스터미널">고속터미널</option>
						<option value="시외버스터미널">시외버스터미널</option>
						<option value="육거리">육거리</option>
						<option value="포항역(KTX)">포항역</option>
						</select>
					</td>
					</label>
			
				<tr>
					<label for="search_arrive1">
					<td class="col-md-3">도착지</td>
					<td class="col-md-9">
						<select id="search_arrive1" size="1" name="search_arrive" class="form-control">
						<option value="전체보기" selected>전체보기</option>
						<option value="한동대학교 택시 승강장">한동대 택시승강장</option>
						<option value="양덕 하나로마트">양덕 하나로마트</option>
						<option value="E1">E1</option>
						<option value="고속버스터미널">고속터미널</option>
						<option value="시외버스터미널">시외버스터미널</option>
						<option value="육거리">육거리</option>
						<option value="포항역(KTX)" selected>포항역</option>
						</select>
					</td>
					</label>
				</tr>		
				
				<tr>
					<label for="search_date1">
					<td class="col-md-3">날짜</td>
					<td class="col-md-9"><input type="date" id="search_date1" name="search_date" placeholder="YYYYMMDD" class="form-control" required></td>
				    </label>
				</tr>
			
				<tr>
					<label for="start_time1">
					<td class="col-md-3">출발 시간</td>
					<td><input type="time" id="start_time1" name="start_time" class="form-control" value="09:00"></td>
				    </label>
				</tr>

				<tr>
					<label for="end_time1">
					<td class="col-md-3">도착 시간</td>
					<td><input type="time" id="end_time1" name="end_time" class="form-control" value="20:00"></td>
				    </label>
				</tr>
			
			</tbody>
		</table>
		
		<div class = "div_yg" >
			<input type="submit" value="방 조회" class="btn btn-info" style="background-color:#34c6be; color: #ffffff;">
		</div>
		</div>
	</form>
</body>
</html>
