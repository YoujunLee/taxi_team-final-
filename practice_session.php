<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 </head>
		 <body>
		 <?php
		 echo "으악";
		 session_start();
		 echo session_save_path();
		 
		 ?>
		 <?= session_cache_expire(); ?>
		 <?phpini_set("session.cache_expire", 3600);  
         ini_set("session.gc_maxlifetime", 3600);?> 
		 <?= session_cache_expire(); ?>
		 </body>
		 </html>