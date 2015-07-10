<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>공지사항</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/mypage.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script> 
			$(document).ready(function(){
			    $("div").on("click",".flip",function(){
			        $(".panel").slideToggle("slow");
			    });
			});
		</script>
		
		<style>
		.flip {
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
		</style>
	</head>
	<body>
		<div class="div_root">
		<br><br><br>
		<div align="center">
				<h2>공지사항</h2>
		</div>
		<br><br><br>
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