<?php
include "./php/session_out.php";
out();
?>

<!DOCTYPE html>
<html>
<head>
	<title>i-Taxi</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/search.css">  
</head>
<body class = "center">
</br>
	<div class="progress progress-striped active">
  <div class="progress-bar" style="width: 99%"></div>
</div>
</br></br></br>
	<h1>탑승내역</h1>
	</br>
</br>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h4>최근이용한 택시</h4></div>

  <!-- Table -->
  <table class="table table-striped table-hover tableheight">
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
		
		
		$db->query = "SELECT * FROM room_user WHERE stu_id='".$_SESSION['user_id']."'";
		$db->DBQ();
		
  	while($data = $db->result->fetch_assoc())
	{
		?>
    	<tr  style="cursor:hand;" onclick="location.href='./Room.html.php?<?php echo $data['post_id']?>'">
      	 <td><?php echo $data['post_id']?></td>
      	 <td><?php echo $data['date']?></td>
     	 <td><?php echo $data['time']?></td>
     	 <td><?php echo $data['start']?></td>
     	 <td><?php echo $data['arrive']?></td>
   		</tr>
   		<?php
	}
	?>
    	  	</tbody>
  </table>
</div>

<ul class="pagination">
  <li class="disabled"><a href="#">«</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">»</a></li>
</ul>


</body>
</html>

