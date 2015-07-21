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
		     		<img src="./img/power.png" width="30px" height="30px">
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
					<input type="text" id="start" name="car_start" placeholder="ex) 한동대" class="form-control" autofocus required>
				</td>
				</label>
			
			<tr>
				<label for="arrive">
				<td class="col-md-3">도착지</td>
				<td class="col-md-9">
					<input type="text" id="arrive" name="car_arrive" placeholder="ex) 서울" class="form-control" required>
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
					<input type="text" id="car" name="car_num" placeholder="ex) 페라리" class="form-control" required>
				</td>
				</label>
			</tr>
			
			<tr>
				<label for="price">
				<td class="col-md-3">가격</td>
				<td class="col-md-9">
					<input type="tel" id="price" name="car_price" onkeyup="getNumber(this)" onchange="getNumber(this)" placeholder="ex) 10,000" class="form-control" required >
				<script type="text/javascript">
				var rgx1 = /\D/g;  
				var rgx2 = /(\d+)(\d{3})/; 
				function getNumber(obj){
	
			     var num01;
     		     var num02;
     			 num01 = obj.value;
     			 num02 = num01.replace(rgx1,"");
  			     num01 = setComma(num02);
     			 obj.value =  num01;
				 }

				 function setComma(inNum){
     
    			 var outNum;
  			     outNum = inNum; 
    			 while (rgx2.test(outNum)) {
    		     outNum = outNum.replace(rgx2, '$1' + ',' + '$2');
      			 }
    			 return outNum;
				}
				</script>
				</td>
				</label>
			</tr>
			
			<tr>
				<label for="make_population">
				<td class="col-md-5">최대탑승인원</td>
					<td class="col-md-7">
						<input type="tel" id="make_populaion" name="car_population" class="form-control" min="2" max="4" maxlength="1" placeholder="ex) 4" >
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