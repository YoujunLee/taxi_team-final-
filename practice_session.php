<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 </head>
		 <body>
		 
<?php
 
 $to = "gt136@naver.com";
 $subject = "Test";
 $message = "hello";
 $from = "gt136@naver.com";
 $header = "From:".$from."";
 $result = mail($to, $subject, $message,$header);
 if($result)
 echo "finish";
 else	
 echo "아놔";
 
?> 
		 </body>
		 </html>