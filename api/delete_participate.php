<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json;charset=UTF-8");
    require_once '../php/config.php';
	
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    $stu_id=$request->stu_id;
    $post_id=$request->post_id;

	/*탑승 취소시 room_user db에서 인원 삭제*/
	$db = new DBC;
	$db->DBI();//db 들어가기
	$db->query = "DELETE FROM room_user WHERE post_id='".$post_id."' AND stu_id='".$stu_id."'";
	$db->DBQ();
	$db->DBO();
	
	/* 해당 Room에 몇명 남아 있는지 count*/
	$db2 = new DBC;
	$db2->DBI();
	$db2->query= "SELECT post_id FROM room_user WHERE post_id='".$post_id."'";
	$db2->DBQ();	
	$num1 = $db2->result->num_rows;
	$db2->DBO();
	
	/* 탑승인원 0명 일시 방 delete*/	
	if($num1==0)
	{
		$db3 = new DBC;
		$db3->DBI();//db 들어가기
		$db3->query = "DELETE FROM post WHERE post_id='".$post_id."'";
		$db3->DBQ();
		$db3->query = "DELETE FROM comment WHERE post_id='".$post_id."'";
		$db3->DBQ();
		$db3->DBO();
		
	//	echo"<script>history.go(-2) ;</script>";
	}else{
//	echo"<script>history.go(-2);</script>";
}
?>