
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
require_once '../php/config.php';
date_default_timezone_set("Asia/Seoul");
$current_time2 = date("Y-m-d");
$current_time3 = date("H:i:s");

$user_id=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.

$db3 = new DBC;
$db3->DBI();
$db3->query= "SELECT post_id FROM room_user WHERE stu_id='".$user_id."' ORDER BY date desc,time desc";
$db3->DBQ();
				
$db = new DBC;
$db->DBI();

$result=array();

while($data= $db3->result->fetch_row())
{
	$db->query = "SELECT start, arrive, date, time, population, post_id FROM post WHERE post_id='".$data[0]."' ";
	$db->DBQ();

    while($data2 = $db->result->fetch_array())
    {
        $data2_array['post_id']=$data2['post_id'];
        $data2_array['start']=$data2['start'];
        $data2_array['arrive']=$data2['arrive'];
        $data2_array['date']=$data2['date'];
        $data2_array['time']=$data2['time'];
        $data2_array['population']=$data2['population'];
        array_push($result, $data2_array);
    }
}

echo json_encode ($result, JSON_UNESCAPED_UNICODE);
?>