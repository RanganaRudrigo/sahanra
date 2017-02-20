<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('inc/meta') ?>
    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Font Style-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic,300italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <!-- font-awesome.css -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--JQuery-->
    <script src="js/jquery.min.js"></script>
    <!-- Slick -->
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">

    <!-- pe-icon.css -->
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">

    <!-- animate.css -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- vanillabox -->
    <link href="css/vanillabox.css" rel="stylesheet">

    <!-- Color Scheming Style -->
    <link href="css/blue.css" id="switch_style" rel="stylesheet">

    <!-- User Defined Style -->
    <link href="css/components.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="navbar-fixed">


<?php $this->view('inc/header') ?>

<!-- Banner Begin -->
<section class="banner carousel slide" id="banner-carousel-2">
    <div class="carousel-inner">
        <?php foreach ($sliders as $k=> $slider): ?>
            <div class="item parallax-section <?= !$k ? 'active' :'' ?>" style="background-image: url(<?=UP.$slider->Image ?>); background-size:cover;">
                <div class="container">
                    <div class="content-wrap valign-wrap">
                        <div class="content valign-middle col-md-12">
                            <div class="text-content text-center">
                                <div class="underlined-heading center-underlined-heading top animated fadeInUp wow" data-wow-delay="0.5s">
                                    <h1> <?= $slider->SliderTitle ?></h1>
                                    <h2>Journey &amp; Great Adventure</h2>
                                </div>
                                <div class="banner-description animated col-md-8 col-md-offset-2 fadeIn wow" data-wow-delay="1.5s">
                                    <h3>  <?= $slider->ShortDescription ?></h3>
                                </div>
                                <?php if(strlen($slider->Url) > 0 ) :  ?>
                                    <div class="col-md-12">
                                        <div class="button-wrap animated fadeInUp wow" data-wow-delay="2s">
                                            <a href="<?= $slider->Url ?>" class="def-btn btn-outline">More Detail</a>
                                        </div>
                                    </div>
                                <?php endif;  ?>
                            </div><!--/.textwrap -->
                        </div>
                    </div><!--/.content-wrap -->
                </div><!--/.container -->
            </div><!--/.item -->
        <?php endforeach; ?>


    </div><!--/.carousel-inner -->

    <!-- Controls -->
    <a class="left carousel-control" href="#banner-carousel-2" role="button" data-slide="prev">
        <div class="control left">
            <div class="shape"><i class="fa fa-angle-left"></i></div>
        </div>
    </a>
    <a class="right carousel-control" href="#banner-carousel-2" role="button" data-slide="next">
        <div class="control right">
            <div class="shape"><i class="fa fa-angle-right"></i></div>
        </div>
    </a>

</section><!-- /.banner -->
<!-- Banner End -->

<!-- Title Rl Begin -->
<section class="title-rl sec-hq-pad wow animated fadeInUp">
    <div class="container">
        <div class="valign-wrap">
            <div class="valign-middle text-right left-content">
                <h3>Welcome to <br/> MBS Travels & Tours Sri Lanka</h3>
            </div>
            <div class="valign-middle text-left right-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor.</p>
            </div>
        </div>
    </div>
</section><!--/.title-rl-->
<!-- Title Rl Begin -->

<!-- Portfolio Collase Begin -->
<section class="portfolio-collase sec-pad-b no-b-padding">
    <div class="container-fluid no-h-padding">

        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="images/portfolio-1.jpg" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>Scuba Diving</h2>
                                <div class="separator"></div>
                                <p>Tour Name</p>
                                <a href="" class="def-btn btn-outline portfolio-btn">
                      <span class="text-content">
                      More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div><!--/.portfolio-item -->
        </div>

        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="images/portfolio-6.jpg" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>Hiking and Trekking</h2>
                                <div class="separator"></div>
                                <p>Tour Name</p>
                                <a href="portfolio-single.html" class="def-btn btn-outline portfolio-btn">
                      <span class="text-content">
                      More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div><!--/.portfolio-item -->
        </div>

        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="images/portfolio-3.jpg" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>Blue Whale Watching</h2>
                                <div class="separator"></div>
                                <p>Tour Name</p>
                                <a href="portfolio-single.html" class="def-btn btn-outline portfolio-btn">
                      <span class="text-content">
                      More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div><!--/.portfolio-item -->
        </div>

        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="images/portfolio-4.jpg" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>Jeep Safari</h2>
                                <div class="separator"></div>
                                <p>Tour Name</p>
                                <a href="portfolio-single.html" class="def-btn btn-outline portfolio-btn">
                      <span class="text-content">
                      More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div><!--/.portfolio-item -->
        </div>

        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="images/portfolio-5.jpg" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>Moutain Biking</h2>
                                <div class="separator"></div>
                                <p>Tour Name</p>
                                <a href="portfolio-single.html" class="def-btn btn-outline portfolio-btn">
                      <span class="text-content">
                      More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div><!--/.portfolio-item -->
        </div>

        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="images/portfolio-7.jpg" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>Surfing</h2>
                                <div class="separator"></div>
                                <p>Tour Name</p>
                                <a href="portfolio-single.html" class="def-btn btn-outline portfolio-btn">
                      <span class="text-content">
                      More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div><!--/.portfolio-item -->
        </div>

        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="images/portfolio-8.jpg" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>White Water Rafting</h2>
                                <div class="separator"></div>
                                <p>Tour Name</p>
                                <a href="portfolio-single.html" class="def-btn btn-outline portfolio-btn">
                      <span class="text-content">
                      More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div><!--/.portfolio-item -->
        </div>

        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="images/portfolio-2.jpg" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>Deep Sea Diving</h2>
                                <div class="separator"></div>
                                <p>Tour Name</p>
                                <a href="portfolio-single.html" class="def-btn btn-outline portfolio-btn">
                      <span class="text-content">
                      More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div><!--/.portfolio-item -->
        </div>

    </div><!--/.container-fluid -->
