<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
require_once '../php/config.php';
date_default_timezone_set("Asia/Seoul");
$current_time2 = date("Y-m-d");
$current_time3 = date("H:i:s");

$post_id=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.

$db= new DBC;
$db->DBI();
$db->query = "SELECT date, time, start, arrive FROM post WHERE post_id='".$post_id."'";
$db->DBQ();
$num = $db->result->num_rows;

$result=array();
while($data = $db->result->fetch_array())
{
    $data_array['start']=$data['start'];
    $data_array['arrive']=$data['arrive'];
    $data_array['date']=$data['date'];
    $data_array['time']=$data['time'];
    array_push($result, $data_array);
}
echo json_encode ($result, JSON_UNESCAPED_UNICODE);
?>