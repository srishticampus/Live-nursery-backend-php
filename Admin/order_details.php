<?php
include 'header.php';

?>
<style type="text/css">
  .datatable{
     overflow-x: scroll;
    max-width: 100%;
    display: block;
    white-space: nowrap;
  }

</style>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Owners</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Owners</li>
          <li class="breadcrumb-item active">Owner</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Owners</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
            <tr>
                <th>#</th>
                 <th>Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                  <th>Price</th>
                  <th>Order Status</th>
                   <th>Updated By</th>
                  <th>Action</th>
                   

                
                
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            $sql="SELECT product.name, product.file, cart.quantity,product.price,billing.order_status,billing.id as bid,billing.status_by FROM `billing` inner JOIN cart on billing.cart_id=cart.id INNER JOIN product on cart.product_id = product.id order by billing.id desc";
            $result=$con->query($sql);
             $count=$result->num_rows;
                                                        if($count>0){
            while($row=$result->fetch_assoc()){
                ?>
                 <tr>
                <td><?php echo $i++;?></td>
                 <td><img src="../Nursary/uploads/<?php echo $row['file'];?>" width="100" height="100"></td>
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
             <td><?php
             if($row['status_by']==0){
              echo 'Owner';
             }
             else if($row['status_by']==1){
              echo 'Admin';
             }
             else{
              echo '';
             }



             ?></td>
             <td>

<?php
if($row['order_status']==0){
    ?>
      <a href="shipped_update.php?id=<?php echo $row['bid'];?>">Shipped</a>
    <?php

}else if($row['order_status']==1){
    ?>
     <a href="delivery_update.php?id=<?php echo $row['bid'];?>">Delivered</a>
    <?php
}
else{
    ?>
    Completed
    <?php
}
?>
        </td>      
               
             
            </tr>
                <?php
            }
        }
            ?>
           
           
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
     
    </div>
    <div class="credits">
    
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>