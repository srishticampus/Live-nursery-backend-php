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
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Owner Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Product </th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                     <th scope="col">Description</th>
                      <th scope="col">Additional Information</th>
                      
                        <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=1;
                  $sql="select product.file,product.name,product.quantity,product.description,product.additional_information,product.price,category.name as cname,owner.name as oname,product.id as pid from product inner join category on product.category_id=category.id inner join owner on category.owner_id=owner.id order by product.id desc";
                  $result=$con->query($sql);
                  $count=$result->num_rows;
                  while($row=$result->fetch_assoc()){
                    ?>


                    <tr>
                    <th scope="row"><?php echo $i++;?></th>
                     <td><a href="../Nursary/uploads/<?php echo $row['file'];?>" target="_blank"><img src="../Nursary/uploads/<?php echo $row['file'];?>" width="100" height="100"></a></td>
                    <td><?php echo $row['oname'];?></td>
                    <td><?php echo $row['cname'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['quantity'];?></td>
                    <td><?php echo $row['price'];?></td>

                    <td style="width:10%"><?php echo $row['description'];?></td>
                    <td><?php echo $row['additional_information'];?></td>
                    <td>
                      <a href="edit_product.php?id=<?php echo $row['pid'];?>">

Edit


                     </a>

                    </td>
                    <td><a href="delete_product.php?id=<?php echo $row['pid'];?>">Delete</td>
                  </tr>
                    <?php
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