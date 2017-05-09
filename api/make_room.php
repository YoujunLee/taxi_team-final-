<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
require_once '../php/config.php';

$db = new DBC; //db object생성
$db->DBI();//db 들어가기
$db->query = "SELECT post_id FROM post ORDER BY post_id desc LIMIT 1";
$db->DBQ();
$num = $db->result->num_rows;
$data = $db->result->fetch_row();

if($num==1)
{	$post_id = $data[0]+1;
}
else
{	$post_id=1;	
}
$db->DBO();

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$username=$request->start;
echo json_encode("Username is ".$username);

$stu_id=21101002;
$room_start=$request->start;
$room_arrive=$request->arrive;
$room_date=$request->date;
$room_time=$request->time;
$room_population=$request->population;

/*방 만들기*/
$db2 = new DBC; //db object생성
$db2->DBI();//db 들어가기
$db2->query = "insert into post values ('".$post_id ."','".$stu_id."','".$room_start."', '".$room_arrive."','".$room_date."','".$room_time."','".$room_population."', '1')";
$db2->DBQ();
$db2->DBO();

/*방 참여하기*/
?>