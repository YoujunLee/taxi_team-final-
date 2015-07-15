<?php
session_start();
if(isset($_SESSION['user_id']) && isset($_SESSION['user_pw']))
echo "<script>location.replace('./조회창.html.php');</script>";
?>

<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   		 <title>i-Taxi</title>
   		<!-- // <meta name="viewport" content="width=device-width, initial-scale=1"> -->
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/로그인.css">
   		 <style>
		  .btn_taxi > .caret,
		  .dropup > .btn_taxi > .caret {
		    border-top-color: #000 !important;
		  }
	    .form-inline .input-group .input-group-btn_taxi,
   		 .btn_taxi {
			  display: inline-block;
			  padding: 6px 12px;
			  margin-bottom: 0;
			  font-size: 14px;
			  font-weight: normal;
			  line-height: 1.42857143;
			  text-align: center;
			  white-space: nowrap;
			  vertical-align: middle;
			  -ms-touch-action: manipulation;
			      touch-action: manipulation;
			  cursor: pointer;
			  -webkit-user-select: none;
			     -moz-user-select: none;
			      -ms-user-select: none;
			          user-select: none;
			  background-image: none;
			  border: 1px solid transparent;
			  border-radius: 4px;
			}
						
			.btn-taxi:focus,
			.btn-taxi:active:focus,
			.btn-taxi.active:focus,
			.btn-taxi.focus,
			.btn-taxi:active.focus,
			.btn-taxi.active.focus {
			  outline: thin dotted;
			  outline: 5px auto -webkit-focus-ring-color;
			  outline-offset: -2px;
			}
			.btn-taxi:hover,
			.btn-taxi:focus,
			.btn-taxi.focus {
			  color: #333;
			  text-decoration: none;
			}
			.btn-taxi:active,
			.btn-taxi.active {
			  background-image: none;
			  outline: 0;
			  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
			          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
			}
			.btn-taxi.disabled,
			.btn[disabled],
			fieldset[disabled] .btn-taxi {
			  pointer-events: none;
			  cursor: not-allowed;
			  filter: alpha(opacity=65);
			  -webkit-box-shadow: none;
			          box-shadow: none;
			  opacity: .65;
			}
			.btn-color{
			  color: #ffffff;
			  background-color: #34C6BE;
			  border-color: #ccc;
			}
			.btn-color:hover,
			.btn-color:focus,
			.btn-color.focus,
			.btn-color:active,
			.btn-color.active,
			.open > .dropdown-toggle.btn-color {
			  color: #ffffff;
			  background-color: #34C6BE;
			  border-color: #adadad;
			}
			.btn-color:active,
			.btn-color.active,
			.open > .dropdown-toggle.btn-color {
			  background-image: none;
			}
			.btn-color.disabled,
			.btn-color[disabled],
			fieldset[disabled] .btn-color,
			.btn-color.disabled:hover,
			.btn-color[disabled]:hover,
			fieldset[disabled] .btn-color:hover,
			.btn-color.disabled:focus,
			.btn-color[disabled]:focus,
			fieldset[disabled] .btn-color:focus,
			.btn-color.disabled.focus,
			.btn-color[disabled].focus,
			fieldset[disabled] .btn-color.focus,
			.btn-color.disabled:active,
			.btn-color[disabled]:active,
			fieldset[disabled] .btn-color:active,
			.btn-color.disabled.active,
			.btn-color[disabled].active,
			fieldset[disabled] .btn-color.active {
			  background-color: #fff;
			  border-color: #ccc;
			}
			.btn-color .badge {
			  color: #fff;
			  background-color: #34b6ce;
			}
			.btn-long,
			.btn-long{
			  padding: 10px 16px;
			  font-size: 18px;
			  line-height: 1.3333333;
			  border-radius: 6px;
			}
			
			.btn-group-long > .btn {
			  padding: 10px 16px;
			  font-size: 18px;
			  line-height: 1.3333333;
			  border-radius: 6px;
			}
			.btn-group > .btn-long + .dropdown-toggle {
			  padding-right: 12px;
			  padding-left: 12px;
			}
			.btn-long .caret {
			  border-width: 5px 5px 0;
			  border-bottom-width: 0;
			}
			.dropup .btn-long .caret {
			  border-width: 0 5px 5px;
			}
   		 </style>
	</head>
	<body>
		<div style="top: 120px" class= "col-xs-12  col-md-4 col-md-offset-4">
		
		<div align="center">
			<img src="./img/logo_big.png">
		</div>
		<br><br><br>
  			
  			<!-- Id 입력창 -->
	  		<form action='./php/login.php'  method='post'>
		  		<div class="input-group input-group-lg" class="div_login">
		  		
				  <span class="input-group-addon" id="sizing-addon1">
				  	<img src="../img/login.png">
				  </span>
				  <input type="text" class="form-control" placeholder="Student ID" name="logid" required>
			
				</div>
				<br>
				<!-- Pw 입력창 -->
				<div class="input-group input-group-lg" class="div_login">
					
					<span class="input-group-addon" id="sizing-addon1">
						<img id="profile-photo" src="../img/pwd.png">
					</span>
					<input type="password" class="form-control" placeholder="Password"  name="logpass" required>
				</div>
				<br><br><br>
	                <input class="btn btn-lg btn-block" type="submit" value="GO">
			</form>
			<br>			
		    <!-- 회원가입 버튼 -->
		    <form action='./SignUp.html.php'>
		     <input class="btn btn-lg btn-block" type="submit" value="회원가입">
	       </form>
		   </div>
	</body>
</html>