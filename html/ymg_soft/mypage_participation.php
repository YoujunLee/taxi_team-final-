

<html>
	<head>
		<title> Leopard :: Crowd Funding  </title>
		<link rel = "stylesheet" type = "text/css"
			href = "bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css"
			href = "bootstrap.min.css"/>
			<meta charset="UTF-8">
	</head>

	<body>
		<table style="width:100%">
			<tr height="10">
				<td colspan="2">
		<nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://itaxi.handong.edu/ymg_soft/">Leopard Funding</a>
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
     echo "<li><a href="."'./mypage_openPrj.php'".">My Page</a></li> ";
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
	</td>
</tr>
<tr>
	<td valign="top" width="20%">
		<!-- 사이드메뉴 -->
		<div style="margin-top:60%"></div>
		<div style="margin-left:20%; width:160px">
		<ul class="nav nav-pills nav-stacked">
 			<li class="active"><a href="./mypage_participation.php">Participation</a></li>
			<li><a href="./mypage_openPrj.php">Open Project</a></li>
			
		</ul>
		</div>
	</td>
	<td>
		<!-- 컨텐츠 부분 -->
		<div style="margin-left:5%; width:600px; padding-top:5em">

				<h2>Participation</h2>

				<br/><br/><br/><br/>

				<!-- 프로젝트들 -->

	<?php
	
    require_once './php/db.php';
$email = $_SESSION['user_id'];
	$db = new DBC;
	$db2 = new DBC;
	$db->DBI();
	$db2->DBI();
	$db->query = "select num,money from money  where email='".$email."' ORDER BY num desc";
	$db->DBQ();
	$num=0;
   $a=0;
   $money="";
    
   while($data2 = $db->result->fetch_row())
	    		{ $num=$data2[0];

	$db2->query = "select title from  project where num='".$num."' ";
	$db2->DBQ();
	while($data1 = $db2->result->fetch_row()){
		
		echo "<p>".$data1[0]."</p>";
	}
	    			$money=$data2[1];
	    		 echo "<p>".$money."</p>";

				}
				?>
</td>
</tr>
</table>
	</body>

	<!-- <frameset rows = "20%,*" border=0 framespacing=0 frameborder=0>
		<frame name="upper" src="menu.html"/>
		<frame name="under" src="under.html">
	<body>
	</body> -->
</html>
