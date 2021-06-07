<?php

$db_connection = mysqli_connect("localhost" , "root" , "" , "messenger");
$db = new mysqli("localhost" , "root" ,"","");

if(!$db_connection){
 echo mysqli_connect_error();
}

if(isset($_POST['login'])){
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   
   $email = mysqli_real_escape_string($db_connection , $email);
   $pass = mysqli_real_escape_string($db_connection , $pass);
   
   
   $stamt = $db->prepare("select * from user where email=? and pass = ? ");
   $stamt->bind_param("ss", $email , $pass);
   $stamt->execute();
   $result = $stamt->get_result();
   
       if($stamt-> affected_rows >0){
	       echo"login correct" . "<br>";
	       
	       while($row = mysql_fetch_assoc($result)){
		       echo $row['email']."<br>";
	       }
	       
	       $result = mysql_query($db_connection , "select * from user where email = ".$email." and pass = ".$pass."");
	       

 if(mysqli_num_rows($result) > 0){
	 echo "login correct"."<br>";
	
      while($row = mysqli_fetch_assoc($result){
	 echo $row ['email']."<br>";
  }	 	
 } else{
      echo "go home";
	
 }
  mysqli_close($db_connection);

}
}

?>


