<?php
session_start();
if(!isset($_SESSION["username"])){
echo '<META http-equiv="refresh" content="0,url=login.php">';
header("Location: login.php");
exit(); }
?>