<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	$hostname=$_SERVER["HTTP_REFERER"];
	
	$post_id = $_GET['post_id'];
	echo "<script>
		   var result=confirm('탑승하시겠습니까?');
		   if(result==true){
		  location.replace('./탑승하기.php?post_id=".$post_id."');
		   exit;
		   }else{
		   			
		   		history.go(-1);
		   		exit
		   	}
		   </script>";
		   	
	
?>
</body>
</html>
