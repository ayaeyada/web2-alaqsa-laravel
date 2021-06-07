<?php
include "partials/menu.php";
$id=$_GET['id'];
$sql="select * from admin where id='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    if($res->num_rows>0){
        $row=$res->fetch_assoc();
        $username=$row['username'];
        $fullname=$row['full_name'];


    }else{
        $_SESSION['admin']="<span style='color: red'> admin is not found </span>";

        header("location:".SITURL."admin/manage-admin.php");
    }

}
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>

        <br><br>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $fullname?>">
                    </td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>


<?php include 'partials/footer.php';

if (isset($_POST['submit'])) {
    $fullname = $_POST['full_name'];
    $username = $_POST['username'];

    $sql = "Update  admin SET 
full_name='$fullname',
username='$username' where id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['admin'] = "<span style='color: green'> admin is updated </span>";
        header("location:" . SITURL . "admin/manage-admin.php");

    } else {
        $_SESSION['admin'] = "<span style='color: red'> admin is not updated </span>";
        header("location:" . SITURL . 'admin/manage-admin.php');
    }
}