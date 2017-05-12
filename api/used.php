
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
require_once '../php/config.php';

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$user_id=$request->stu_id;
$post_id=$request->post_id;
$check=0;

$db3 = new DBC;
$db3->DBI();
$db3->query= "SELECT stu_id FROM room_user WHERE post_id='".$post_id."'";
$db3->DBQ();
				
while($data = $db3->result->fetch_assoc()){
    if($data['stu_id']==$user_id)
     $check=1;
}
echo json_encode($check);
?>