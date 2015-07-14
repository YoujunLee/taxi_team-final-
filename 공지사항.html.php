<?php
	include "./php/session_out.php";
	out();
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<title>공지사항</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/mypage.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="./js/mypage.js"></script> 
			
		</script>
		
		<style>
			.flip{
				color: #ffffff;
			    padding: 12px;
			    text-align: left;
			    background-color: #34c6be;
			}
			 
			.panel{
			    padding: 12px;
			    text-align: left;
			    background-color: #ffffff;
			    border: solid 1px #34c6be;
			    padding: 12px;
			    display: none;
			}
			body.padding{
				padding-right : 0px !important;
				padding-left : 0px !important ;
				margin-right: 0px !important;
				padding-bottom : 0px ;
				border-bottom : 0px ;
			}
			ul.right{
				float : right ;
				margin-right : 0px !important ;
			}

		</style>
	</head>
	<body class = "col-xs-12  col-md-4 col-md-offset-4 padding">
		
			<nav class="navbar navbar-inverse">
<a class="navbar-brand" href="./index.php"><img class="imgpa" src="./img/logo.png"></a>
<ul class="nav navbar-nav navbar-right right">
        <li><a href="./php/logout.php">LogOut</a></li>
      </ul>
      </nav>
		<br><br>
		<div align="center">
				<h2>공지사항</h2>
		</div>
		<br>
		<hr/>
		
		
		<?php
			require_once('./php/config.php');
	
			$db = new DBC;	 //db object생성
			$db->DBI();		//db 들어가기
			
			$db->query = "select * from notice order by num desc";
			$db->DBQ();
		?>
			
		<?php
			while($data = $db->result->fetch_assoc())
			{
				?>
					<div class="flip">
					<?php	
						echo $data['subject']. "&nbsp;&nbsp;"."(". $data['time']. ")";
					?>
					</div>
					<div class="panel">
					<?php	
						echo $data['memo']. "<br>";
					?>
					</div>
					<br/>
				<?php
			}
		?>
				<hr/>	
		</div>
	</body>
</html>