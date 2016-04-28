<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once './php/db2.php';
    ?>
</head>
<body>
<?php
$db= new DBC;
$db->DBI();
$db->query = "SELECT idx FROM ez_content";
$db->DBQ();

while($data = $db->result->fetch_row())
{
    echo $data[0];
}
?>
</body>
</html>