<?php
include 'partials/menu.php';
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>
        <br>
        <br>
        <br>
        <?php
        if(isset($_SESSION['category'])){
            echo $_SESSION['category'];
            unset($_SESSION['category']);
        }
        ?>
        <br>
        <br>
        <br>
        <!-- Button to Add Admin -->
        <a href="add-category.php" class="btn-primary">Add Category</a>


        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>

            <?php
            $sql="select * from category";
            $res=mysqli_query($conn,$sql);
            if($res->num_rows>0){
                while ($row=$res->fetch_assoc()){
                    $id=$row['id'];
                    $title=$row['title'];
                    $image_name=$row['image_name'];
                    $featured=$row['featured'];
                    $active=$row['active'];

                ?>
                <tr>
                <td> <?php echo $id?></td>
                <td> <?php echo $title?></td>

                <td>
                    <img src=<?php echo "../".$image_name?> " width="50px">


                </td>

                <td><?php echo $featured?></td>
                <td><?php echo $active?></td>
                <td>
                    <a href="update-category.php?id=<?php echo $id?>" class="btn-secondary">Update Category</a>
                    <a href="delete-category.php?id=<?php echo $id?>" class="btn-danger">Delete Category</a>
                </td>
            </tr>
                <?php

            }}

            else{
                ?>
                <tr>
                <td colspan="6">
                    <div class="error">No Category Added.</div>
                </td>
            </tr>
            <?php
            }

            ?>






        </table>
    </div>

</div>

<div class="footer">
    <div class="wrapper">
        <p class="text-center">2021 All rights reserved, Food House</p>
    </div>
</div>
<!-- Footer Section Ends -->

</body>
</html>