<?php 

session_start();
ob_start();
//header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Europe/Istanbul');
$bugun = date("H:i:s d.m.Y"); 
$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

require($_SERVER['DOCUMENT_ROOT']."/dbFolder/connect-db.php"); 
require($_SERVER['DOCUMENT_ROOT']."/dbFolder/connect-function.php"); 


?>