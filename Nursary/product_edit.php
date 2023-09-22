<?php
include 'header.php';
$pid=$_GET['id'];
?>
    <!-- ##### Header Area End ##### -->
<style type="text/css">
    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
</style>
    <!-- ##### Breadcrumb Area Start ##### -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>PRODUCT</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                           <!--  <li class="breadcrumb-item"><a href="#">Blog</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">View Product</li>
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
                                <h4 class="headline">Product</h4>
                                <?php

                                $sql="select * from product where owner_id=$id and id=$pid";
                                $result=$con->query($sql);
                                $count=$result->num_rows;
                                if($count>0){
                                    $row=$result->fetch_assoc();

                                ?>

                                <div class="contact-form-area">
                                    <!-- Comment Form -->
                                    <form action="product_updateaction.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" value="<?php echo $pid;?>" id="id" name="id" placeholder="id">
                                                    <input type="text" class="form-control" value="<?php echo $row['name'];?>" id="name" name="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control" id="category" name="category" placeholder="Category">
                                                        <option value="">Select Category</option>
                                                        <?php
                                                        $category=$row['category_id'];
                                                         $selected = "";
                                                        $sql1="select * from category where owner_id=$id";
                                                        $result1=$con->query($sql1);
                                                        $count1=$result1->num_rows;
                                                        if($count1>0){

                                                        while($row1=$result1->fetch_assoc()){
                                                            if ( $row1['id'] == $row['category_id'] ){

        $selected = "selected";}
                                            ?>
                                            
                                             <option <?php if($row1["id"]==$row['category_id']){?> selected <?php }?> value="<?php echo $row['category_id'] ?>"><?php echo $row1['name'];?></option>
                                            <?php
                                        }}
                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                     <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="<?php echo $row['quantity'];?>">

                                                </div>
                                            </div>
                                             <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                     <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $row['price'];?>">

                                                </div>
                                            </div>
                                              <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                     <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                                                    

                                                </div>
                                            </div>

                                             
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="description" id="message" cols="30" rows="10" placeholder="Description"><?php echo $row['description'];?></textarea>
                                                </div>
                                            </div>
                                             <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    
                                                     <img src="<?php echo 'uploads/'.$row['file'];?>" width="100" height="100">

                                                </div>
                                            </div>
                                             <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="additional_info" id="message" cols="30" rows="10" placeholder="Additional Information"><?php echo $row['additional_information'];?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn alazea-btn">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
<?php

}
?>





<br><br>

<div class="clearfix">
    <hr>
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
   <script type="text/javascript">
       $(document).ready(function () {
    $('#example').DataTable({
        scrollX: true,
    });
});
   </script>
   

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<!-- 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->