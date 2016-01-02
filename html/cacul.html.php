<?php
include "./php/session_out.php";
out();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		 <title>요금계산기</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">  
		<link rel="stylesheet" type="text/css" href="../css/search.css">  
		<script LANGUAGE=JAVAscRIPT>
			function hab(num1,num2)
			{
			 sum = num1 / num2;
			 return sum ;
			}
			function run2()
			{
			 var n1, n2;
			 n1=eval(document.frm1.input1.value);
			 n2=2;
			 result = hab( n1 , n2 );
			 document.frm1.input3.value=Math.round(result);
			}
			function run3()
			{
			 var n1, n2;
			 n1=eval(document.frm1.input1.value);
			 n2=3;
			 result = hab( n1 , n2 );
			 document.frm1.input3.value=Math.round(result);
			}
			function run4()
			{
			 var n1, n2;
			 n1=eval(document.frm1.input1.value);
			 n2=4;
			 result = hab( n1 , n2 );
			 document.frm1.input3.value=Math.round(result);
			}
			
		</script>
	</head>
	<body class = "center">
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
		

		<div class = "col-xs-12  col-md-4 col-md-offset-4">
			<form name="frm1">
			<table class = "table" rules: "none" >
				<tr>
					<td>
						<h2><input type="tel" size=10 placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;총 금액" name="input1" autofocus=""> 원</h2>
					</td>
				</tr>
				<tr>
					<td><h1>÷</h1></td>
				</tr>
				<tr>
					<td>
					<table style="margin: auto" rules: "none">
						<tr><h1><td class="col-xs-4 col-md-4">
						<img class="outline" src="./img/person2.png"  onclick="run2(); return false;"></td>
						<td class="col-xs-4 col-md-4"><img src="./img/person3.png" class="outline" onclick="run3(); return false;"></td>
						<td class="col-xs-4 col-md-4"><img src="./img/person4.png"  class="outline" onclick="run4(); return false;"></td>
						</h1></td></tr>
						<tr><h3>
							<td class="col-xs-4 col-md-4">2명</td>
							<td class="col-xs-4 col-md-4">3명</td>
							<td class="col-xs-4 col-md-4">4명</td>
						</h3></tr>
					</table>
					</h1></td>
				</tr>
				<tr>
					<td><h2>

							<input type="text" size=10 placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;결과값" name="input3"> 원
						</h2>
					</td>
				</tr>
		</table>
	    </form>
	</div>
	</body>
</html>