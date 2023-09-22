<?php
include 'header.php';
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
            <h2>SINGLE BLOG POST</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single Blog Post</li>
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
                                
                              







                                 <div class="contact-form-area">
                                 <h4 class="headline">Order Details</h4>
                                    <!-- Comment Form -->
                                    <div style="overflow-x:auto;">
                                    <table id="example" class="display nowrap" style="text-align: left; width: 100%; overflow:scroll;"  cellpadding="2" cellspacing="2">
        <thead>
            <tr>
                <th>#</th>
                 <th>Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                  <th>Price</th>
                  <th>Order Status</th>
                   

                
                
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            $sql="SELECT product.name, product.file, cart.quantity,product.price,billing.order_status FROM `billing` inner JOIN cart on billing.cart_id=cart.id INNER JOIN product on cart.product_id = product.id WHERE billing.user_id=$uid";
            $result=$con->query($sql);
             $count=$result->num_rows;
                                                        if($count>0){
            while($row=$result->fetch_assoc()){
                ?>
                 <tr>
                <td><?php echo $i++;?></td>
                 <td><img src="uploads/<?php echo $row['file'];?>" width="100" height="100"></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php 
                echo $row['price'];



                ?></td>
              
             <td><?php  $status=$row['order_status'];
             if($status==0){
                echo 'Order Placed';
             }
             else if($status==1){
                echo "Shipped";
             }
             else if($status==2){
                echo 'Delivered';
             }




             ?></td>
               
             
            </tr>
                <?php
            }
        }
            ?>
           
           
        </tbody>
    </table>
</div>
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