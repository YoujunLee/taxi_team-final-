<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" >
</head>
<body>
데이터베이스~!
<?php
//mysql -hlocalhost -uroot -p111111;

//생활코딩 연습
/*mysql_connect('localhost','root','taxi');
mysql_select_db('youjun');
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");
$result = mysql_query("SELECT title,created FROM topic WHERE id = 1");
$row= mysql_fetch_array($result);
var_dump($row);*/

/*테이블생성
$connect = mysql_connect('localhost','root','taxi');
$mysql = mysql_select_db('youjun',$connect);
$query = "CREATE TABLE student_info(
no char(20),
name char(20),
id char(20),
password char(20)

);";
mysql_query($query,$connect);
mysql_close($connect);
*/

echo $name;

?>
</body>
</html>