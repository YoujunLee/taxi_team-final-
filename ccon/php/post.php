<?php
/**
 * Created by PhpStorm.
 * User: injxy
 * Date: 2016-04-29
 * Time: 오전 12:20
 */
require_once('./JSON.php');
require_once './db2.php';

$db= new DBC;
$db->DBI();
$db->query = "SELECT idx FROM ez_content";
$db->DBQ();

$json = new Services_JSON();
while($data = $db->result->fetch_row())
{
    $output = $json->encode($data);
}
echo $output;

?>