</section><!--/.portfolio -->
<!-- Portfolio Collase End -->

<!-- Client Logos Alt Begin -->
<section class="client-logos-alt-wrap sec-pad">
    <div class="container">
        <div class="valign-wrap">
            <div class="valign-middle halfwidth">
                <div class="title-paragraph">
                    <div class="fullwidth margin-responsive">
                        <h3 class="underlined-heading wow animated fadeInUp">Our Services</h3>
                        <p class="wow animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
                    </div>
                </div>
            </div>

            <div class="valign-middle halfwidth wow animated fadeIn">
                <div class="client-logo text-center col-md-4">
                    <img src="images/client-logo-1.png" alt="">
                </div>
                <div class="client-logo text-center col-md-4">
                    <img src="images/client-logo-2.png" alt="">
                </div>
                <div class="client-logo text-center col-md-4">
                    <img src="images/client-logo-3.png" alt="">
                </div>
            </div>
        </div>
    </div><!--/.container-fluid -->
</section><!--/.client-logos-alt-wrap -->
<!-- Client Logos Alt End -->

<!-- Process Begin  -->
<section class="process" id="news">
    <div class="container-fluid no-h-padding">

        <div class="col-md-12 col-sm-12 no-h-padding process-column-wrapper wow animated fadeIn">
            <div class="center-shape">
                <div class="content-inner">
                    <div class="content">
                        <div class="process-icon"><img src="images/loop-icon.png" alt=""></div>
                        <span class="text">Special Offers</span>
                        <a href="<?= base_url('Special-Offers') ?>">View More</a>
                    </div>
                </div>
            </div>
            <?php foreach ($offers as $offer): ?>
                <article class="col-md-6 col-sm-6 no-h-padding process-column">
                    <div class="portfolio-item">
                        <figure class="portfolio-figure">
                            <img src="<?= UP. $offer->Image ?>" alt="<?= $offer->OfferTitle ?>">
                            <figcaption>
                                <div class="valign-wrap fullwidth fullheight">
                                    <div class="caption-wrap valign-middle">
                                        <h1 class="title text-center wow animaed fadeInUp" style="color: #FFFFFF;" ><?= $offer->Discount ?>%</h1>
                                        <h2><?= $offer->OfferTitle ?></h2>
                                        <div class="separator"></div>
                                        <p><?= $offer->ShortDescription ?></p>
                                        <a href="<?= $offer->Url ?>" class="def-btn btn-outline portfolio-btn">
                                        <span class="text-content">More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div><!--/.portfolio-item -->
                </article><!--/.news-column -->
            <?php endforeach; ?>
        </div>
    </div><!--/.container -->
</section><!--/.journal -->
<!-- Process End  -->

<!-- Gallery Carousel Wrap Begin -->
<section class="gallery-carousel-wrap sec-pad">
    <div class="container">
        <div class="title">
            <h3 class="underlined-heading wow animated fadeInUp">Our Latest Photograph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
        </div>

        <div class="gallery-carousel">
            <?php foreach ($galleries as $k => $gallery): ?>
            <div class="image">
                <img src="<?= UPT.$gallery->Image ?>" alt="">
            </div> 
            <?php endforeach; ?>
        </div><!--/.client-logos -->
    </div><!--/.container-fluid -->
</section><!--/.gallery-carousel-wrap -->
<!-- Gallery Carousel Wrap End -->

<!-- Testimonial Begin -->
<?php if(!empty($testimonials)): ?>
    <section class="cta-form" style="background: url('images/banner1.jpg'); background-size: cover;">
        <div class="overlay"></div>
        <div class="container content">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="mySlides col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8">
                    <div class="title text-center wow animaed fadeInUp"><h3> <?= $testimonial->TestimonialTitle ?> </h3></div>
                    <div class="text text-center"><p> <?= $testimonial->ShortDescription ?></p></div>
                </div>
            <?php endforeach; ?>
            <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8"  >
                <a class="pull-left" style="color: #fff;" onclick="plusDivs(-1)"> &#10094; Prev</a>
                <a class="pull-right"  style="color: #fff;"  onclick="plusDivs(1)">Next &#10095;</a>
            </div>
        </div><!--/.content -->
    </section>
<?php endif; ?>
<!-- Testimonial End -->

<!-- Footer Begin -->
<?php $this->view('inc/footer') ?>
<!-- Footer End -->

<!-- JavaScripts -->
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/smoothproducts.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.appear.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/imagesLoaded.js"></script>
<script src="js/jquery.downCount.js"></script>
<script src="js/jquery.vanillabox.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/custom.js"></script>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
    setInterval(function () {
        plusDivs(1)
    },5000)
</script>
</body>