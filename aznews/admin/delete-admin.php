<?php
include '../config/constants.php';
$id= $_GET['id'];
$sql="delete from admin where id='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    $_SESSION['admin']="<span style='color: green'> admin is deleted </span>";
    header("location:".SITURL."admin/manage-admin.php");
}else {
    $_SESSION['admin']="<span style='color: red'> admin is not deleted </span>";

    header("location:".SITURL."admin/manage-admin.php");
}



