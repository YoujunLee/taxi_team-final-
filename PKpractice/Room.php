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


    <p>시간(ex 6월 20일 11시~13시)</p>

    <p>장소(ex 한동대 택시승강장->포항KTX역)</p>

  </div>
  
  <div class="wrapper2">

<?php
require_once './db.php';

$db = new DBC;
$db->DBI();


$db->query = "select * from comment";
$db->DBQ();


while($data = $db->result->fetch_row())
echo $data[0]."<br>";
$db->DBO();

	

?>

  </div>
  <div class="wrapper3">
  
  <form action="Room.php" method="post">
  <input class="col-xs-15 col-md-10" type="text" name="댓글" id="content">
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
    <tr class="row">
      <th class="col-xs-6 col-md-4">1</th>
      <th class="col-xs-6 col-md-4">이유준</th>
      <th class="col-xs-6 col-md-4">010-4409-2345</th>
    </tr>
     <tr class="row">
      <th class="col-xs-6 col-md-4">2</th>
      <th class="col-xs-6 col-md-4">김평강</th>
      <th class="col-xs-6 col-md-4">010-4349-2345</th>
    </tr>
   <tr class="row">
      <th class="col-xs-6 col-md-4">3</th>
      <th class="col-xs-6 col-md-4">양민규</th>
      <th class="col-xs-6 col-md-4">010-4509-2345</th>
    </tr>
     <tr class="row">
      <th class="col-xs-6 col-md-4">4</th>
      <th class="col-xs-6 col-md-4">정마리아</th>
      <th class="col-xs-6 col-md-4">010-4405-2345</th>
    </tr>
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

