<!DOCTYPE html>

<html>
   <head>
       <meta charset="utf-8">
          <title>로그인</title>
          <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
          <link rel="stylesheet" type="text/css" href="../css/box.css">
   </head>
   <body>
<?php
require_once './db.php';

$db = new DBC;
$db->DBI();


$studentid = str_replace("'", "/'", $_POST['userName']);  //str 문을 통하여 보안강화
$pass = str_replace("'", "/'", $_POST['password']);

$db->query = "select email, password from user where email='".$studentid."'";
$db->DBQ();
$num = $db->result->num_rows;
if($num!=1)
{
   echo "<script>alert('회원가입이 안돼있습니다. 가입 후 이용해주시기바랍니다.');location.replace('../login.html');</script>";
   $db->DBO();
   exit;
}

$data = $db->result->fetch_row();

if (password_verify($pass, $data[1])) {
  	;  // 비밀번호가 맞음 
                } 
else { 
        echo "<script>alert('이메일 또는 비밀번호가 맞지 않습니다.');location.replace('../login.html');</script>";
	$db->DBO();
   exit;
		            // 비밀번호가 틀림 
                } 
 


$db->DBO();
if($num==1)
{
   session_start();

   $_SESSION['user_id'] = $studentid;
   $_SESSION['user_pw'] = $pass;
  
   
   echo "<script>location.replace('../index.php');</script>";
   exit;
} 
else if(($studentid==null))
{
   echo "<script>alert('이메일을 입력해주세요.');location.replace('../login.html');</script>";
   exit;
}
else if(($pass==null))
{
   echo "<script>alert('비밀번호를 입력해주세요.');location.replace('../login.html');</script>";
   exit;
}
else if(($studentid!="" || $pass!=""))
{
   echo "<script>alert('이메일과 비밀번호가 맞지 않습니다.');location.replace('../login.html');</script>";
   exit;
}
?>
</body>
</html>