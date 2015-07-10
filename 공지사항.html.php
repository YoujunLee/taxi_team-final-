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
		    $("#flip").click(function(){
		        $("#panel").slideToggle("slow");
		    });
		});
		</script>
		
		<style> 
		#panel, #flip {
		    padding: 15px;
		    text-align: center;
		    background-color: #f8f8f8;
		    border: solid 1px #34c6be;
		}
		
		#panel {
		    padding: 50px;
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
		<ul class="list-group">
		  <li class="list-group-item">
		 	<?php	
				require_once('./php/config.php');
			
				$db = new DBC;	 //db object생성
				$db->DBI();		//db 들어가기
				
				$db->query = "select * from notice";
				$db->DBQ();
				
				while($data = $db->result->fetch_assoc())
				{
					echo $data['subject']. "(". $data['time']. ")". "<br>";
				}
			?>
		    <div class="modify2">
		    <a href="#" class="btn btn-link">></a>
		    </div>
		  </li>
		</ul>
		<div id="flip">
			<?php	
				require_once('./php/config.php');
			
				$db = new DBC;	 //db object생성
				$db->DBI();		//db 들어가기
				
				$db->query = "select * from notice";
				$db->DBQ();
				
				while($data = $db->result->fetch_assoc())
				{
					echo $data['subject']. "(". $data['time']. ")". "<br>";
				}
			?>
		</div>
		<div id="panel">
			<?php	
				require_once('./php/config.php');
			
				$db = new DBC;	 //db object생성
				$db->DBI();		//db 들어가기
				
				$db->query = "select * from notice";
				$db->DBQ();
				
				while($data = $db->result->fetch_assoc())
				{
					echo $data['memo']. "<br>";
				}
			?>		
		</div>
		<hr/>		
		</div>
	</body>
</html>