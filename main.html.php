<?php
include "./php/session_out.php";
out();
?>
<?php
// Extend cookie life time by an amount of your liking
$cookieLifetime = 365 * 24 * 60 * 60; // A year in seconds
setcookie(session_name(),session_id(),time()+$cookieLifetime);
?>
<!DOCTYPE html>
<html>
<head>
	<title>i-Taxi</title>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script> <!-- 카카오톡으로 연결하는 자바스크립트 라이브러리 -->
</head>

<body class="center">
	
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
			
	<!-- 방만들기, 방조회  -->
	<table class="col-xs-12  col-md-4 col-md-offset-4 ">
		<tbody >
		<tr class="tr1" onclick="location.href='./make_room.html.php'">
			<td>
			<form class="div_yg" action='./make_room.html.php'>
				<a onclick="location.href='./make_room.html.php'" class="noul">
					<img src="./img/taxi.png" class="img">
					&nbsp;&nbsp;&nbsp;
				</a>
		    	<input class="btn2" type="submit" value="택시모집">
	    	</form>
			</td>
		</tr>
		
		<tr class = "tr2" onclick="location.href='./search_result_all.html.php'">
			<td>
			<form class="div_yg" action='./search_result_all.html.php'>
				<a onclick="location.href='./search_result_all.html.php'" class="noul">
					<img src="./img/car_s.png" class="img">
					&nbsp;&nbsp;&nbsp;
				</a>
		     	<input class="btn2" type="submit" value="택시조회">
	       </form>
			</td>
		</tr>
		
			
		<tr class="tr1" onclick="location.href='./make_car.html.php'">
			<td>
			<form class="div_yg" action='./make_car.html.php'>
		     	<a onclick="location.href='./make_car.html.php'" class="noul">
					<img src="./img/car.png" class="img">
					&nbsp;&nbsp;&nbsp;
				</a>
		    	<input class="btn2" type="submit" value="카풀모집">
	       </form>
		   </td>
		</tr>
		
		<tr class="tr2" onclick="location.href='./search_car.html.php'">
			<td>
			<form class="div_yg" action='./search_car.html.php'>
		     	<a onclick="location.href='./search_car.html.php'" class="noul">
					<img src="./img/car_s.png" class="img">
					&nbsp;&nbsp;&nbsp;
				</a>
		    	<input class="btn2" type="submit" value="카풀조회">
	       </form>
		   </td>
		</tr>		
		
		<tr class = "tr1" onclick="location.href='./history.html.php'">
			<td>
			<form class="div_yg" action='./history.html.php'>
				<a onclick="location.href='./history.html.php'" class="noul">
					<img src="./img/list.png" class="img2">
					&nbsp;&nbsp;&nbsp;
				</a>
		     	<input class="btn2" type="submit" value="탑승내역">
	       </form>
		   </td>
		</tr>
		</tbody>
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
			  <a onclick="location.href='./taxi_num.html.php'" class="noul">
			  <img src="./img/calltaxi.png" class="img"><br>
			  <input class="btn3" type="submit" value="콜택시">
	    	</form>
			</td>
			
			<td>
			<form class="div_yg" action='./cacul.html.php'>
			  <a onclick="location.href='./cacul.html.php'" class="noul">
			  <img src="./img/cacul.png" class="img"><br>
			  <input class="btn3" type="submit" value="계산기">
			  </a>
	        </form>
			</td>
			
			<td>
				<!-- 모바일에서 누를 경우 카톡으로 바로 아이택시 url 보낼 수 있게 함 자바스크립트 라이브러리는 인터넷에서 다운 받았다. -->
			<form class="div_yg" action='javascript:;'>
			  <a id="kakao-link-btn" href="javascript:;" >
			  <img src="./img/kakao.png" class="img"><br>
			  </a>
			  <input id="kakao-link-btn" class="btn3" type="submit" value="친구초대">
			  </form>
	      
	        
	        <script>
			    Kakao.init('99930094479238c325ba429e2ace07a2');
				//label과 아이택시 로고이미지와 아이택시 url을 카톡으로 보냄
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
       							url: 'http://itaxi.handong.edu' 
      				}		
   			   });
	        </script>
			</td>
			
			<td>
			<form class="div_yg" action='./MyPage.html.php'>
			  <a onclick="location.href='./MyPage.html.php'" class="noul">
			  <img src="./img/mypage.png" class="img"><br>
			  <input class="btn3" type="submit" value="My Page">
			  </a>
	        </form>
			</td>
		</tr>
		<!-- 가입자수 출력(초기에는 가입자 수 출력했지만 이제는 사용자수가 많아서 출력안함)-->
		<tr class="row">
		<?php
			require_once './php/config.php';
		
			$db = new DBC; //db object생성
			$db->DBI();//db 들어가기
			$db->query = "SELECT studentid FROM student_info";
			$db->DBQ();
			$num = $db->result->num_rows;
		?>

		</tr>
	</table>
	<?php $db->DBO(); ?>
</body>
</html>
