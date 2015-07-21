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

<section>
	<div class="wrapper col-xs-12  col-md-4 col-md-offset-4">
	
	<?php 
  	    $post_id=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.
		
		require_once './php/db.php';

		$db = new DBC;
		$db->DBI();
		$db->query = "SELECT date, time, start, arrive FROM post WHERE post_id='".$post_id."'";
		$db->DBQ();
		
		$data=$db->result->fetch_row();
		echo "<b>".$data[0]." ".$data[1]."<br>".$data[2]." → ".$data[3]."</b>";
		
		$db->DBO();
	?>
	</div>
</section>

<section>
    <div class="wrapper2 col-xs-12  col-md-4 col-md-offset-4 " id="display" name="remotediv">
    	<table class="table1">
	<tbody>
	<?php
		require_once './php/db.php';
		
		$db = new DBC;
		$db->DBI();
		$db->query = "SELECT * FROM comment WHERE post_id='".$post_id."' ORDER BY time desc ";  //방 별로 다른 commet 출력. 
		$db->DBQ();
		
		$db2 = new DBC;
		$db2->DBI();
		while($data = $db->result->fetch_assoc())
		{   
			$db2->query= "SELECT studentid FROM student_info WHERE studentid= '".$data['stu_id']."'";
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
  
  	<div >
   	<?php
 	 	$post_id2=getenv("QUERY_STRING");
  		echo"<form action=./php/comment_db.php?$post_id2  method=post>";
  	?>
  	
  		<input class="col-xs-9 col-md-3 col-md-offset-4" type="text" placeholder="댓글을 입력하시오(최대 100자)" name="댓글" autofocus id="content">
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
      					<th class="col-xs-4 col-md-4">Student id</th>
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
					$db->query = "SELECT * FROM room_user WHERE post_id='".$post_id."'";
					$db->DBQ();
					$i = 1;
  	
  					while($data = $db->result->fetch_assoc())
					{if($_SESSION['name']== $data['name']){$check=false;}
				?>
    
    			<tr class="row">
      				<th class="col-xs-2 col-md-2"><?php echo $i?></th>
      				<th class="col-xs-4 col-md-4"><?php echo $data['stu_id']?></th>
      				<th class="col-xs-6 col-md-6"><?php echo $data['cellphone']?></th>
    			</tr>
    			<?php $i=$i+1; ?>
			    <?php
   					}
	 				if($check){
						echo "<script>history.go(-2);</script>"; exit;}
					
				?>
	
   				</tbody>
   
   				<!-- 여기까지 바꾼코드 -->
			</table>
		
		<?php
			$db2 = new DBC;
			$db2->DBI();
			$db2->query = "SELECT date, time FROM room_user WHERE post_id='".$post_id."'";
			$db2->DBQ();
			$data=$db2->result->fetch_row();
			
			date_default_timezone_set("Asia/Seoul");
    		$current_time = date("Y-m-d H:i:s");
			/*30분 구하는 코드*/
			$result=strtotime($current_time)-strtotime($data[0]." ".$data[1]);
									
			if($result<-1800)
				echo "<a href='./php/delete.php?".$post_id2."' class="."'btn btn-danger'"." > 탑승취소</a>";
			else
				echo "<a href='#' class="."'btn btn-danger'"." > 취소불가</a>";
			
			$db->DBO();
			$db2->DBO();
		?>
		<div class="div2">
			
			    <span>Tip: 출발시간 30분전에는 취소가 불가능합니다.</span>
		</div>
		</div>
		
	</section>
</body>
</html>