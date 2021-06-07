<?php
$page_title="add category";
include "partials/menu.php"

?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br><br>



        <br><br>

        <!-- Add CAtegory Form Starts -->
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Category Title">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes" checked> Yes
                        <input type="radio" name="featured" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes" checked> Yes
                        <input type="radio" name="active" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
        <!-- Add CAtegory Form Ends -->


    </div>
</div>

    <?php
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $active=$_POST['active'];
    $featured=$_POST['featured'];
//    print_r($_FILES);
//    if(isset($_FILES['image']['name']) && $_FILES['image']['name'] !="" ){
//        $image_name=$_FILES['image']['name'];
//        $temp_name=$_FILES['image']['tmp_name'];
//
//
//
//
////    $dst="../images/123.jpg";
//     $exp=   explode('.',$image_name);
//    $ext=end($exp);
//$dst="images/".time()."_".$title.".".$ext;
// echo $dst;
//  $uploded=move_uploaded_file($temp_name,"../".$dst);
//    }
//    else {$dst="images/burger.jpg";}

    $sql="insert into category SET
title='$title',
active='$active',
featured='$featured'";
   $res=mysqli_query($conn,$sql);

    if($res){
        $_SESSION['category']="<span style='color: green'> category is added </span>";
        header("location:".SITURL."admin/manage-category.php");

    }
    else   {
        $_SESSION['category']="<span style='color: red'> category is not added </span>";
        header("location:".SITURL.'admin/manage-category.php');
    }
}

    include "partials/footer.php";