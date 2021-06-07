<?php
ob_start();
session_start();
define("SITURL",'http://localhost:63342/aznews-master/');
define("servername","localhost");
define("username","root");
define("password","");
define("dbname","rqaia");
$conn = mysqli_connect("localhost","root","","news");
//if ($conn){
//
//}else{
//    mysqli_connect_error();
//}
?>


