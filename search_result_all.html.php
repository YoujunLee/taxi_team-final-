<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php
	include "./php/session_out.php";
	out();
    require_once './php/config.php';

	$db = new DBC;
	$db->DBI();
	$db->query = "select start, arrive, date, time,population,post_id from post ORDER BY date desc,time desc";
	$db->DBQ();
	$num = $db->result->num_rows;
    			
	if($num<=0)
	{
		echo "<script>
		   		var result=confirm('죄회되는 방이 없습니다. 방을 만드시겠습니까?');
		   		if(result)
		   			location.replace('../make_room.html.php');
		   		else 
		   		   location.replace('./조회창.html.php');
		   	  </script>";
   		exit;
	}

	$db2 = new DBC;
	$db2->DBI();
?>

<title>i-Taxi</title>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./css/index2.css">
<link rel="stylesheet" type="text/css" href="./css/index3.css">
</head>

<body class="center">
	<script>  window.setTimeout('window.location.reload()',100000); </script>
	<table class="navi col-xs-12  col-md-4 col-md-offset-4" >	
		<tr class="row">
		   <td class = "logo" >
      			<a  href="./조회창.html.php">
      				<img src="./img/logo.png">
      			</a>
  		   </td>
      	    <td class = "logout">
      	   		<a href='./php/logout.php'>
      	   			<img src="./img/power.png" width="30px" height="30px">
	       		</a>
           </td>
      	   <td class = "logout1">
      	   		<a href='./조회창.html.php'>
		     		<img src="./img/home.png" width="25px" height="25px">
	       		</a>
           </td>
  		</tr>
	</table>
	
	<section >
		<div class="title col-xs-12  col-md-4 col-md-offset-4">
	    	<h4><b>전체조회</b></h4>
   		</div>
	</section>

	<section>
		<div class="padding col-xs-12  col-md-4 col-md-offset-4">
			<table class="table3 table-striped table-hover ">
  
  			<thead>
    			<tr class="row">
      			    <th class="col-xs-3 col-md-3">시간</th>
      				<th class="col-xs-7 col-md-7 ">장소 <span class="padding" style="font-size: 10px">(출발지→도착지)</span></th>
      				<th class="col-xs-2 col-md-2" style="text-align:center">상태</th>
    			</tr>
  			</thead>
  
  			<tbody>
 			<?php
     			$page = 1; 
     			if(isset($_GET["page"]))
     			$page = $_GET["page"];
	 			$count = 0;
	 			$page_number =  $page*10 -10;
	 			$check = false;
  	 			$num = $db->result->num_rows;
  	 
  	 			while($data = $db->result->fetch_row())
	 			{
	 				if($page_number==$count)
	 					if($page_number++<$page*10)
	 					{
							$check2 = false;
	 						$db2->query = "select post_id, stu_id from room_user where post_id = '".$data[5]."'"; 
	 						$db2->DBQ();
	    					$num2 = $db2->result->num_rows;
							   	
			    			while($data2 = $db2->result->fetch_row())
    						{ 
								if($data2[1]== $_SESSION['user_id'])
								$check2=true;
							}
							date_default_timezone_set("Asia/Seoul"); 
							$current_time = date("Y-m-d H:i:s");
						?>
												
    						<tr <?php if($check2==false)
									   {
										if($check2==false&&$num2==$data[4])
									  		{?>onclick="location.href='#'"<?php }
										else if($current_time>$data[2]." ".$data[3])
											{?>onclick="location.href='#'"<?php } 
										else	
											{?>onclick="location.href='./php/탑승하기질문.php?post_id=<?php echo $data[5]; ?>'"<?php }
									   }
									  else if($check2==true)
											{?>onclick="location.href='./Room.html.php?<?php echo $data[5]; ?>'"<?php } ?>>									
    						<?php
    						echo "<td class="."'row'".">";?>
    			    		<td class="col-xs-3 col-md-3"><?php echo $data[2]; ?> <br> <?php echo substr($data[3],0,2)." : ".substr($data[3],3,2); ?><?php if($check2==true) echo " &nbsp;☆"; ?>
    						<?php
    						echo " <td class="."'col-xs-7 col-md-7'".">".$data[0]."<br>"."&nbsp;&nbsp;"." →&nbsp;&nbsp;".$data[1]."</th>";
    						
							if($current_time>$data[2]." ".$data[3])
								echo " <th class="."'col-xs-2 col-md-2'"." style="."'text-align:center'"."><a href='#' class='btn btn-success1'>시간<br>종료</a></th>";
							else if($check2==true)
    							echo " <th class="."'col-xs-2 col-md-2'"." style="."'text-align:center'"."><a href='#' class='btn btn-warning1'>참여중<br>".$num2."/".$data[4]."</a></th>";
							else if($num2==$data[4])
    							echo " <th class="."'col-xs-2 col-md-2'"." style="."'text-align:center'"."><a href='#' class='btn btn-danger1'>FULL<br>".$num2."/".$data[4]."</a></th>";
							else 
    							echo " <th class="."'col-xs-2 col-md-2'"." style="."'text-align:center'"."><a href='#' class='btn btn-info1'>탑승<br>".$num2."/".$data[4]."</a></th>";
							?>					
        					</tr>
        				<?php
  						}
  						else
							break;
		        		$count++;
	  			}
	
					$db->DBO();
					$db2->DBO();
    			?>
   				</tbody>
			</table>
			</div>
	</section >
	<!-- Page 넘기는 장치-->
	<div class="col-xs-12 col-md-4 col-md-offset-4">
	<ul class="pagination pagination-lg">
		<?php
			$number;
			if($page>1)
				echo "<li><a href='./search_result_all.html.php'>«</a></li>";

			if($page>1)
  				echo "<li><a href='./search_result_all.html.php?page=".($page-1)."'><</a></li>";
	
			for($number=floor((($page-1)/3))*3+1;$number<floor((($page-1)/3))*3+4;$number++){
				if($number<=floor((($num-1)/10))+1){
			   		if($number!=$page)
						echo"<li><a href='./search_result_all.html.php?page=".($number)."'>".$number."</a></li>";
					else
						echo"<li class='active'><a href='./search_result_all.html.php?page=".($number)."'>".$number."</a></li>";
				}
			}
	
			if($page<floor((($num-1)/10))+1)
  				echo "<li><a href='./search_result_all.html.php?page=".($page+1)."'>></a></li>";
	
			if($page<floor((($num-1)/10)+1))
  				echo "<li><a href='./search_result_all.html.php?page=".floor(((($num-1)/10)+1))."'>»</a></li>";
  		?>
 	</ul>
 	<div class="div2">
		    Tip: 본인이 참여한 방만 조회 가능합니다. (☆표시)
	</div>
	
	</div>
</body>
</html>