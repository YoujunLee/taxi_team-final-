<?xml version = "1.0"?>

<html>
	<head>
		<title> Leopard :: Crowd Funding  </title>
		<link rel = "stylesheet" type = "text/css"
			href = "bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css"
			href = "bootstrap.min.css"/>
			<meta charset="UTF-8">

			<script type="text/javascript"> function popup() { alert("Thank you for funding!\nIf the projects will be archieved the goal, automatically our system will pay from your credit.");  } </script>

	</head>

	<body>

	  <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://localhost/soft/index.php">Leopard Funding</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                        <!-- 프로젝트 찾기 버튼 -->
                <li><a href="#">Find Project <span class="sr-only">(current)</span></a></li>
                        <!-- 프로젝트 생성 버튼 -->
                
                        <!-- 마이페이지 버튼 -->
<?php

session_start();


if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw'])) {
 
}
else{
     echo "<li><a href="."'./create.php'".">Open Project</a></li> ";
     echo "<li><a href="."'#'".">My Page</a></li> ";
}

?>
                        

                        <!-- 마이페이지 드롭다운버튼 -->
                        <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Page <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
                </li> -->
              </ul>

                    <!-- Search 기능 -->
              <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Searching Project">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
              </form> -->

                    <!-- 회원가입 버튼 -->
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./join.html" target="under">Sign up</a></li>
                    </ul>

                    <!-- 로그인 버튼 -->
                    <?php




if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw'])) {
 session_unset('user_id');
 session_unset('user_pw');
 echo "<ul class="."'nav navbar-nav navbar-right'".">
                <li><a href="."'./login.html'"." target="."'under'".">Login</a></li>
              </ul>";
}
else{
     echo "<ul class="."'nav navbar-nav navbar-right'".">
                <li><a href="."'./php/logout.php'".">Logout</a></li>
              </ul>";
}

?>
              

            </div>
          </div>
        </nav>

<?php 
$num= (int)$_GET['num'];
echo"<form class='form-horizontal' action='./php/money.php?num=".$num."'  method='post'>" ?>


	
     	
	        
     	
     	<div style="margin-left:20%; margin-right:20%">
     		<div class="radio">
	          <label>
	            <input type="radio" name="money" id="optionsRadios1" value="10000" checked="">
	            <b>10,000 won</b> <div style="padding:10px"> Reward 1 <br> Option 1 description</div>
	          </label>
	        </div>
	        <div class="radio">
	          <label>
	            <input type="radio" name="money" id="optionsRadios2" value="20000">
	            <b>20,000 won</b> <div style="padding:10px"> Reward 2 <br> Option 2 description</div>
	          </label>
	        </div>
	        <div class="radio">
	          <label>
	            <input type="radio" name="money" id="optionsRadios3" value="30000">
	            <b>30,000+ won</b> <div style="padding:10px"> Reward 3+ <br> Option 3 description; over 30,000 won</div>
	          </label>
	        </div>
		
		  
		
		</div>
<div align="right" style="margin-right:30%; margin-bottom:5%"><input type="submit" value="Reservation"class="btn btn-primary"></div>
</form>
	

     	
	</body>
</html>
