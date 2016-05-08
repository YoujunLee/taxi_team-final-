<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
include "./session_out.php";
out();
 $_SESSION['search_date'] = $_POST['search_date'];
echo "<script>location.replace('../search_result.html.php');</script>";
?>
</body>
</html>