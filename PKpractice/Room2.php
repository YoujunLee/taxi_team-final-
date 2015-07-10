<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Taxi</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/index2.css">
</head>
<body class="center">



	<div class="wrapper">
	
	<?php 
  	    $post_id=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.
		
		require_once './php/db.php';

		$db = new DBC;
		$db->DBI();
		$db->query = "SELECT date, time, start, arrive FROM post WHERE post_id='".$post_id."'";
		$db->DBQ();
		
		$data=$db->result->fetch_row();
		echo $data[0]." ".$data[1]."<br>".$data[2]." → ".$data[3];
		
		$db->DBO();
	?>
	
	</div>
  
    <div class="wrapper2">

	<?php
		require_once './php/db.php';
		
		$db = new DBC;
		$db->DBI();
		$db->query = "select * from comment";
		$db->DBQ();
		
		$db2 = new DBC;
		$db2->DBI();
		
		while($data = $db->result->fetch_assoc())
		{
			$db2->query= "SELECT name FROM student_info WHERE studentid= '".$data['stu_id']."'";
		    $db2->DBQ();   
			$data2 = $db2->result->fetch_row() ;
			$comment_name = $data2[0];
			echo $comment_name.":   &nbsp;".$data['content']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$data['time'],"<br>";
		}		
		$db->DBO();
		$db2->DBO();
	?>
	</div>
  
  	<div class="wrapper3">
  	
  	<?php
  	$post_id2=getenv("QUERY_STRING");
  	echo"<form action=./php/comment_db.php?$post_id2  method=post>";
  	?>
  	
  	<input class="col-xs-15 col-md-10" type="text" placeholder="댓글을 입력하시오(최대 100자)" name="댓글" id="content">
  	<input class="col-xs-3 col-md-2" type="submit" value="의견쓰기">
	</form>
	</div>

<table class="table table-striped table-hover ">
  <thead class="co">
    <tr class="row">
      <th class="col-xs-6 col-md-4">No.</th>
      <th class="col-xs-6 col-md-4">Name</th>
      <th class="col-xs-6 col-md-4">Phone</th>
    </tr>
  </thead>
  <tbody>
  	<?php
		require_once './php/db.php';
		
		$db = new DBC;
		$db->DBI();
		
		
		$db->query = "select * from room_user";
		$db->DBQ();
		$i = 1;
  	while($data = $db->result->fetch_assoc())
	{
		?>
    <tr class="row">
      <th class="col-xs-6 col-md-4"><?php echo $i?></th>
      <th class="col-xs-6 col-md-4"><?php echo $data['name']?></th>
      <th class="col-xs-6 col-md-4"><?php echo $data['cellphone']?></th>
    </tr>
    <?php
    $i=$i+1;
	?>
	
    <?php
   }
	?>
	
   </tbody>
</table>
<div class="row">
<div class="col-xs-6 col-md-4"></div>
<div class="col-xs-6 col-md-4">
 <a href="#" class="btn btn-danger">탑승취소</a>
</div>

<div class="col-xs-6 col-md-4"></div>

</div>


</body>
</html>

