<?php
include "partials/menu.php";
if(isset($_GET['id'])){
$id=$_GET['id'];
$sql="select * from admin where id='$id'";
$res=mysqli_query($conn,$sql);
if($res->num_rows>0){
    $row=$res->fetch_assoc();
    $old_password=$row['password'];
//    echo $old_password;
}}
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>
        <?php
        if(isset($_SESSION['admin'])){
            echo $_SESSION['admin'];
            unset ($_SESSION['admin']);
        }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Current Password:</td>
                    <td>
                        <input type="password" name="current_password" placeholder="Current Password">
                    </td>
                </tr>

                <tr>
                    <td>New Password:</td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                </tr>

                <tr>
                    <td>Confirm Password:</td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>


<?php
if(isset($_POST['submit'])){
    $current_password=md5($_POST['current_password']);
    $new_password=$_POST['new_password'];
    $confirm_password=$_POST['confirm_password'];
    if($old_password==$current_password){
            if($new_password==$confirm_password){
                $new_password_enc=md5($new_password);
                $sql="update admin set password='$new_password_enc' where id='$id'";
                $res=mysqli_query($conn,$sql);
                if($res){
                    $_SESSION['admin']="<span style='color: green'> passwords is changed </span>";
                    header("location:".SITURL."admin/manage-admin.php");

                }else {
                    $_SESSION['admin']="<span style='color: red'> passwords can not be changed </span>";
                    header("location:".SITURL."admin/manage-admin.php");

                }
            }else{
                $_SESSION['admin']="<span style='color: red'> passwords are not matched </span>";
                header("location:".SITURL."admin/update-password.php?id=$id");
            }
    }else{
        $_SESSION['admin']="<span style='color: red'> password is not correct </span>";
        header("location:".SITURL."admin/update-password.php?id=$id");
    }
}
include "partials/footer.php";
?>