<?php
include 'layouts/menu.php'?>

    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="assets/img/trending/trending_top.jpg" alt="">
                                <div class="trend-top-cap">
                                    <span>Appetizers</span>
                                    <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <?php
                                $sql = "select * from post where featured='Yes' and active='Yes' limit 6 offset 1";
                                $res = mysqli_query($conn, $sql);
                                if ($res->num_rows > 0) {
                                    while ($row = $res->fetch_assoc()) {
                                        $id_news = $row['id'];
                                        $title = $row['title'];
                                        $image = $row['image'];
                                        $category_id = $row['category_id'];
                                        $sql_cat = "select * from category where id = '$category_id'";
                                        $res_cat = mysqli_query($conn, $sql_cat);
                                        if ($res_cat->num_rows > 0) {
                                            $row_cat = $res_cat->fetch_assoc();
                                            $category_name = $row_cat['title'];
                                            ?>
                                            <div class="col-lg-4">
                                                <div class="single-bottom mb-35">
                                                    <div class="trend-bottom-img mb-30">
                                                        <img height="200px" src="<?php echo $image ?>" alt="">
                                                    </div>
                                                    <div class="trend-bottom-cap">
                                                        <span class="color1"><?php echo $category_name ?></span>
                                                        <h4>
                                                            <a href="details.php?id=<?php echo $id_news ?>"><?php echo $title ?></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
<?php
$sql = "select * from post where featured='Yes' and active='Yes' limit 6 offset 1";
$res = mysqli_query($conn, $sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $id_news = $row['id'];
        $title = $row['title'];
        $image = $row['image'];
        $category_id = $row['category_id'];
        $sql_cat = "select * from category where id = '$category_id'";
        $res_cat = mysqli_query($conn, $sql_cat);
        if ($res_cat->num_rows > 0) {
            $row_cat = $res_cat->fetch_assoc();
            $category_name = $row_cat['title'];
            ?>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img height="200px" src="<?php echo $image ?>" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1"><?php echo $category_name ?></span>
                                <h4>  <a href="details.php?id=<?php echo $id_news ?>"><?php echo $title ?></a></h4>
                            </div>
                        </div>
            <?php
        }
    }
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->


    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News1.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News2.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event night</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News3.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event time</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->

    </main>

<?php
include 'layouts/footer.php'?>