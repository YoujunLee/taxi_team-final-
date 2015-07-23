<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	$hostname=$_SERVER["HTTP_REFERER"];
	$post_id=getenv("QUERY_STRING");
	
	echo "<script>
		   var result=confirm('정말 나가시겠습니까?');
		   if(result==true){
		  location.replace('./car_delete2.php?".$post_id."');
		   exit;
		   }else{
		   	history.go(-1);	 
		   		exit;
		   	}
		   </script>";
		   	
	
?>
</body>
</html>
