<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Leopard :: Funding Payment </title>
	<link rel = "stylesheet" type = "text/css"
		href = "bootstrap.css"/>
	<link rel = "stylesheet" type = "text/css"
		href = "bootstrap.min.css"/>
		<link rel = "stylesheet" type = "text/css"
		href = "yang.css"/>
</head>

<body >
			<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Leopard Funding</a>
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

		<!-- <div style="margin-left:25%; padding-top:3em">
			<table border="0">
     			<tr style="text-align:center">
     				<td> <img src="ic_account_circle_black_48dp_1x.png" style="float:left"></td>
     				<td style="padding-left:10"><h3>A IN</h3></td>
     			</tr>
     		</table>
		</div> -->
<div style="margin-left:10%; margin-right:10em; margin-bottom:10%">
	<h1 style="text-align:center; margin-top:1em"> Crowd Funding </h1>
	<p class="lead" style="text-align:center; margin-top:1em;margin-bottom:3em"> 실시간 급상승 인기 프로젝트 </p>


	<table>
		<tr>
			<td>
					<div>
  <div class="panel-heading">
    <h3>기부 나눔</h3>
  </div>

</div>
</td>
</tr>
<tr>
	<?php
	
    require_once './php/db.php';

	$db = new DBC;
	$db->DBI();
	$db->query = "select title, content,num from project  where type='기부나눔' ORDER BY num desc";
	$db->DBQ();
	
   $a=0;
   $title[0]="a";
     $title[1]="b";
       $title[2]="c";
   $content[0]="a";
    $content[1]="b";
     $content[2]="c";
     $num[0]=0;
     $num[1]=1;
       $num[2]=2;
   while($data2 = $db->result->fetch_row())
	    		{ if($a==3)
	    			break;
	    			$title[$a]=$data2[0];
	    			$content[$a]=$data2[1];
	    			$num[$a]=$data2[2];
					$a=$a+1;

				}

  $db->query = "select title, content,num from project  where type='10만원 프로젝트' ORDER BY num desc";
	$db->DBQ();
	 $a=0;
   $title1[0]="a";
     $title1[1]="b";
       $title1[2]="c";
        $content1[0]="C";
    $content1[1]="D";
     $content1[2]="E";
         $num1[0]=0;
     $num1[1]=1;
       $num1[2]=2;
   
   while($data2 = $db->result->fetch_row())
	    		{ if($a==3)
	    			break;
	    			$title1[$a]=$data2[0];
	    			$content1[$a]=$data2[1];
	    			$num1[$a]=$data2[2];
					$a=$a+1;

				}
  $db->query = "select title, content,num from project  where type='공동구매' ORDER BY num desc";
	$db->DBQ();
	 $a=0;
   $title2[0]="a";
     $title2[1]="b";
       $title2[2]="c";
    $content2[0]="a";
    $content2[1]="b";
     $content2[2]="c";
         $num2[0]=0;
     $num2[1]=1;
       $num2[2]=2;
   while($data2 = $db->result->fetch_row())
	    		{ if($a==3)
	    			break;
	    			$title2[$a]=$data2[0];
	    			$content2[$a]=$data2[1];
	    			$num2[$a]=$data2[2];
					$a=$a+1;

				}
	
	
?>

<td >
				<div class="panel panel-primary">
  				<div class="panel-heading">
    				<h3 class="panel-title"><?php echo "<a href='./viewProject.php?num=".$num[0]."'>".$title[0]."</a>"?>  </h3>
  				</div>
  				<div class="panel-body" style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
    				<?php echo $content[0]?>
  				</div>
					</div>
			</td>
			<td>
							<div class="panel panel-primary">
			  				<div class="panel-heading">
			    				<h3 class="panel-title"><?php echo "<a href='./viewProject.php?num=".$num[1]."'>".$title[1]."</a>"?>  </h3>
			  				</div>
			  				<div class="panel-body" style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
			    				<?php echo $content[1]?>
			  				</div>
								</div>
						</td>

						<td>
										<div class="panel panel-primary">
						  				<div class="panel-heading">
						    				<h3 class="panel-title"> <?php echo "<a href='./viewProject.php?num=".$num[2]."'>".$title[2]."</a>"?>  </h3>
						  				</div>
						  				<div class="panel-body"style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
						    				<?php echo $content[2]?>
						  				</div>
											</div>
									</td>
		</tr>
		<tr>
			<td>
					<div>
	<div class="panel-heading">
		<h3>10만원 프로젝트</h3>
	</div>

	</div>
	</td>
	</tr>
	<tr>
	<td>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo "<a href='./viewProject.php?num=".$num1[0]."'>".$title1[0]."</a>"?>   </h3>
						</div>
						<div class="panel-body" style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
    				<?php echo $content1[0]?>
  				</div>
						</div>
				</td>
				<td>
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"> <?php echo "<a href='./viewProject.php?num=".$num1[1]."'>".$title1[1]."</a>"?>   </h3>
									</div>
									<div class="panel-body" style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
    				<?php echo $content1[1]?>
  				</div>
									</div>
							</td>

							<td>
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h3 class="panel-title"> <?php echo "<a href='./viewProject.php?num=".$num1[2]."'>".$title1[2]."</a>"?>   </h3>
												</div>
												<div class="panel-body" style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
    				<?php echo $content1[2]?>
  				</div>
												</div>
										</td>
			</tr>
		<tr>
			<td>
					<div>
	<div class="panel-heading">
		<h3>공동구매해요!</h3>
	</div>

	</div>
	</td>
	</tr>
	<tr>
	<td>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo "<a href='./viewProject.php?num=".$num2[0]."'>".$title2[0]."</a>"?>    </h3>
						</div>
						<div class="panel-body" style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
    				<?php echo $content2[0]?>
  				</div>
						</div>
				</td>
				<td>
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><?php echo "<a href='./viewProject.php?num=".$num2[1]."'>".$title2[1]."</a>"?>   </h3>
									</div>
									<div class="panel-body" style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
    				<?php echo $content2[1]?>
  				</div>
									</div>
							</td>

							<td>
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h3 class="panel-title"><?php echo "<a href='./viewProject.php?num=".$num2[2]."'>".$title2[2]."</a>"?>  </h3>
												</div>
												<div class="panel-body" style="width:200px;height:200px; overflow-x:hidden;overflow-y:hidden">
    				<?php echo $content2[2]?>
  				</div>
												</div>
										</td>
			</tr>
	</table>
</div>
</body>
</html>
