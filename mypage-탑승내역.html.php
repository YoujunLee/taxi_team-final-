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
	
	<link rel="stylesheet" type="text/css" href="./css/mypage_change.css">    
</head>
<body class = "center">
</br>
</br></br></br>
<div class=" col-xs-12  col-md-6 col-md-offset-3">
	<h1>탑승내역</h1>
	</br>
</br>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h4>최근이용한 택시</h4></div>

  <!-- Table -->
  <table class="table  table-hover tableheight">
	 <thead>
    	<tr>
    	 <td>방번호</td>
     	 <td>날짜</td>
     	 <td>시간</td>
     	 <td>출발</td>
     	 <td>도착</td>
   		</tr>
 	 </thead>
	 <tbody>
	 	<?php
		require_once './php/db.php';
		
		$stu_id= $_SESSION['user_id'];
		
		$db = new DBC;
		$db->DBI();
		
		
		$db->query = "SELECT * FROM post WHERE stu_id='".$_SESSION['user_id']."' order by date desc";
		$db->DBQ();
		
  	while($data = $db->result->fetch_assoc())
	{
		?>
		<div >
    	<tr class="mypage_hover" style="cursor:hand;" onclick="location.href='./Room.html.php?<?php echo $data['post_id']?>'">
      	 <td><?php echo $data['post_id']?></td>
      	 <td><?php echo $data['date']?></td>
     	 <td><?php echo $data['time']?></td>
     	 <td><?php echo $data['start']?></td>
     	 <td><?php echo $data['arrive']?></td>
   		</tr>
   		</div>
   		<?php
	}
	?>
    	  	</tbody>
  </table>
</div>
</div>

<div class=" col-xs-12  col-md-6 col-md-offset-3">
<ul class="pagination">
  <li class="disabled"><a href="#">«</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">»</a></li>
</ul>

</div>

</body>
</html>

