<!-- 방 만드는 Page
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
	<script src="./js/checkbox.js"></script>
	<script src="./js/jquery.min.js"></script>
	<title>i-Taxi</title>
</head>

<body class = "center">
	<!-- 네비게이션 바 -->
	<table class="navi col-xs-12  col-md-4 col-md-offset-4" >	
		<tr class="row">
		   <td class = "logo" >
      			<a onclick="location.href='./main.html.php'">
      				<img src="./img/logo.png">
      			</a>
  		   </td>
  		  <td class = "logout1">
      	   		<a onclick="history.back(-1)">
		     		<img src="./img/back.png" width="25px" height="25px">
	       		</a>
           </td>
  		   <td class = "logout">
      	   		<a  onclick="location.href='./php/logout.php'">
      	   			<img src="./img/power.png" width="30px" height="30px">
	       		</a>
           </td>
  		</tr>
	</table>
	<!-- 출발지, 도착지, 날짜, 시간, 최대탑승인원 -->	
	<div class="form-group col-xs-12  col-md-4 col-md-offset-4">
	
	<table class="table">
		<tbody>
			<tr>
				　&nbsp;
			</tr>
			
				<!-- 출발지 -->
			<tr>
			<form action="./php/post.php"  method="post">
				<label for="start">
				<td class="col-md-3">
					<b>출발지</b>&nbsp;&nbsp;&nbsp;
					<sub><input type="checkbox" onclick="movepage('http://itaxi.handong.edu/make_room2.html.php');">직접입력</sub><!-- 누를 경우 페이지가 바뀌어서 출발지 목적지를 선택하는 게 아니라 직접입력 -->
				</td>
				<td class="col-md-9">
					<select id="starter" size="1" name="room_start" class="form-control">
					<option value="한동대학교 택시 승강장" selected>한동대 택시승강장</option>
					<option value="양덕 하나로마트">양덕 하나로마트</option>
					<option value="E1">E1 주유소</option>
					<option value="장흥초">장흥초</option>
					<option value="북부해수욕장">북부해수욕장</option>
					<option value="고속버스터미널">고속터미널</option>
					<option value="시외버스터미널">시외버스터미널</option>
					<option value="육거리">육거리</option>
					<option value="포항역(KTX)">포항역(EDIYA 앞)</option>

					</select>
				</td>
				</label>
			</tr>
			<!-- 도착지 -->
			<tr>
				<label for="arrive">
				<td class="col-md-3">
					<b>도착지</b>&nbsp;&nbsp;&nbsp;
					<sub><input type="checkbox" onclick="movepage('http://itaxi.handong.edu/make_room2.html.php');">직접입력</sub>
				</td>
				<td class="col-md-9">
					<select id="arrive" size="1" name="room_arrive" class="form-control">
					<option value="한동대학교 택시 승강장">한동대 택시승강장</option>
					<option value="양덕 하나로마트">양덕 하나로마트</option>
					<option value="E1">E1 주유소</option>
					<option value="장흥초">장흥초</option>
					<option value="북부해수욕장">북부해수욕장</option>
					<option value="고속버스터미널">고속터미널</option>
					<option value="시외버스터미널">시외버스터미널</option>
					<option value="육거리">육거리</option>
					<option value="포항역(KTX)" selected>포항역</option>
					</select>
				</td>
				</label>
			</tr>		
			<!-- 날짜	 -->
			<tr>
				<label for="make_date">
				<td class="col-md-3">
					<b>날짜</b>
				</td>
				<td class="col-md-9"><input type="date" id="make_date" name="room_date" class="form-control" placeholder="YYYYMMDD"></td>
				</label>
			</tr>
			<!-- 시간	 -->
			<tr>
				<label for="make_time">
				<td class="col-md-3">
					<b>시간</b>
				</td>
				<td class="col-md-9">
					<input type="time" id="make_time" name="room_time" class="form-control" value="09:00">
				</td>
				</label>
			</tr>
		<!-- 최대탑승인원 -->
			<tr>
				<label for="make_population">
				<td class="col-md-5"><b>최대탑승인원</b></td>
					<td class="col-md-7">
						<input type="tel" id="make_populaion" name="room_population" class="form-control" maxlength="1" value="4" >
						<div style="color:#34C6BE">※ 최소탑승인원: 2명<br> &nbsp;&nbsp;&nbsp;&nbsp;최대탑승인원: 4명</div>
					</td>
					</label>
				</tr>
			</tbody>
		</table>
		<!-- 방만들기 버튼, 취소 버튼 -->
	<div class = "div_yg">
	<input type="submit" value="방만들기" class=" margin_right btn-info" style="background-color:#34c6be; color: #ffffff;">
	<a onclick="location.href='./main.html.php'"><input type="button" value="취소" class="btn btn-danger"></a>
	</div>
	<div class="div2">
	<br>
			    <p>Tip: 방 내부에서 세부일정에 대해 이야기 나눌 수 있습니다.<br>오전 12:00 = 24:00 / 오후 12:00 = 12:00</p>
	</div>
	</div>
</form>
</body>
</html>
