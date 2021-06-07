<?php
include "partials/menu.php";

$id=$_GET['id'];
$sql="select * from category where id='$id'";
$res=mysqli_query($conn,$sql);
if($res->num_rows>0){
    $row=$res->fetch_assoc();
    $id=$row['id'];
    $title=$row['title'];
    $image_name_old=$row['image_name'];
    $featured=$row['featured'];
    $active=$row['active'];
}
else{
    $_SESSION['category']="<span style='color: red'> category is not found </span>";

    header("location:".SITURL."admin/manage-category.php");

}
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Category</h1>

        <br><br>


        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" value="<?php echo $title?>">
                    </td>
                </tr>

                <tr>
                    <td>Current Image:</td>
                    <td>
                       <?php echo $image_name_old?>
                    </td>
                </tr>

                <tr>
                    <td>New Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <input  <?php if($featured=="Yes") echo "checked" ; ?>
                            type="radio" name="featured" value="Yes"> Yes

                        <input <?php if($featured=="No") echo "checked" ; ?>
                            type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active:</td>
                    <td>
                        <input <?php if($active=="Yes") echo "checked" ; ?>
                            type="radio" name="active" value="Yes"> Yes

                        <input <?php if($active=="No") echo "checked" ; ?>
                            type="radio" name="active" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="hidden" name="current_image" value="">
                        <input type="hidden" name="id" value="">
                        <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>
<?php
if(isset($_POST['submit'])){
$title=$_POST['title'];
$active=$_POST['active'];
$featured=$_POST['featured'];
//    print_r($_FILES);
if(isset($_FILES['image']['name']) && $_FILES['image']['name'] !="" ){
$image_name=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];


$exp=   explode('.',$image_name);
$ext=end($exp);
$dst="../images/".time()."_".$title.".".$ext;
//echo $dst;
$uploded=move_uploaded_file($temp_name,$dst);
}
else {$dst=$image_name_old;}

$sql="update category SET
title='$title',
image_name='$dst',
active='$active',
featured='$featured' where id='$id'";
$res=mysqli_query($conn,$sql);

if($res){
$_SESSION['category']="<span style='color: green'> category is updated </span>";
header("location:".SITURL."admin/manage-category.php");

}
else   {
$_SESSION['category']="<span style='color: red'> category is not updated </span>";
header("location:".SITURL.'admin/manage-category.php');
}
}

include "partials/footer.php";