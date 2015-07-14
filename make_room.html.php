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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="./css/make_room.css"> 
	
	<title>i-Taxi</title>
</head>

<body class = "col-xs-12  col-md-6 col-md-offset-3">
	
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">i-taxi</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./index.php">Home <span class="sr-only">(current)</span></a></li>
        
       </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./php/logout.php">LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>

	<!-- <section class="container"> -->
		<!-- <div class="col-md-4">
		</div> -->
		
		<!-- <div class="col-md-4"> -->
		<div class="form-group">
		<table class="table">
			<tbody>
				<tr >
				<form action="./php/post.php"  method="post">
					<label for="start">
					<td class="col-md-3">출발지</td>
					<td class="col-md-9">
						<select id="start" size="1" name="room_start" class="form-control">
						<option value="한동대학교 택시 승강장" selected>한동대 택시승강장</option>
						<option value="양덕 하나로마트">양덕 하나로마트</option>
						<option value="E1">E1</option>
						<option value="고속버스터미널">고속터미널</option>
						<option value="시외버스터미널">시외버스터미널</option>
						<option value="육거리">욱거리</option>
						<option value="포항역(KTX)">포항역</option>
						</select>
					</td>
					</label>
			
				<tr>
					<label for="arrive">
					<td class="col-md-3">도착지</td>
					<td class="col-md-9">
						<select id="arrive" size="1" name="room_arrive" class="form-control">
						<option value="한동대학교 택시 승강장">한동대 택시승강장</option>
						<option value="양덕 하나로마트">양덕 하나로마트</option>
						<option value="E1">E1</option>
						<option value="고속버스터미널">고속터미널</option>
						<option value="시외버스터미널">시외버스터미널</option>
						<option value="육거리">욱거리</option>
						<option value="포항역(KTX)" selected>포항역</option>
						</select>
					</td>
					</label>
				</tr>		
				
				<tr>
					<label for="make_date">
					<td class="col-md-3">날짜</td>
					<td class="col-md-9"><input type="date" id="make_date" name="room_date" class="form-control" required></td>
				    </label>
				</tr>
			
				<tr>
					<label for="make_time">
					<td class="col-md-3">시간</td>
					<td class="col-md-9"><input type="time" id="make_time" name="room_time" class="form-control" value="09:00"></td>
				    </label>
				</tr>

				<tr>
					<label for="make_population">
					<td class="col-md-5">최대탑승인원</td>
					<td class="col-md-7"><input type="number" id="make_populaion" name="room_population" class="form-control" min="1" max="4" value="1" ><div class="input-group-addon">최대 탑승 인원 4명</div></td>
					</label>
				</tr>

				<tr>
					<label for="make_memo">
					<td class="col-md-3">Memo</td>
					<td class="col-md-9"> <textarea id="make_memo" name="room_memo" class="form-control" placeholder="특이사항" cols="5"> </textarea></td>
					</label>
				</tr>
			
			</tbody>
		</table>
	</div>
	
	<p class="text-center">
		
	<input type="submit" value="방만들기" class=" margin_right btn-info">
	<input type="button" value="취소" class="btn btn-danger">
	</p>
	<!-- </div> -->
	</form>
	<!-- <div class="col-md-4">
	</div> -->

    <!-- </section> -->
</body>
</html>
