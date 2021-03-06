<!-- QnA 확인창 -->

<?php
	include "./php/session_out.php";
	out();
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<title>Q & A</title>
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
	<body>
		
		<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
			<tr class="row">
			   <td class = "logo" >
			      <a  href="./main.html.php"><img src="./img/logo.png"></a>
			    </td >
			    
      		 <td class = "logout1">
      	   		<a onclick="history.back(-1)">
		     		<img src="./img/back.png" width="25px" height="25px">
	       		</a>
           </td>
  		   <td class = "logout">
      	   		<a  onclick="location.href='./php/logout.php'">
      	   			<img src="./img/power.png" width="30px" height="30px">
	       		</a>
           </td>
  		</tr>
	</table>
	
		<div class = "col-xs-12  col-md-4 col-md-offset-4">
			
			
		<br><br>
			<?php
				require_once('./php/config.php');
		
				$db = new DBC;	 //db object생성
				$db->DBI();		//db 들어가기
				
				$db->query = "select * from QnA order by num desc";
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
							echo "<br>"."학번: ". $data['stu_id']."<br>"."작성자: ". $data['name']."<br>"."핸드폰 번호: ". $data['phone_num'];
						?>
						</div>
						<br>
					<?php
				}
			?>	
		</div>
	</body>
</html>