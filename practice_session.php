<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 </head>
		 <body>
		 
<?php
function bytexor($a,$b)
{
        $c="";
        for($i=0;$i<16;$i++)$c.=$a{$i}^$b{$i};
        return $c;
}


function decrypt_md5($msg,$key)
{
        $string="";
        $buffer="";
        $key2="";

        while($msg)
        {
                $key2=pack("H*",md5($key.$key2.$buffer));
                $buffer=bytexor(substr($msg,0,16),$key2);
                $string.=$buffer;
                $msg=substr($msg,16);
        }
        return($string);
}

function encrypt_md5($msg,$key)
{
        $string="";
        $buffer="";
        $key2="";

        while($msg)
        {
                $key2=pack("H*",md5($key.$key2.$buffer));
                $buffer=substr($msg,0,16);
                $string.=bytexor($buffer,$key2);
                $msg=substr($msg,16);
        }
        return($string);
}

// 사용 예
$message = "다양한 원본 메시지 東西南北 ABC abc 123 ※ ↔ ";
$key = "아..이정도면 매우 복잡한 키--;";

$encrypted = encrypt_md5($message, $key);
$decrypted = decrypt_md5($encrypted, $key);

echo "Encrypted = $encrypted";
echo " <HR>";
echo "Decrypted = $decrypted";
?> 
		 </body>
		 </html>