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
//로그아웃을 담당하는 php로서 모든 세션 삭제후 처음 로그인 화면으로 돌아감
session_start();
session_unset('user_id');
session_unset('user_pw');
session_unset('name');
session_unset('cellphone');

echo "<script>location.replace('../index.php');</script>";
   exit;
?>
</body>
</html>