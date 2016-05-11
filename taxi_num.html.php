<!-- 택시번호 초회 창 -->

<?php
include "./php/session_out.php";
out();
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   	 <title>i-Taxi</title>
   	 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   	 <link rel="stylesheet" type="text/css" href="../css/taxi_num.css">
   	 <link rel="stylesheet" type="text/css" href="./css/111.css">
   	  <!-- <link rel="stylesheet" type="text/css" href="../css/practice.css"> -->
   	 
   	 <!-- 전화걸기 스크립트 -->
<script type="text/javascript"> 
function callNumber(num){
   location.href="tel:"+num;
}
</script> 


</head>
<body class="center " >
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
		
	<ul class="col-xs-12  col-md-4 col-md-offset-4 padding">
		<!-- 핸드폰에서 누를 시에 바로 전화연결 -->
  <li><a onclick="location.href='tel:054-252-1111'" class="eat"><span>
        <h1>포스콜</h1>
        <p>054-252-1111</p></span></a></li>
  <li><a onclick="location.href='tel:054-283-8282'" class="drink"><span>
        <h1>해맞이콜</h1>
        <p>054-283-8282</p></span></a></li>
  <li><a onclick="location.href='tel:054-282-6161'" class="play"><span>
        <h1>육일콜</h1>
        <p>054-282-6161</p></span></a></li>
  <li><a onclick="location.href='tel:054-231-2330'" class="relax"><span>
        <h1>영광콜</h1>
        <p>054-231-2330</p></span></a></li>
</ul>	

</body>
</html>