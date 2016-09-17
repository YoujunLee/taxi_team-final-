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
$post_id=getenv("QUERY_STRING");

$db = new DBC;
$db->DBI();


$studentid = str_replace("'", "/'", $_POST['logid']);  //str 문을 통하여 보안강화
$pass = str_replace("'", "/'", $_POST['logpass']);

$db->query = "select studentid, name, cellphone, password from student_info where studentid='".$studentid."'";
$db->DBQ();
$num = $db->result->num_rows;
if($num!=1)
{
    echo "<script>alert('회원가입이 안돼있습니다. 가입 후 이용해주시기바랍니다.');location.replace('../invite.php?".$post_id."');</script>";
    $db->DBO();
    exit;
}

$data = $db->result->fetch_row();

if (password_verify($pass, $data[3])) {
    ;  // 비밀번호가 맞음
}
else {
    echo "<script>alert('학번 또는 비밀번호가 맞지 않습니다.');location.replace('../invite.php?".$post_id."');</script>";
    $db->DBO();
    exit;
    // 비밀번호가 틀림
}



$db->DBO();
if($num==1)
{
    session_start();
    //학생 학번과 비번과 이름 전화번호를 세션으로 지정하여서 아이택시 기능을 이용할 때 다시 db데이터를 빼서 사용하기보다 주로 세션정보를 사용, 그리고 세션만료(대략 이용안하고 24분후에)시에 자동 로그아웃
    $_SESSION['user_id'] = $studentid;
    $_SESSION['user_pw'] = $data[3];
    $_SESSION['name'] = $data[1];
    $_SESSION['cellphone'] = $data[2];

    echo "<script>location.replace('./invite3.php?post_id=".$post_id."');</script>";
    exit;
}
else if(($studentid==null))
{
    echo "<script>alert('학번을 입력해주세요.');location.replace('../invite.php?".$post_id."');</script>";
    exit;
}
else if(($pass==null))
{
    echo "<script>alert('비밀번호를 입력해주세요.');location.replace('../invite.php?".$post_id."');</script>";
    exit;
}
else if(($studentid!="" || $pass!=""))
{
    echo "<script>alert('학번과 비밀번호가 맞지 않습니다.');location.replace('../invite.php?".$post_id."');</script>";
    exit;
}
?>
</body>
</html>