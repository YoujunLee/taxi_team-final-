<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?php
include "./session_out.php";
out();
 $_SESSION['search_start'] = $_POST['search_start'];
 $_SESSION['search_arrive'] = $_POST['search_arrive'];
 $_SESSION['search_date'] = $_POST['search_date'];
 $_SESSION['start_time'] = $_POST['start_time'];
 $_SESSION['end_time'] = $_POST['end_time'];

echo "<script>location.replace('../search_result.html.php');</script>";
?>
</body>
</html>