<?php
include 'header.php';

?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Checkout</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area mb-100">
        <div class="container">
            <div class="row justify-content-between">
                  <form action="checkout_action.php" method="post">
                <div class="col-12 col-lg-7">
                    <div class="checkout_details_area clearfix">
                        <h5>Billing Details</h5>
                      
                            <?php
$sql="select * from user where id=$uid";
$result=$con->query($sql);
$row=$result->fetch_assoc();
                            ?>
                             <?php

                                      $sql2="select product.file,product.price,cart.quantity,product.name,cart.id,product.id as pid from cart inner join product on cart.product_id=product.id where cart.userid=$uid and cart.checkout_stats=0";
                                $result2=$con->query($sql2);
                                $count2=$result2->num_rows;
                              
                                    $price=0;
                                    $total=0;
                                    $ship=50;

                                while($row2=$result2->fetch_assoc()){
                                    ?>
                                    <input type="hidden" name="cid[]" value="<?php echo $row2['id']?>">
                                     <input type="hidden" name="pid[]" value="<?php echo $row2['pid']?>">
                                    <?php

                                   }
                                    ?>
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <label for="first_name">First Name *</label>
                                    <input type="text" class="form-control" id="first_name" name="name" value="<?php echo $row['name'];?>" required>
                                </div>
                                
                                <div class="col-12 mb-4">
                                    <label for="email_address">Email Address *</label>
                                    <input type="email" class="form-control" id="email_address"  name="email" value="<?php echo $row['email'];?>">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="phone_number">Phone Number *</label>
                                    <input type="number" class="form-control" id="phone_number" name="phone" min="0" value="<?php echo $row['phone'];?>">
                                </div>
                              
                                <div class="col-12 mb-4">
                                    <label for="company">Address *</label>
                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'];?>">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="city">Town/City *</label>
                                    <input type="text" class="form-control" id="city" value="" name="city">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="state">State/Province *</label>
                                    <input type="text" class="form-control" id="state" value="" name="state">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="country">Country</label>
                                   
                                        <input type="text" class="form-control" id="country" value=""name="country">
                                        
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="postcode">Postcode/Zip</label>
                                    <input type="text" class="form-control" id="postcode" value="" name="postcode">
                                </div>
                                
                              
                            </div>
                       
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="checkout-content">
                        <h5 class="title--">Your Order</h5>
                     
                        <div class="products">
                            <div class="products-data">
                                <h5>Products:</h5>
                                  <?php

                                      $sql2="select product.file,product.price,cart.quantity,product.name,cart.id from cart inner join product on cart.product_id=product.id where cart.userid=$uid and cart.checkout_stats=0";
                                $result2=$con->query($sql2);
                                $count2=$result2->num_rows;
                              
                                    $price=0;
                                    $total=0;
                                    $ship=50;

                                while($row2=$result2->fetch_assoc()){
                                     $price+=$row2['price'];
                                        $ptotal=$row2['price']*$row2['quantity'];
                                        $total+=$ptotal;
                                    ?>
                                <div class="single-products d-flex justify-content-between align-items-center">

                                  
                                    <p><?php echo $row2['name'];?></p>

                                    <h5>&#8377;<?php
                                    echo $row2['price'];
                                    ?></h5>
                                    
                                    <br>
                              
                                </div>
                                      <?php
                                }
                                    ?>
                            </div>
                        </div>
                        <div class="subtotal d-flex justify-content-between align-items-center">
                            <h5>Subtotal</h5>
                            <h5>&#8377;<?php
                                    echo $price;
                                    ?></h5>
                        </div>
                        <div class="shipping d-flex justify-content-between align-items-center">
                            <h5>Shipping</h5>
                            <h5>&#8377;<?php echo $ship;?></h5>
                        </div>
                        <div class="order-total d-flex justify-content-between align-items-center">
                            <h5>Order Total</h5>
                            <h5>&#8377;<?php echo $total+$ship;?></h5>
                        </div>
                        <div class="checkout-btn mt-30">
                            <input type="submit" value="Place Order" class="btn alazea-btn w-100">
                        </div>
                    </div>
                </div>




            </form>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
include 'footer.php';
   ?>