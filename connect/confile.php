<?php 
ob_start();
session_start();
$host='localhost';
$user='root';
$pass='';
$database='lemigo_hotel';
$link= mysqli_connect($host,$user,$pass,$database)or die('could not connect to database check your configuration');
if(mysqli_select_db($link,$database)){}else{die('could not connect to database check your configuration');}
?>