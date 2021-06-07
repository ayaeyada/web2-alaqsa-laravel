<?php

$db = mysqli_connect("localhost" , "root" , "" , "messenger");
if(isset($_POST['login'])){
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   
$result = mysqli_query($db , "select * from user where email='".$email."' and pass='".$pass."'");


}

?>