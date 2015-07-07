<?
function err_msg($msg,$bool="1")
{
if ($bool)
{
echo "
<script>
window.alert('$msg');
history.go(-1);
</script>
";
exit;
}
}

function msg($msg) {
echo("
        <script>
	    window.alert('$msg')
	    </script>
	    ");
 }


function err_close($msg)
{
echo "
<script>
window.alert('$msg');
self.close();
</script>
";
exit;
}


function err_msg2($msg,$to,$bool="1")
{
if ($bool)
{
echo "
<script>
window.alert('$msg');
window.open('$to','_self');
</script>
";
exit;
}
}

// 요청하는 페이지로 이동
function redirect($re_url)
{
 echo "<meta http-equiv='Refresh' content='0; URL=$re_url'>";
 exit;
}

// MYSQL 연결
function my_connect($host,$id,$pass,$db)
{
	$connect=mysql_connect($host,$id,$pass);
	mysql_select_db($db);
	return $connect;
}
?>