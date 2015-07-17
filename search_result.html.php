<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php
	include "./php/session_out.php";
	out();
    if(!isset($_SESSION['search_start'])){
		echo "<script>location.replace('../index.php');</script>";
   		exit;
	}
	
	$start = $_SESSION['search_start'];
	$arrive = $_SESSION['search_arrive'];
	$date = $_SESSION['search_date'];
	$s_time= $_SESSION['start_time'];
	$e_time = $_SESSION['end_time'];

	require_once './php/config.php';

	$db = new DBC;
	$db->DBI();
	if($start!='전체보기'&&$arrive!='전체보기')
	$db->query = "select start, arrive, date, time,population,post_id from post where start='".$start."' and arrive='".$arrive."'and date='".$date."'and time>='".$s_time."'and time<='".$e_time."'";
	else if($start=='전체보기'&&$arrive=='전체보기')
	$db->query = "select start, arrive, date, time,population,post_id from post where date='".$date."'and time>='".$s_time."'and time<='".$e_time."'";
	else if($start=='전체보기')
	$db->query = "select start, arrive, date, time,population,post_id from post where arrive='".$arrive."'and date='".$date."'and time>='".$s_time."'and time<='".$e_time."'";
	else 
	$db->query = "select start, arrive, date, time,population,post_id from post where start='".$start."' and date='".$date."'and time>='".$s_time."'and time<='".$e_time."'";	
	$db->DBQ();
	$num = $db->result->num_rows;
    			
	if($num<=0)
	{
		echo "<script>
		   		var result=confirm('죄회되는 방이 없습니다. 방을 만드시겠습니까?');
		   		if(result)
		   			location.replace('../make_room.html.php');
		   		else
		   			location.replace('../search_room.html.php');
		   	  </script>";
   		
   		exit;
	}

	$db2 = new DBC;
	$db2->DBI();
 
	$current_time = new DateTime;
	$current_time->setTimezone(new DateTimezone("asia/seoul"));	   
?>

<title>i-Taxi</title>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./css/index2.css">
</head>

<body class="center">
	<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
		
		<tr class="row">
  
   <td class = "logo" >
      <a  href="./조회창.html.php"><img src="./img/logo.png"></a>
  
    
    </td >
      <td class = "logout">
      <form action='./php/logout.php'>
		     <input class="btn1" type="submit" value="LogOut">
	       </form>
        </td >
  </tr>
		
	</table>
<section >
	
	<div class="wrapper col-xs-12  col-md-4 col-md-offset-4">
	    <?php echo$date." ".$s_time."~".$e_time."<br>";?>
	    <?php echo$start."->".$arrive;?>
   
	</div>
	
</section>

<section >
<div class=" col-xs-12  col-md-4 col-md-offset-4">

<table class="table table-striped table-hover ">
  <thead>
    <tr class="row">
      

      <th class="col-xs-3 col-md-3">출발시간</th>
      <th class="col-xs-7 col-md-7">장소</th>
      <th class="col-xs-2 col-md-2">State</th>
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
	 			$check = false;
	 			$db2->query = "select post_id, stu_id from room_user where post_id = '".$data[5]."'"; 
	 			$db2->DBQ();
	    		$num2 = $db2->result->num_rows;
    	
    			while($data2 = $db2->result->fetch_row())
    			{ 
					if($data2[1]== $_SESSION['user_id'])
					$check=true;
				}	
    	
    		echo "<tr class="."'row'".">";
    		
    		echo " <th class="."'col-xs-3 col-md-3'".">".substr($data[3],0,2)." : ".substr($data[3],3,2)."</th>";
    		echo " <th class="."'col-xs-7 col-md-7'".">".$data[0]."->"."<br>".$data[1]."</th>";
    		$current_time = date("Y-m-d h:i:s");

			if($current_time>$data[2]." ".$data[3])
				echo " <th class="."'col-xs-2 col-md-2'"."><a href='#' class='btn btn-success'>시간<br>종료</a></th>";
			else if($check)
    			echo " <th class="."'col-xs-2 col-md-2'"."><a href='./Room.html.php?".$data[5]."' class='btn btn-warning'>탑승중<br>".$num2."/".$data[4]."</a></th>";
			else if($num2==$data[4])
    			echo " <th class="."'col-xs-2 col-md-2'"."><a href='#' class='btn btn-danger'>FULL<br>".$num2."/".$data[4]."</a></th>";
			else 
    			echo " <th class="."'col-xs-2 col-md-2'"."><a href='./php/탑승하기.php?post_id=".$data[5]."' class='btn btn-info'>미탑승<br>".$num2."/".$data[4]."</a></th>";
        	echo " </tr>";
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
	
<div class="col-xs-12 col-md-4 col-md-offset-4">
	<ul class="pagination pagination-lg">
  		
	<?php
	$number;
	if($page>1)
	echo "<li><a href='./search_result.html.php'>«맨앞</a></li>";

	if($page>1)
  	echo "<li><a href='./search_result.html.php?page=".($page-1)."'><이전</a></li>";
	
	for($number=floor(($page/5))*5+1;$number<floor(($page/5))*5+6;$number++){
		if($number<=floor((($num-1)/10))+1){
	   		if($number!=$page)
				echo"<li><a href='./search_result.html.php?page=".($number)."'>".$number."</a></li>";
		else
			echo"<li class='active'><a href='./search_result.html.php?page=".($number)."'>".$number."</a></li>";
		}
	}
	
	if($page<floor((($num-1)/10))+1)
  	echo "<li><a href='./search_result.html.php?page=".($page+1)."'>앞으로></a></li>";
	
	if($page<floor((($num-1)/10)+1))
  	echo "<li><a href='./search_result.html.php?page=".floor(((($num-1)/10)+1))."'>맨뒤»</a></li>";
  	?>
 			
	</ul>
</div>
				
</body>
</html>

