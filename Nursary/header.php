

<?php
require 'connection.php';
session_start();
	$id="";
$uid="";
if(!empty($_SESSION)){

if(isset($_SESSION['owner'])){
	$id=$_SESSION['owner'];

}
else if(isset($_SESSION['id'])){
	$uid=$_SESSION['id'];
}
else{
	$id="";
$uid="";
}

}
else{
	$id="";
$uid="";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>EverGreen </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                            	<?php
if($id==""){
	?>
	 <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +1 234 122 122</span></a>
	<?php
}else{

	?>
	<?php
                            	 $s="select * from owner where id=$id";
                                 $r=$con->query($s);
                                 $ro=$r->fetch_assoc();
                                 ?>

                                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $ro['email'];?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email:  <?php echo $ro['email'];?></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $ro['phone'];?>"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: <?php echo $ro['phone'];?></span></a>
	<?php
}
                            	?>
                               
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->
                                <!-- <div class="language-dropdown">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">USA</a>
                                            <a class="dropdown-item" href="#">UK</a>
                                            <a class="dropdown-item" href="#">Bangla</a>
                                            <a class="dropdown-item" href="#">Hindi</a>
                                            <a class="dropdown-item" href="#">Spanish</a>
                                            <a class="dropdown-item" href="#">Latin</a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Login -->
                               <!--  <div class="language-dropdown">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>Login</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                            <a class="dropdown-item" href="login.php">Owner</a>
                                            <a class="dropdown-item" href="#">User</a>
                                         
                                        </div>
                                    </div>
                                </div> -->
                                <?php

                                if($uid==""&&$id==""){
                                	?>

                                	 <div class="login">
                                    <a href="owner_login.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Owner</span></a>
                                </div>
                                <div class="login">
                                    <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> <span>User</span></a>
                                </div>
                                	<?php
                                }
                                ?>
                                
                                <!-- Cart -->
                               <!--  <div class="cart">
                                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.php" class="nav-brand"><!-- <img src="img/core-img/logo.png" alt=""> -->
                            <?php

                            if($id!=""){
                                ?>
                                 <span style="color: #70c745;text-transform: uppercase;">  <?php
                                 $s="select * from owner where id=$id";
                                 $r=$con->query($s);
                                 $ro=$r->fetch_assoc();


                                 echo $ro['nursery_name'];
                                 ?></span><!-- <span style="color: #70c745">GREEN</span> -->

                                <?php
                            }else{

                                ?>
                                <span style="color: #fff;">  EVER</span><span style="color: #70c745">GREEN</span>
                                <?php
                            }

                            ?>


                          
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <?php
                                   
                                    if($uid==""&&$id!=""){

                                    	?>

                                    	  <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                         
                                            <li><a href="product.php">Product</a></li>
                                            <li><a href="category.php">Category</a></li>
                                           <!--  <li><a href="shop.php">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Shop</a></li>
                                                    <li><a href="shop-details.php">Shop Details</a></li> -->
                                                <!--     <li><a href="cart.php">Shopping Cart</a></li> 
                                                    <li><a href="checkout.php">Checkout</a></li> 
                                                </ul>
                                            </li> -->
                                            <li><a href="order.php">Order</a></li>
                                           
                                           
                                           
                                        </ul>
                                    </li>
                                    	<?php
                                    }

                                    ?>
                                  
                                    <li><a href="shop.php">Shop</a></li>
                                    <?php
if($uid!="")
{
	?>

	 <li><a href="cart.php">Cart</a></li>
     <li><a href="my_order.php">My Order</a></li>
	<?php
}
                                    ?>
                                    
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <?php
                                    if(!empty($_SESSION)){
                                    	?>
                                    	<li><a href="user_logout.php">Logout</a></li>
                                    	<?php
                                    }
                                    ?>
                                    
                                </ul>

                                <!-- Search Icon -->
                                

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                   
                </div>
            </div>
        </div>
    </header>