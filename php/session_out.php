<?php
function out(){
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw'])) {
 session_unset('user_id');
 session_unset('user_pw');
 session_unset('name');
 session_unset('cellphone');
echo "<script>location.replace('http://52.27.102.99/index.php');</script>";
}
}
?>