<!doctype html>
<html>
<head>
	<meta charset=utf-8>
</head>
<body>
<?php
	if(!isset($_POST['agree'])||!isset($_POST['agree2']))
		echo "<script>alert('모두 동의하셔야 다음 단계로 넘어갑니다.'); history.back();</script>";
	
	$agree1=$_POST['agree'];
	$agree2=$_POST['agree'];
	
	if($agree1!=null || $agree2!=null)
		echo "<script>location.replace('../SignUp.html.php');</script>";
?>
</body>
</html>