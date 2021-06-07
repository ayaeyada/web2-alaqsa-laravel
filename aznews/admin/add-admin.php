<?php
ob_start();
session_start();
define("SITURL",'http://localhost:63342/aznews/');
define("servername","localhost");
define("username","root");
define("password","");
define("dbname","news");
$conn = mysqli_connect("localhost","root","","news");
?>


    <html>
<head>
    <title>News Website - <?php //echo $page_title;?></title>

    <link rel="stylesheet" href="../css/admin.css">
</head>
<!--
<body onload="setTimeout('startCountDown()',2000);" onmousemove="resetTimer();">

<form name="counter"><input type="text" size="5" name="timer" disabled="disabled" /></form>
-->
<div class="menu text-center">
    <div class="wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="manage-admin.php">Admin</a></li>
            <li><a href="manage-category.php">Category</a></li>
            <li><a href="manage-food.php">Food</a></li>
            <li><a href="manage-order.php">Order</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="fullname" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>

<?php
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="INSERT into admin SET 
fullname='$fullname',
username='$username',
password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res){
       $_SESSION['admin']="<span style='color: green'> admin is added </span>";
header("location:".SITURL."admin/manage-admin.php");

    }
    else   {
        $_SESSION['admin']="<span style='color: red'> admin is not added </span>";
        header("location:".SITURL.'admin/manage-admin.php');
    }
}
include "partials/footer.php";