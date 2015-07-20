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
			 document.frm1.input3.value=result;
			}
			function run3()
			{
			 var n1, n2;
			 n1=eval(document.frm1.input1.value);
			 n2=3;
			 result = hab( n1 , n2 );
			 document.frm1.input3.value=result;
			}
			function run4()
			{
			 var n1, n2;
			 n1=eval(document.frm1.input1.value);
			 n2=4;
			 result = hab( n1 , n2 );
			 document.frm1.input3.value=result;
			}
			
		</script>
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
      		    </td >
      		</tr>
		</table>
		

		<div class = "col-xs-12  col-md-4 col-md-offset-4">
			<form name="frm1">
			<table class = "table">
				<tr>
					<td>
						<h1><input type="tel" size=10 placeholder="     총 금액" name="input1" autofocus=""> 원</h1>
					</td>
				</tr>
				<tr>
					<td><h1>÷</h1></td>
				</tr>
				<tr>
					<td>
					<table style="margin: auto" >
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
					<td><h1>

							<input type="text" size=10 placeholder="     결과 값" name="input3"> 원
						</h1>
					</td>
				</tr>
		</table>
	    </form>
	</div>
	</body>
</html>