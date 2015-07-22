<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 </head>
		 <body>
		 
<?php
 
 $password = "1234";
 $hash = password_hash($password, PASSWORD_DEFAULT);
 
 $data = $hash;
 $password = "1234";
 echo  $hash.'<br>';
 
  if (password_verify($password, $data)) {
  	echo "됬나"; 
                    // 비밀번호가 맞음 
                } else { 
         echo  "안됬나";
		            // 비밀번호가 틀림 
                } 
 
 
?> 
		 </body>
		 </html>