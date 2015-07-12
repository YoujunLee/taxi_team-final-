<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalabel=no, initial-scale=1">
<?php
include "./php/session_out.php";
out();
	$start = $_POST['search_start'];
	$arrive = $_POST['search_arrive'];
	$date = $_POST['search_date'];
	$s_time= $_POST['start_time'];
	$e_time = $_POST['end_time'];

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
		echo "<script>alert('조회가능한 방이 없습니다.');history.back();</script>";
   		exit;
	}

	$db2 = new DBC;
	$db2->DBI();
    
?>

<title>i-Taxi</title>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./css/index2.css">
</head>

<body class="center">
	<div class="wrapper">
	    <p><?php echo$date." ".$s_time."~".$e_time;?></p>
	    <p><?php echo$start."->".$arrive;?></p>
    </div>

<table class="table table-striped table-hover ">
  <thead>
    <tr class="row">
      <th class="col-xs-2 col-md-1">#</th>
      <th class="col-xs-3 col-md-2">출발시간</th>
      <th class="col-xs-4 col-md-3">출발장소</th>
      <th class="col-xs-4 col-md-3">도착장소</th>
      <th class="col-xs-3 col-md-2">탑승인원</th>
      <th class="col-xs-2 col-md-1">State</th>
    </tr>
  </thead>
  <tbody>
  <?php
	 $number=1;
  	 $check = false;
  	 
  	 while($data = $db->result->fetch_row())
	 {  $check = false;
	 	$db2->query = "select post_id, stu_id from room_user where post_id = '".$data[5]."'"; 
	 	$db2->DBQ();
	    $num2 = $db2->result->num_rows;
    	while($data2 = $db2->result->fetch_row()){
			if($data2[1]== $_SESSION['user_id'])
			$check=true;
		}	
    	echo "<tr class="."'row'".">";
    	echo " <th class="."'col-xs-2 col-md-1'".">".$number++."</th>";
    	echo " <th class="."'col-xs-3 col-md-2'".">".substr($data[3],0,2)." : ".substr($data[3],3,2)."</th>";
    	echo " <th class="."'col-xs-4 col-md-3'".">".$data[0]."</th>";
    	echo " <th class="."'col-xs-4 col-md-3'".">".$data[1]."</th>";
    	echo " <th class="."'col-xs-3 col-md-2'".">".$num2." / ".$data[4]."</th>";
		
		if($num2==$data[4])
    		echo " <th class="."'col-xs-2 col-md-1'"."><a href='#' class='btn btn-danger'>FULL</a></th>";
    	else if($check)
    		echo " <th class="."'col-xs-2 col-md-1'"."><a href='./Room.html.php?".$data[5]."' class='btn btn-warning'>탑승중</a></th>";
		else 
    		echo " <th class="."'col-xs-2 col-md-1'"."><a href='./php/탑승하기.php?post_id=".$data[5]."' class='btn btn-info'>탑승하기</a></th>";
        
  		echo " </tr>";
	  }
	$db->DBO();
	$db2->DBO();
    ?>
   </tbody>
</table>

<div class="row">
	<div class="col-xs-6 col-md-4">
	</div>
		<div class="col-xs-6 col-md-4">
  		<ul class="pagination pagination-lg">
  			<li class="disabled"><a href="#">«</a></li>
  			<li class="active"><a href="#">1</a></li>
  			<li><a href="http://naver.com" target ="_blank">2</a></li>
  			<li><a href="#">3</a></li>
 			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">»</a></li>
		</ul>
		</div>
</div>

		<div class="col-xs-6 col-md-4"></div>
		</div>
</body>
</html>

