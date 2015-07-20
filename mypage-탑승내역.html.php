<?php
include "./php/session_out.php";
out();
?>

<!DOCTYPE html>
<html>
<head>
	<title>i-Taxi</title>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/index2.css">    
	<link rel="stylesheet" type="text/css" href="./css/index3.css">    
	<link rel="stylesheet" type="text/css" href="./css/mypage_change.css">    
</head>

<body class = "center">
	<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
		<tr class="row">
			<td class = "logo" >
		        <a  href="./조회창.html.php"><img src="./img/logo.png"></a>
    		</td>
      
      		<td class = "logout">
      			<form action='./php/logout.php'>
		     		<input class="btn1" type="submit" value="LogOut">
	       		</form>
        	</td>
  		</tr>
	</table>
	
	<section >
		<table class="title col-xs-12  col-md-4 col-md-offset-4">
		<tr class="row">
		<td class=" col-xs-4  col-md-4">
   
		</td>
		<td class="padding col-xs-4  col-md-4">
				<h4><span style="color:black"><b>택시 탑승내역 </b> </span></h4>
		</td>
		<td class=" col-xs-4  col-md-4">
		<form class="yg_float" action = './탑승내역_카풀.html.php'>
	    	<input class="btn5" type="submit" value="카풀 내역">
	    	</form>
		</td>
	    	
	    	
	    	
   		</tr>
	</table>
	</section>
	
	<div class="padding col-xs-12  col-md-4 col-md-offset-4">
		<table class="table3 table-striped table-hover ">
  			<thead>
    			<tr class="row">
	  				<th class="col-xs-3 col-md-3" >시간</th>
      				<th class="col-xs-7 col-md-7" >장소 <span class="padding" style="font-size: 10px">(출발지→도착지)</span></th>
      				<th class="col-xs-2 col-md-2" style="text-align:center">상태</th>
    			</tr>
  			</thead>
	 		<tbody>
	 		<?php
				require_once './php/db.php';
				
				$user_id=$_SESSION['user_id'];
				
				$db3 = new DBC;
				$db3->DBI();
				$db3->query= "SELECT post_id FROM room_user WHERE stu_id='".$user_id."'ORDER BY date desc,time desc";
				$db3->DBQ();
				
				$db = new DBC;
				$db->DBI();
				
				$db2 = new DBC;
				$db2->DBI();
				$page = 1; 
     			if(isset($_GET["page"]))
     				$page = $_GET["page"];
	 			$count = 0;
	 			$page_number =  $page*10 -10;
	 			$check = false;
  	 			$num = $db3->result->num_rows;	
				
				while($data= $db3->result->fetch_row())
				{
				$db->query = "SELECT start, arrive, date, time, population, post_id FROM post WHERE post_id='".$data[0]."' ";
				$db->DBQ();
				while($data1=$db->result->fetch_row())
				{
					
	 				if($page_number==$count)
	 					if($page_number++<$page*10)
	 					{
	 						$check = false;
	 						$db2->query = "SELECT post_id, stu_id from room_user WHERE post_id = '".$data1[5]."'"; 
	 						$db2->DBQ();
							$num2 = $db2->result->num_rows;
    	
			    			while($data2 = $db2->result->fetch_row())
    						{ 
								if($data2[1]== $_SESSION['user_id'])
								$check=true;
							}	
    	
    						echo "<td class="."'row'".">";
    			    		echo " <td class="."'col-xs-3 col-md-3'".">".$data1[2]."<br>".substr($data1[3],0,2)." : ".substr($data1[3],3,2)."</th>";
    						echo " <td class="."'col-xs-7 col-md-7'".">".$data1[0]." → "."<br>".$data1[1]."</th>";
    						date_default_timezone_set("Asia/Seoul");
    						$current_time = date("Y-m-d h:i:s");

							if($current_time>$data1[2]." ".$data1[3])
								echo " <th class="."'col-xs-2 col-md-2'"."><a href='./Room.html.php?".$data1[5]."' class='btn btn-success1'>시간<br>종료</a></th>";
							else if($check)
    							echo " <th class="."'col-xs-2 col-md-2'"."><a href='./Room.html.php?".$data1[5]."' class='btn btn-warning1'>참여중<br>".$num2."/".$data1[4]."</a></th>";
							else if($num2==$data[4])
    							echo " <th class="."'col-xs-2 col-md-2'"."><a href='#' class='btn btn-danger1'>FULL<br>".$num2."/".$data1[4]."</a></th>";
							else 
    							echo " <th class="."'col-xs-2 col-md-2'"."><a href='./php/탑승하기.php?post_id=".$data1[5]."' class='btn btn-info1'>탑승<br>".$num2."/".$data1[4]."</a></th>";
        					
        					echo " </tr>";
  						}
  						else
							break;
	
	        		$count++;
	  				}
	  				}
					$db->DBO();
					$db2->DBO();
					$db3->DBO();
    			?>	
    		</tbody>
  		</table>
	</div>
	<!-- Page 넘기는 장치-->
	<div class="col-xs-12 col-md-6 col-md-offset-3">
		<ul class="pagination pagination-lg">
  		<?php
			$number;
			if($page>1)
				echo "<li><a href='./mypage-탑승내역.html.php'>«</a></li>";

			if($page>1)
  				echo "<li><a href='./mypage-탑승내역.html.php?page=".($page-1)."'><</a></li>";
	
			for($number=floor((($page-1)/3))*3+1;$number<floor((($page-1)/3))*3+4;$number++){
				if($number<=floor((($num-1)/10))+1){
			   		if($number!=$page)
						echo"<li><a href='./mypage-탑승내역.html.php?page=".($number)."'>".$number."</a></li>";
					else
						echo"<li class='active'><a href='./mypage-탑승내역.html.php?page=".($number)."'>".$number."</a></li>";
				}
			}
	
			if($page<floor((($num-1)/10))+1)
  				echo "<li><a href='./mypage-탑승내역.html.php?page=".($page+1)."'>></a></li>";
	
			if($page<floor((($num-1)/10)+1))
  				echo "<li><a href='./mypage-탑승내역.html.php?page=".floor(((($num-1)/10)+1))."'>»</a></li>";
  		?>
 		</ul>
	</div>
</body>
</html>

