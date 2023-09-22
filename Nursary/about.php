<?php
include 'header.php';
?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>ABOUT US</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>ABOUT US</h2>
                        <p>We are leading in the plants service fields.</p>
                    </div>
                   
                   

                 

                <div class="col-12">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12">
                                <div class="single-benefits-area">
                                   
                                   <p>Nurserylive germinated in 2014 from a promise to make ‘green and healthy’ a click away for all Indians

Having plants in our homes or in our offices doesn’t just look good, it also boosts our mood, makes us more productive, and cleans the air around us by absorbing toxins

Most of us being urban dwellers spending their days in apartments with limited access to parks and ecological reserves, have no way of feeling close to nature and experiencing the benefits of being around plants.

Ordering a pizza is easy but ever heard of ordering a plant to your doorstep? This is where nurserylive comes in.

We believe that Green is Good and are here to enable Indians to access plants in the easiest way possible – online! We are here to shape the future of gardening!

A one-stop-shop for all gardening related requirements, nurserylive has more than 6000 products available online for delivery across India saving you numerous messy trips to various nurseries.

We cater to all kinds of gardening needs ranging from plants, pots, tools, to curated plant-scaping solutions. Our ever-growing platform integrates nurseries and customers across India. 

If you’re new to being a plant parent, we’re here to make it easier. Our garden experts can provide you with guidance for detailed care every step of the way..</p>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->


    <!-- ##### Service Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
   
    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area bg-img section-padding-100-0" style="background-image: url(img/bg-img/cool-facts.png);">
        <div class="container">
            <div class="row">

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="img/core-img/cf1.png" alt="">
                        </div>
                        <div class="cf-content">
                            <?php
                            if($uid==""){


                            $sql="select * from product where owner_id=$id ";
                            $result=$con->query($sql);
                            $count=$result->num_rows;
                        }
                        else if($uid!=""){
                              $sql="select * from product ";
                            $result=$con->query($sql);
                            $count=$result->num_rows;

                        }
                            ?>
                            <h2><span class="counter"><?php echo $count;?></span></h2>
                            <h6>PRODUCT</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
               <!--  <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="img/core-img/cf2.png" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">70</span></h2>
                            <h6>PROJECTS</h6>
                        </div>
                    </div>
                </div> -->

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="img/core-img/cf3.png" alt="">
                        </div>
                        <div class="cf-content">
                               <?php
                            if($uid==""){


                            $sql="SELECT * FROM `review` INNER join product on product.id=review.product_id INNER join owner on product.owner_id=owner.id where owner.id=$id ";
                            $result=$con->query($sql);
                            $count=$result->num_rows;
                        }
                        else if($uid!=""){
                              $sql="SELECT * FROM `review` INNER join product on product.id=review.product_id INNER join owner on product.owner_id=owner.id";
                            $result=$con->query($sql);
                            $count=$result->num_rows;

                        }
                            ?>
                            <h2><span class="counter"><?php echo $count;?></span>+</h2>
                            <h6>HAPPY CLIENTS</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="img/core-img/cf1.png" alt="">
                        </div>
                        <div class="cf-content">
                              <?php
                            if($uid==""){


                            $sql="SELECT * FROM category where owner_id=$id ";
                            $result=$con->query($sql);
                            $count=$result->num_rows;
                        }
                        else if($uid!=""){
                              $sql="SELECT * FROM category";
                            $result=$con->query($sql);
                            $count=$result->num_rows;

                        }
                            ?>
                            <h2><span class="counter"><?php echo $count;?></span></h2>
                            <h6>CATEGORY</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Side Image -->
        <div class="side-img wow fadeInUp" data-wow-delay="500ms">
            <img src="img/core-img/pot.png" alt="">
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    
    <!-- ##### Team Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
include 'footer.php';
   ?>