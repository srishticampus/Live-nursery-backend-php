<?php
include('header.php');
$pid=$_GET['id'];
$sql="select product.file,product.name,product.quantity,product.description,product.additional_information,product.price,category.name as cname,owner.name as oname,product.id as pid,product.category_id from product inner join category on product.category_id=category.id inner join owner on category.owner_id=owner.id  where product.id=$pid";
$result=$con->query($sql);
$row=$result->fetch_assoc();
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="edit_product_action.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                   <input type="hidden" class="form-control" name="id" value="<?php echo $pid?>">
                  <label for="inputText" class="col-sm-2 col-form-label">Owner Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $row['oname']?>" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" disabled="">
                      <option selected>Select Category</option>
                                      <?php
                                                        $category=$row['category_id'];
                                                         $selected = "";
                                                        $sql1="select * from category";
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
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pname" value="<?php echo $row['name']?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Quantity</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="quantity" value="<?php echo $row['quantity'];?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="<?php echo $row['price'];?>" name="price">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                  </div>
                </div>
               
               

               
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"  name="description"><?php echo $row['description'];?></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Additional Information</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="additional_information"><?php echo $row['additional_information'];?></textarea>
                  </div>
                </div>
               
                
               

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

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