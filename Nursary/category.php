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
            <h2>CATEGORY</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                         <!--    <li class="breadcrumb-item"><a href="#">Blog</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                                    <form action="category_action.php" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="category-name" name="category-name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                                                </div>
                                            </div>
                                           <!--  <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Comment"></textarea>
                                                </div>
                                            </div> -->
                                            <div class="col-12">
                                                <button type="submit" class="btn alazea-btn">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>






<br><br>

<div class="clearfix">
    <hr>
</div>



                                 <div class="contact-form-area">
                                 <h4 class="headline">Category Details</h4>
                                    <!-- Comment Form -->
                                    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Quantity</th>
                <th colspan="2">Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            $sql="select * from category where owner_id=$id";
            $result=$con->query($sql);
             $count=$result->num_rows;
                                                        if($count>0){
            while($row=$result->fetch_assoc()){
                ?>
                 <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['quantity'];?></td>
               
                <td><a href="category_edit.php?id=<?php echo $row['id'];?>"> <span class="glyphicon glyphicon-edit"></span>Edit</a></td>
                <td><a href="category_delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash-o"></i>Delete</a></td>
            </tr>
                <?php
            }}
            ?>
           
           
        </tbody>
    </table>
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