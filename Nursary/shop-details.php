<?php
include 'header.php';
$pid=$_GET['id'];

$sql="select product.name,product.file,product.quantity,product.description,product.category_id,product.additional_information,category.name as cname,product.price from product inner join category on product.category_id=category.id where product.id=$pid";
$result=$con->query($sql);
$row=$result->fetch_assoc();


?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>SHOP DETAILS</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area mb-50">
        <div class="produts-details--content mb-50">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="product-img" href="<?php echo 'uploads/'.$row['file'];?>" title="Product Image">
                                        <img class="d-block w-100" src="<?php echo 'uploads/'.$row['file'];?>" alt="1">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="product-img" href="<?php echo 'uploads/'.$row['file'];?>" title="Product Image">
                                        <img class="d-block w-100" src="<?php echo 'uploads/'.$row['file'];?>" alt="1">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="product-img" href="<?php echo 'uploads/'.$row['file'];?>" title="Product Image">
                                        <img class="d-block w-100" src="<?php echo 'uploads/'.$row['file'];?>" alt="1">
                                    </a>
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                   <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(<?php echo 'uploads/'.$row['file'];?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(<?php echo 'uploads/'.$row['file'];?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(<?php echo 'uploads/'.$row['file'];?>);">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">
                            <h4 class="title"><?php echo $row['name'];?></h4>
                            <h4 class="price">&#8377;<?php echo $row['price'];?></h4>
                            <div class="short_overview">
                                <p><?php echo $row['description'];?></p>
                            </div>

                            <div class="cart--area d-flex flex-wrap align-items-center">
                                <!-- Add to Cart Form -->
                                <form class="cart clearfix d-flex align-items-center" method="post" action="cart_action.php">
                                    <input type="hidden" name="pid" value="<?php echo $pid;?>">
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="<?php echo $row['quantity'];?>" name="quantity" value="1" required>
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <?php
                                    if($row['quantity']==0){
                                        ?>

                                        <button type="button" name="addtocart" value="5" class="btn alazea-btn btn-danger ml-15">Not Available</button>
                                  <?php  }
                                  else{
                                    ?>
                                    <button type="submit" name="addtocart" value="5" class="btn alazea-btn ml-15">Add to cart</button>
                                    <?php
                                  }
                                    ?>
                                  
                                    
                                </form>
                                <!-- Wishlist & Compare -->
                                <div class="wishlist-compare d-flex flex-wrap align-items-center">
                                    <a href="#" class="wishlist-btn ml-15"><i class="icon_heart_alt"></i></a>
                                    <a href="#" class="compare-btn ml-15"><i class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="products--meta">
                                <p><span>Category:</span> <span><?php echo $row['cname'];?></span></p>
                                <p><span>Tags:</span> <span><?php echo $row['name']?></span></p>
                                <p>
                                    
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_details_tab clearfix">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="product-details-tab">
                            <li class="nav-item">
                                <a href="#description" class="nav-link active" data-toggle="tab" role="tab">Description</a>
                            </li>
                            <li class="nav-item">
                                <a href="#addi-info" class="nav-link" data-toggle="tab" role="tab">Additional Information</a>
                            </li>

                            <li class="nav-item">
                                <a href="#reviews" class="nav-link" data-toggle="tab" role="tab">Reviews <span class="text-muted">
<?php
$s="select * from review where product_id=$pid ";
$r=$con->query($s);
$co=$r->num_rows;

?>

                                (<?php echo $co;?>)</span></a>
                            </li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="description">
                                <div class="description_area">
                                      <p><?php echo $row['description'];?></p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="addi-info">
                                <div class="additional_info_area">
                                     <p><?php echo $row['additional_information'];?></p>
                                </div>
                            </div>









                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                            
<div class="reviews_area">
                                    <ul>
                                        <li>
                                            <?php
$sql="select product.id,product.file,product.name,review.count,product.price,review.comments,user.name as uname,user.email as uemail from review inner join product on review.product_id=product.id inner join user on review.user_id=user.id where review.product_id=$pid";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        $price= $row['price'];
        ?>
                                            <div class="single_user_review mb-15">
                                                <div class="review-rating">

<?php
echo '<h4>'.$row['uname'].'</h4>';
?>

                <?php
                                             for ($i = 1; $i <= 5; $i++) {
                  $ratingClass = "btn-default btn-grey";
                  if($i <= $row['count']) {
                    $ratingClass = "btn-warning";
                  }

                                            ?>
                                             <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
                  <span class="fa fa-star" aria-hidden="true"></span>
                </button>               
                <?php } ?>







                                                   <!--  <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i> -->
                                                    <span></span>
                                                </div>
                                                <div class="review-details">
                                                    <p><?php echo $row['comments'];?></p>
                                                </div>
                                            </div>
                                            <?php
                                        }}
                                            ?>
                                           
                                           
                                        </li>
                                    </ul>
                                </div>










 <?php
                            if($uid!=""){
                                ?>


                                 <div class="submit_a_review_area mt-50">
                                    <h4>Submit A Review</h4>
                                    <form action="rating_action.php" method="post">
                                        <?php
                                        $sq="select * from user where id=$uid";
                                        $res=$con->query($sq);
                                        $ro=$res->fetch_assoc();

                                        ?>
                                        <input type="hidden" name="pid" value="<?php echo $pid;?>">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="form-group d-flex align-items-center">
                                                    <span class="mr-15">Your Ratings:</span>
                                                   <!--  <div class="stars">
                                                        <input type="radio" name="star" class="star-1" id="star-1">
                                                        <label class="star-1" for="star-1">1</label>
                                                        <input type="radio" name="star" class="star-2" id="star-2">
                                                        <label class="star-2" for="star-2">2</label>
                                                        <input type="radio" name="star" class="star-3" id="star-3">
                                                        <label class="star-3" for="star-3">3</label>
                                                        <input type="radio" name="star" class="star-4" id="star-4">
                                                        <label class="star-4" for="star-4">4</label>
                                                        <input type="radio" name="star" class="star-5" id="star-5">
                                                        <label class="star-5" for="star-5">5</label>
                                                        <span></span>
                                                    </div>
                                                    <input type="text" name="starCount" id="starCount">
                                                </div> -->

                                                    <div class="form-group">
                       
                        <button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <input type="hidden" class="form-control" id="rating" name="rating" value="1">
                        
                    </div>  
                                            </div>
                                            <div class="col-10">
                                                <div class="form-group">
                                                    <label for="name">Nickname</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nazrul" value="<?php  echo $ro['name'];?>">
                                                </div>
                                            </div>
                                           <!--  <div class="col-10 col-md-5">
                                                <div class="form-group">
                                                    <label for="options">Reason for your rating</label>
                                                    <select class="form-control" id="options" name="options">
                                                        <option value="">Select</option>
                                                          <option>Quality</option>
                                                          <option>Value</option>
                                                          <option>Design</option>
                                                          <option>Price</option>
                                                          <option>Others</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="col-10">
                                                <div class="form-group">
                                                    <label for="comments">Comments</label>
                                                    <textarea class="form-control" id="comments" name="comments" rows="5" data-max-length="150"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <button type="submit" class="btn alazea-btn">Submit Your Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php
                            }
                            ?>
                               













                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

    <!-- ##### Related Product Area Start ##### -->
   
    <script type="text/javascript">
        $( "#rateProduct" ).click(function() {
        if(!$(this).hasClass('login')) {
            $('#loginModal').modal('show');
        } else {        
            $("#ratingDetails").hide();
            $("#ratingSection").show();
        }
    }); 
    $( "#cancelReview" ).click(function() {
        $("#ratingSection").hide();
        $("#ratingDetails").show();     
    }); 
    // implement start rating select/deselect
    $( ".rateButton" ).click(function() {
        if($(this).hasClass('btn-grey')) {          
            $(this).removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
            $(this).prevAll('.rateButton').removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
            $(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');           
        } else {                        
            $(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
        }
        $("#rating").val($('.star-selected').length);       
    });

   
    </script>
    <!-- ##### Related Product Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   <?php
include 'footer.php';
   ?>