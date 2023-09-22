<?php
include 'header.php';
$category_id=$_GET['id'];
?>
   
   
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>CATEGORY</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Blog</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">View Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                      

                      

                        <!-- Leave A Comment -->
                        <div class="leave-comment-area clearfix">
                            <div class="comment-form">
                                <h4 class="headline">Category</h4>

                                <div class="contact-form-area">
                                    <!-- Comment Form -->
                                    <form action="category_editaction.php" method="post">
                                        <?php
                                         $sql="select * from category where owner_id=$id and id=$category_id";
            $result=$con->query($sql);
            $row=$result->fetch_assoc();
                                        ?>
                                        <input type="hidden" name="id" value="<?php echo $category_id;?>">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="category-name" name="category-name" placeholder="Name" value="<?php echo $row['name'];?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="<?php echo $row['quantity'];?>">
                                                </div>
                                            </div>
                                           <!--  <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Comment"></textarea>
                                                </div>
                                            </div> -->
                                            <div class="col-12">
                                                <button type="submit" class="btn alazea-btn">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>









                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar Area -->
              
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
<?php
include 'footer.php';
   ?>
  