<?php
require_once './config.php';
$db4 = new DBC; //db object생성
$db4->DBI();//db 들어가기
$db4->query = "SELECT post_id FROM room_user WHERE post_id='5942'";
$db4->DBQ();
$count_me1 = $db4->result->num_rows;

$db4->query = "SELECT population FROM post  WHERE post_id='5942'";
$db4->DBQ();
$data2 = $db4->result->fetch_row();
$population = $data2[0];

echo $count_me1;
echo $population;

 ?>