<?php
include "./php/session_out.php";
out();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>i-Taxi</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/index2.css">
</head>
<body class="center">
	<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
		<tr class="row">
  		   <td class = "logo" >
      	       <a  href="./조회창.html.php">
      	       	  <img src="./img/logo.png">
      	       </a>
    	   </td>
     	   <td class = "logout">
      		   <form action='./php/logout.php'>
		     	  <input class="btn1" type="submit" value="LogOut">
	     	   </form>
           </td>
  		</tr>
	</table>

<section>
	<div class="wrapper col-xs-12  col-md-4 col-md-offset-4">
	
	<?php 
  	    $post_id=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.
		
		require_once './php/db.php';

		$db = new DBC;
		$db->DBI();
		$db->query = "SELECT date, time, start, arrive, car, price FROM car_post WHERE post_id='".$post_id."'";
		$db->DBQ();
		
		$data=$db->result->fetch_row();
		echo "<b>".$data[0]." ".$data[1]."<br>".$data[2]." → ".$data[3]."<br>차종: ".$data[4]." / 가격: ".$data[5]."원</b>";
		
		$db->DBO();
		
	?>
	</div>
</section>

<section>
    <div class="wrapper2 col-xs-12  col-md-4 col-md-offset-4 ">
	<table class="table1">
	<tbody>
	<?php
		require_once './php/db.php';
		
		$db = new DBC;
		$db->DBI();
		$db->query = "SELECT * FROM car_comment WHERE post_id='".$post_id."'";  //방 별로 다른 commet 출력. 
		$db->DBQ();
		
		$db2 = new DBC;
		$db2->DBI();
		while($data = $db->result->fetch_assoc())
		{   
			$db2->query= "SELECT name FROM student_info WHERE studentid= '".$data['stu_id']."'";
		    $db2->DBQ();   
			$data2 = $db2->result->fetch_row() ;
			$comment_name = $data2[0];
			echo "<tr>";
			echo "<td>".$comment_name.":&nbsp;".$data['content']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<br>"."<p>".substr($data['time'],0,16)."<p>"."</td>";
			echo "</tr>";
		}		
		$db->DBO();
		$db2->DBO();
	?>
	</tbody>
	</table>
	</div>
  </section>
  
  <section>
  
  	<div class="wrapper5">
   	<?php
 	 	$post_id2=getenv("QUERY_STRING");
  		echo"<form action=./php/car_comment_db.php?$post_id2  method=post>";
  	?>
  	
  		<input class="col-xs-9 col-md-3 col-md-offset-4" type="text" placeholder="댓글을 입력하시오(최대 100자)" name="댓글" id="content" autofocus>
  		<input class="col-xs-3 col-md-1 btn4" type="submit" value="댓글달기">
  	</form>
  	</div>
	</section>
	
	<section>
		<div class="wrapper4 col-xs-12  col-md-4 col-md-offset-4">
			<table class="table table-striped table-hover ">
  				<thead class="co">
    				<tr class="row">
      					<th class="col-xs-2 col-md-2">No.</th>
      					<th class="col-xs-4 col-md-4">Name</th>
      					<th class="col-xs-6 col-md-6">Phone</th>
    				</tr>
  				</thead>
  
  				<!-- 바꾼 코드. -->
  				<tbody>
			  	<?php
					require_once './php/db.php';
					$check = true;
					$db = new DBC;
					$db->DBI();
					$db->query = "SELECT * FROM car_user WHERE post_id='".$post_id."'";
					$db->DBQ();
					$i = 1;
  	
  					while($data = $db->result->fetch_assoc())
					{if($_SESSION['name']== $data['name']){$check=false;}
				?>
    
    			<tr class="row">
      				<th class="col-xs-2 col-md-2"><?php echo $i?></th>
      				<th class="col-xs-4 col-md-4"><?php echo $data['name']?></th>
      				<th class="col-xs-6 col-md-6"><?php echo $data['cellphone']?></th>
    			</tr>
    			<?php $i=$i+1; ?>
			    <?php
   					}
	 				if($check){
						echo "<script>history.go(-2);</script>"; exit;}
				?>
	
   				</tbody>
   			</table>
		<?php
			$db2 = new DBC;
			$db2->DBI();
			$db2->query = "SELECT date, time FROM room_user WHERE post_id='".$post_id."'";
			$db2->DBQ();
			$data=$db2->result->fetch_row();
			
			date_default_timezone_set("Asia/Seoul");
    		$current_time = date("Y-m-d h:i:s");
			
			if($current_time<$data[0]." ".$data[1])
				echo "<a href='./php/delete.php?".$post_id2."' class="."'btn btn-danger'"." > 탑승취소</a>";
			
			$db->DBO();
			$db2->DBO();
		?>
		</div>
	</section>
</body>
</html>