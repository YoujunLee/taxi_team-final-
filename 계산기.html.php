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
			function run()
			{
			 var n1, n2;
			 n1=eval(document.frm1.input1.value);
			 n2=eval(document.frm1.input2.value);
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
		
		<br><br><br><br><br><br>
		<div class = "col-xs-12  col-md-4 col-md-offset-4">
			<form name="frm1">
			<table class = "table">
				<tr>
					<td>
						<h1><input type="tel" size=10 name="input1"> 원</h1>
					</td>
				</tr>
				<tr>
					<td><h1>÷</h1></td>
				</tr>
				<tr>
					<td><h1>
					<div class="col-lg-4">
					     <select class="form-control" id="select" name="input2" >
					          <option>2</option>
					          <option>3</option>
					          <option>4</option>
					        </select>
					        </div>
					        	명
					</h1></td>
				</tr>
				<tr>
					<td>
						<h1><input type="button" name="btn1" value="=" onclick=run()>
							<input type="text" size=10 name="input3"> 원
						</h1>
					</td>
				</tr>
		</table>
	    </form>
	</div>
	</body>
</html>