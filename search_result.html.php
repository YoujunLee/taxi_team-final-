

<html>
<head>
<meta charset="utf-8">
<?php
$start = $_POST['search_start'];
$arrive = $_POST['search_arrive'];
$date = $_POST['search_date'];
$s_time= $_POST['start_time'];
$e_time = $_POST['end_time'];


require_once './php/config.php';

$db = new DBC;
$db->DBI();

$db->query = "select start, arrive, date, time,population,post_id from post where start='".$start."' and arrive='".$arrive."'and date='".$date."'and time>='".$s_time."'and time<='".$e_time."'";
$db->DBQ();
$num = $db->result->num_rows;
if($num<=0)
{
	echo "<script>alert('조회가능한 방이 없습니다.');history.back();</script>";
   exit;
}
?>

<?php
/*while($data = $db->result->fetch_row())
{
	echo $data[0];
	echo $data[1];
	echo $data[2];
	echo $data[3]."<br>";
}

$db->DBO();*/
?>

<title>Taxi</title>
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
      <th class="col-xs-6 col-md-4">출발시간</th>
      <th class="col-xs-6 col-md-4">탑승인원</th>
      <th class="col-xs-4 col-md-3">State</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $number=1;
  $user_number=1;
  while($data = $db->result->fetch_row())
{
    echo "<tr class="."'row'".">";
    echo " <th class="."'col-xs-2 col-md-1'".">".$number++."</th>";
    echo " <th class="."'col-xs-6 col-md-4'".">".substr($data[3],0,2)." : ".substr($data[3],3,2)."</th>";
    echo " <th class="."'col-xs-6 col-md-4'".">".$user_number." / ".$data[4]."</th>";
	if($user_number==$data[4])
    echo " <th class="."'col-xs-4 col-md-3'"."><a href='#' class='btn btn-danger'>FULL</a></th>";
    else 
    echo " <th class="."'col-xs-4 col-md-3'"."><a href='./Room1.php' class='btn btn-info'>탑승하기</a></th>";
    
    echo " </tr>";
}
$db->DBO();
    ?>
    

  </tbody>
</table>
<div class="row">
<div class="col-xs-6 col-md-4"></div>
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
<div class="col-xs-6 col-md-4"></div>

</div>


</body>
</html>

