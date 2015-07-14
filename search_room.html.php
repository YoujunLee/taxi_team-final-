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
					<label>
					<td class="col-md-3">날짜</td>
					<td class="col-md-9"><input type="date" id="search_date1" name="search_date" class="form-control" required></td>
				    </label>
				</tr>
			
				<tr>
					<label>
					<td class="col-md-3">출발 시간</td>
					<td><input type="time" id="start_time1" name="start_time" class="form-control" value="09:00"></td>
				    </label>
				</tr>

				<tr>
					<label>
					<td class="col-md-3">도착 시간</td>
					<td><input type="time" id="end_time1" name="end_time" class="form-control" value="20:00"></td>
				    </label>
				</tr>
			
			</tbody>
		</table>
	</div>
	<p class="text-center">
	
	<input type="submit" value="방 조회" class="btn btn-info">
	</p>
	
	</form>
	<!-- </div> -->

	<!-- <div class="col-md-4">
	</div> -->
    </section>
</body>
</html>
