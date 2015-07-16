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
		<div class = "col-xs-12  col-md-6 col-md-offset-3">
			<nav class="navbar navbar-inverse">
				<a class="navbar-brand" href="./index.php"><img class="imgpa" src="./img/logo.png"></a>
				<ul class="nav navbar-nav navbar-right right" style=" margin-right: 0px;">
	       			 <li><a href="./php/logout.php">LogOut</a></li>
	   		   </ul>
      		</nav>
			<br>
			<div align="center">
				<h2>요금계산기</h2>
			</div>
			<br><br>
			<form name="frm1">
			<table class = "center1">
				<tr>
				<td>
					<input type="text" size=10 name="input1"> 원
				</td>
				<td>
					<h3>&nbsp; ÷ </h3>
				</td>
				<td>
				<div class="col-lg-10">
				     <select class="form-control" id="select" name="input2" >
				          <option>2</option>
				          <option>3</option>
				          <option>4</option>
				        </select>
				        </div>
				</td>
				<td>
					 명
				</td>
				</tr>
				<tr>
					<input type="button" name="btn1" value="=" onclick=run()>
				</tr>
				<tr>
					 &nbsp;&nbsp;1명당 내야할 돈은 <input type="text" size=10 name="input3">원 입니다.
				</tr>
				
		</table>
	    </form>
	</div>
	</body>
</html>