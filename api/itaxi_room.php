
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
require_once '../php/config.php';

$db= new DBC;
$db->DBI();
$db->query = "select start, arrive, date, time,population,post_id from post";
$db->DBQ();
$num = $db->result->num_rows;

$result=array();
while($data = $db->result->fetch_array())
{
    $data_array['post_id']=$data['post_id'];
    $data_array['start']=$data['start'];
    $data_array['arrive']=$data['arrive'];
    $data_array['date']=$data['date'];
    $data_array['time']=$data['time'];
    $data_array['population']=$data['population'];
    array_push($result, $data_array);
}

echo json_encode ($result, JSON_UNESCAPED_UNICODE);
?>