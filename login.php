<?php

$re = mysqli_connect("localhost","root","","messenger");

if($re){
	echo mysqli_connect_error();
}


if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	mysqli_query($re , "insert into user (email,pass) values (' ".$email."','".$pass."' )");
	
}

mysql_close($re);

?>