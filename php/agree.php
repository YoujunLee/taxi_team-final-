<!doctype html>
<html>
<head>
	<meta charset=utf-8>
</head>
<body>
<?php
//동의 두개 모두 했는지 체크 동의에 관한 데이터는 체크박스로서 post형식으로 넘어옴
	if(!isset($_POST['agree'])||!isset($_POST['agree2']))
		echo "<script>alert('모두 동의하셔야 다음 단계로 넘어갑니다.'); history.back();</script>";
	
	$agree1=$_POST['agree'];
	$agree2=$_POST['agree'];
	
	if($agree1!=null || $agree2!=null)
		echo "<script>location.replace('../SignUp.html.php');</script>";//동의 두개 모두 했을 시 ../SignUp.html.php로 넘어가서 회원가입 진행
?>
</body>
</html>