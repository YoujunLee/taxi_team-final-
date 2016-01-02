

<html>
	<head>
		<title> Leopard :: Crowd Funding  </title>
		<link rel = "stylesheet" type = "text/css"
			href = "bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css"
			href = "bootstrap.min.css"/>
			<meta charset="UTF-8">
	</head>
<?php
	
    require_once './php/db.php';
$num= (int)$_GET['num'];
	$db = new DBC;
	$db->DBI();
	$db->query = "select title, manager,content,price from project  where num=".$num."";
	$db->DBQ();
	
	 while($data2 = $db->result->fetch_row())
	    		{ $title=$data2[0];
                  $manager = $data2[1];
                  $content = $data2[2];
                  $price = $data2[3];
				}
				
				$price = (int)str_replace(",","",$price);
				
	$db->query = "select money from money  where num=".$num."";
	$db->DBQ();
	$price2=0;
	 while($data2 = $db->result->fetch_row())
	    		{ $price2+=$data2[0];
                  
				}

	$percent = round($price2*100/$price);
	
	?>
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

		<h3 style="text-align:center; margin-top:3em;"> <?php echo $title; ?></h3>
		<div align="center" style="padding:30px"> <?php echo $manager; ?></div>
		<div align="center">
		<div align="center" style="padding:2em width:600px"><?php echo $content; ?> </div>
		</div>

		<div align="center" style="padding-top:3em; padding-bottom:1em"> <h4> Progress about Funding </h4> </div>
		<div class="progress" style="margin-left:30%; margin-right:30%">
			<?php
echo "<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='100' style='width: ".$percent."%'>"
			?>
	
		
	</div>
	</div>
<?php
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw'])) {
 echo "<div align='center' style='padding:3em; margin-bottom:3em'><a href='./login.html' class='btn btn-primary' style='width:200px'>GO TO PAYMENT</a></div>";
}
else{
     echo "<div align='center' style='padding:3em; margin-bottom:3em'><a href='./payment2.php?num=".$num."' class='btn btn-primary' style='width:200px'>GO TO PAYMENT</a></div>";
}
?>
		


	</body>
</html>
