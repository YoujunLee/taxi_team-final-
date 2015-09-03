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
   		 <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="./css/mypage.css">
   	     <script type="text/javascript">
	   		function popupOpen(){
				var popUrl = "test.html";	//팝업창에 출력될 페이지 URL
				var popOption = "width=370, height=360, resizable=no, scrollbars=no, status=no;";    //팝업창 옵션(optoin)
					window.open(popUrl,"",popOption);
			}
		</script>
	</head>
	
	<body>
		
		<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
			<tr class="row">
  			   <td class = "logo" >
      				<a  href="./main.html.php"><img src="./img/logo.png"></a>
  			   </td >
				<td class = "logout">
      	   		<a href='./php/logout.php'>
      	   			<img src="./img/power.png" width="30px" height="30px">
	       		</a>
           </td>
      	   <td class = "logout1">
      	   		<a href='./조회창.html.php'>
		     		<img src="./img/home.png" width="25px" height="25px">
	       		</a>
           </td>
      		</tr>
		</table>
		
		<br><br><br><br><br><br>
		<div top-padding:"20%" class="col-xs-12  col-md-4 col-md-offset-4">
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<?php
		       
			   $name =  $_SESSION['name'] ;
			   echo "이름 : "."$name"."<br>";
			   $stu_id= $_SESSION['user_id'];
			 	echo "학번 : "."$stu_id"."<br>";
				$cellphone	= $_SESSION['cellphone'];
				echo "전화번호 : "."$cellphone"
		      ?>
			
			   <div class="modify">
			   <a href="./update_mypage.html.php" class="btn btn-link">개인정보 수정</a>
			   </div>
			  </div>
			</div>
			<br>
			<div class="panel panel-default">
			<!-- Table -->
			  <table class="table table-hover tableheight" style="text-align: center">
			  <div>
  			   	<tr onclick="location.href='./공지사항.html.php'"><td>공지사항</td></tr>
			   	<tr onclick="location.href='./QnA.html.php'"><td>1:1 문의</td></tr>
			   	<tr onclick="location.href='./withdrawal.html.php'"><td>회원탈퇴</td></tr>
			  </div>
			  </table>
			 </div>
		
		<br /><br /><br />
			<div><hr/>
			  	   <div>Please contact us (<a>hguitaxi@gmail.com</a>)<br>@Launched by YouJun Lee, PyungKang Kim, Maria Jeong, MinGyu Yang 
			  </div>
			</div>
		</div>
	</body>
</html>