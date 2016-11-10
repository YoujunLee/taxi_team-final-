<?php


header('content-type: text/html; charset=utf-8');



$db = new mysqli('localhost', 'root', 'taxi', 'youjun');
$db->query('SET NAMES UTF8');

if(mysqli_connect_errno())
{
    header("Content-Type: text/html; charset=UTF-8");
    echo "데이터 베이스 연동에 실패했습니다.";
    exit;
}




session_start();

$id = $_REQUEST[u_id];

$sql = "insert into ps3reg(regID) select '$id' from dual where not exists(select * from ps3reg where regID='$id')";
$result = $db->query($sql);




if(!$result)

    die("mysql query error");



?>