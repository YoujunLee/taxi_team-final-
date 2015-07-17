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
	
		<table class=" navi col-xs-12  col-md-6 col-md-offset-3" >	
		
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
	
	<br><br><br><br><br><br>
	<div class=" col-xs-12  col-md-6 col-md-offset-3">
	<div class="panel panel-default">
  <!-- Default panel contents -->

  <!-- Table -->
  <table class="table  table-hover tableheight">
	 <thead>
    	<tr>
    	 
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
		$num = $db->result->num_rows;
		$page = 1; 
		$count = 0;
        if(isset($_GET["page"]))
        $page = $_GET["page"];
	    $page_number =  $page*10 -10;
		
  	while($data = $db->result->fetch_assoc())
	{
		       if($page_number==$count)
	 	    	if($page_number++<$page*10)
	 		{
		?>
		<div >
    	<tr class="mypage_hover" style="cursor:hand;" onclick="location.href='./Room.html.php?<?php echo $data['post_id']?>'">
      	
      	 <td><?php echo $data['date']?></td>
     	 <td><?php echo substr($data['time'],0,5)?></td>
     	 <td><?php echo $data['start']?></td>
     	 <td><?php echo $data['arrive']?></td>
   		</tr>
   		</div>
   		<?php
   		}
  			else
				break;
			$count++;
	}
			
	?>
    	  	</tbody>
  </table>
</div>
</div>

<div class="col-xs-12 col-md-6 col-md-offset-3">
	<ul class="pagination pagination-lg">
  		
	<?php
	$number;
	if($page>1)
	echo "<li><a href='./mypage-탑승내역.html.php'>«맨앞</a></li>";

	if($page>1)
  	echo "<li><a href='./mypage-탑승내역.html.php?page=".($page-1)."'><이전</a></li>";
	
	for($number=floor(($page/5))*5+1;$number<floor(($page/5))*5+6;$number++){
		if($number<=floor((($num-1)/10))+1){
	   		if($number!=$page)
				echo"<li><a href='./mypage-탑승내역.html.php?page=".($number)."'>".$number."</a></li>";
		else
			echo"<li class='active'><a href='./mypage-탑승내역.html.php?page=".($number)."'>".$number."</a></li>";
		}
	}
	
	if($page<floor((($num-1)/10))+1)
  	echo "<li><a href='./mypage-탑승내역.html.php?page=".($page+1)."'>앞으로></a></li>";
	
	if($page<floor((($num-1)/10)+1))
  	echo "<li><a href='./mypage-탑승내역.html.php?page=".floor(((($num-1)/10)+1))."'>맨뒤»</a></li>";
  	?>
 			
	</ul>
</div>

</body>
</html>

