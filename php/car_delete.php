<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	$hostname=$_SERVER["HTTP_REFERER"];
	$post_id=getenv("QUERY_STRING");
	
	echo "<script>
		   var result=confirm('탑승하시겠습니까?');
		   if(result==true){
		  location.replace('./탑승하기2.php?".$post_id."');
		   exit;
		   }else{
		 
		   		exit;
		   	}
		   </script>";
		   	
	
?>
</body>
</html>
