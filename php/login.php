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
require_once './config.php';

$db = new DBC;
$db->DBI();


$studentid = str_replace("'", "/'", $_POST['logid']);  //str 문을 통하여 보안강화
$pass = str_replace("'", "/'", $_POST['logpass']);

$db->query = "select studentid, name, cellphone, password from student_info where studentid='".$studentid."'";
$db->DBQ();
if(!$db->result)
{
   echo "<script>alert('학번과 비밀번호가 맞지 않습니다.');location.replace('../index.php');</script>";
   exit;
}
$num = $db->result->num_rows;
$data = $db->result->fetch_row();

if (password_verify($pass, $data[3])) {
  	;  // 비밀번호가 맞음 
                } 
else { 
        echo "<script>alert('학번과 비밀번호가 맞지 않습니다.');location.replace('../index.php');</script>";
   exit;
		            // 비밀번호가 틀림 
                } 
 


$db->DBO();
if($num==1)
{
	 session_start();
   $_SESSION['user_id'] = $studentid;
   $_SESSION['user_pw'] = $data[3];
   $_SESSION['name'] = $data[1]; 
   $_SESSION['cellphone'] = $data[2]; 
   
   echo "<script>location.replace('../조회창.html.php');</script>";
   exit;
} 
else if(($studentid==null))
{
   echo "<script>alert('학번을 입력해주세요.');location.replace('../index.php');</script>";
   exit;
}
else if(($pass==null))
{
   echo "<script>alert('비밀번호를 입력해주세요.');location.replace('../index.php');</script>";
   exit;
}
else if(($studentid!="" || $pass!=""))
{
   echo "<script>alert('학번과 비밀번호가 맞지 않습니다.');location.replace('../index.php');</script>";
   exit;
}
?>
</body>
</html>