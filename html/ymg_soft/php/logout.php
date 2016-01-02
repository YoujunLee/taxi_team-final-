<!DOCTYPE html>

<html>
   <head>
       <meta charset="utf-8">
          <title>로그아웃</title>
          <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
          <link rel="stylesheet" type="text/css" href="../css/box.css">
   </head>
   <body>
<?php
session_start();
session_unset('user_id');
session_unset('user_pw');


echo "<script>location.replace('../index.php');</script>";
   exit;
?>
</body>
</html>