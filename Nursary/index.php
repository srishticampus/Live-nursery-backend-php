<?php
include 'header.php';
?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Plants exist in the weather and light rays that surround them</h2>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/2.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Plants exist in the weather and light rays that surround them</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->
   
    <!-- ##### Service Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>ABOUT US</h2>
                        <p>We are leading in the plants service fields.</p>
                    </div>
                     <p>Nurserylive germinated in 2014 from a promise to make ‘green and healthy’ a click away for all Indians

Having plants in our homes or in our offices doesn’t just look good, it also boosts our mood, makes us more productive, and cleans the air around us by absorbing toxins

Most of us being urban dwellers spending their days in apartments with limited access to parks and ecological reserves, have no way of feeling close to nature and experiencing the benefits of being around plants.

Ordering a pizza is easy but ever heard of ordering a plant to your doorstep? This is where nurserylive comes in.

We believe that Green is Good and are here to enable Indians to access plants in the easiest way possible – online! We are here to shape the future of gardening!

A one-stop-shop for all gardening related requirements, nurserylive has more than 6000 products available online for delivery across India saving you numerous messy trips to various nurseries.

We cater to all kinds of gardening needs ranging from plants, pots, tools, to curated plant-scaping solutions. Our ever-growing platform integrates nurseries and customers across India. 

If you’re new to being a plant parent, we’re here to make it easier. Our garden experts can provide you with guidance for detailed care every step of the way..</p>

                    <!-- Progress Bar Content Area -->
                   

                        <!-- Single Progress Bar -->
                        
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

    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                     <h2>NEW ARRIVALS</h2>
                        <p>We devote all of our experience and efforts for creation</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
         

            <div class="row alazea-portfolio">
<?php
$query="select * from product ";
$res=$con->query($query);
while($ro=$res->fetch_assoc()){
    ?>
     <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design home-design wow fadeInUp" data-wow-delay="100ms">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(uploads/<?php echo $ro['file'];?>);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="uploads/<?php echo $ro['file'];?>" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 1">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>
    <?php
}
?>



            </div>
        </div>
    </section>
    <!-- ##### Portfolio Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
   
    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Product Area Start ##### -->
 
    <!-- ##### Product Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
  
    <!-- ##### Blog Area End ##### -->



   
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   <?php
include 'footer.php';
   ?>