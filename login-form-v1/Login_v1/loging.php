<?php

error_reporting(0);

$mysqli = new mysqli("localhost" , "root" , "" , "messenger");

if($mysqli -> connect_error){
	die ("connection error");
}

   $email = $_POST['email'];
   $pass = $_POST['pass'];
   
   $rawQuery = "SELECT * FROM 'user' where user.email = '{$email}' and user.pass = '{$pass}' ;";
   var_dump($query);
   $result = mysqli_query($mysqli , $query);
   $data = mysqli_fetch_all($result);
   
   var_dump($data);
    
?>