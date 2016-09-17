<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php


$post_id = $_GET['post_id'];
echo "<script>
		   var result=confirm('탑승하시겠습니까? 출발시간 10분전에는 취소 불가!');
		   if(result==true){
		  location.replace('./invite4.php?post_id=".$post_id."');
		   exit;
		   }else{
		   			
		   		history.go(-2);
		   		exit
		   	}
		   </script>";


?>
</body>
</html>
