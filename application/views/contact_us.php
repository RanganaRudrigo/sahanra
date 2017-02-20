<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('inc/meta') ?>
    <!--Bootstrap-->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--Font Style-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic,300italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <!-- font-awesome.css -->
    <link href="<?= base_url('css/font-awesome.css') ?>" rel="stylesheet">
    <!--JQuery-->
    <script src="<?= base_url('js/jquery.min.js')?>"></script>
    <!-- Slick -->
    <link href="<?= base_url('css/slick.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/slick-theme.css') ?>" rel="stylesheet">

    <!-- pe-icon.css -->
    <link href="<?= base_url('css/pe-icon-7-stroke.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/helper.css') ?>" rel="stylesheet">

    <!-- animate.css -->
    <link href="<?= base_url('css/animate.css') ?>" rel="stylesheet">

    <!-- vanillabox -->
    <link href="<?= base_url('css/vanillabox.css') ?>" rel="stylesheet">

    <!-- Color Scheming Style -->
    <link href="<?= base_url('css/blue.css') ?>" id="switch_style" rel="stylesheet">

    <!-- User Defined Style -->
    <link href="<?= base_url('css/components.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">

</head>

<body class="navbar-fixed">


<?php $this->view('inc/header') ?>
<!-- Banner Small Begin -->
<section class="section banner-small parallax-section valign-wrap" style="background: url('<?= UP.$banner->Image ?>'); background-size: cover;">
    <div class="overlay"></div>
    <div class="content-wrap valign-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="title wow animated fadeInUp"><h1><?= $banner->Title ?></h1></div>
                <div class="subtitle wow animated fadeIn"><h2><?= $banner->ShortDescription ?></h2></div>
            </div>
        </div>
    </div><!--/.content-wrap -->
</section><!--/.banner-small -->
<!-- Banner Small End -->

<!-- Contact Title Paragraph Begin -->
<section class="contact-title-paragraph sec-pad-t sec-h-pad-b">
    <div class="container">
        <div class="iconic-title text-center col-md-12 no-h-padding no-h-padding wow animated fadeInUp">
            <div class="col-md-12 no-h-padding">
                <div class="title-icon">
                    <span><i class="pe-7s-call pe-2x"></i></span>
                </div>
            </div>
            <div class="col-md-12 no-h-padding">
                <h1>Our Contact</h1>
                <h2>Number</h2>
            </div>
        </div><!--/.iconic-title -->

        <div class="col-md-8 col-md-offset-2 text-center sec-h-pad sec-q-pad-t wow animated fadeIn">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
        </div>
    </div>
</section><!--/.contact-title-paragraph -->
<!-- Contact Title Paragraph ENd -->

<!--Contact Columns Begin-->
<section class="contact-columns sec-pad-b">
    <div class="container">
        <div class="col-md-4 col-sm-4 column margin-responsive">
            <div class="iconic-title-alt wow animated fadeIn">
                <div class="title-icon-wrap text-center col-md-12 no-h-padding mar-b-20">
                    <div class="title-icon">
                        <i class="pe-7s-map-marker pe-2x pe-va"></i>
                    </div>
                </div>

                <h2 class="underlined-heading mar-t-10">Visit Us</h2>
            </div>
            <p class="text-center">Washington Square Park, New Wark, United States 40567</p>
        </div><!--/.column -->

        <div class="col-md-4 col-sm-4 column margin-responsive">
            <div class="iconic-title-alt wow animated fadeIn">
                <div class="title-icon-wrap text-center col-md-12 no-h-padding mar-b-20">
                    <div class="title-icon">
                        <i class="pe-7s-phone pe-2x pe-va"></i>
                    </div>
                </div>

                <h2 class="underlined-heading mar-t-10">Make A Call</h2>
            </div>
            <p class="text-center">
                +62 244 234 456
                <br>
                +63 245 234 456
            </p>
        </div><!--/.column -->

        <div class="col-md-4 col-sm-4 column margin-responsive">
            <div class="iconic-title-alt wow animated fadeIn">
                <div class="title-icon-wrap text-center col-md-12 no-h-padding mar-b-20">
                    <div class="title-icon">
                        <i class="pe-7s-mail pe-2x pe-va"></i>
                    </div>
                </div>

                <h2 class="underlined-heading mar-t-10">Our Email</h2>
            </div>
            <p class="text-center">
                Contact@mail.com
                <br>
                Mail@contact.com
            </p>
        </div><!--/.column -->
    </div>
</section>
<!--Contact Columns End-->

<!--Map Canvas Begin-->
<section class="map">
    <div class="map-canvas" id="map-canvas"></div>
</section>
<!--Map Canvas End-->

<!--Bottom Contact Form Begin-->
<section class="bottom-contact-form sec-pad">
    <div class="container">
        <div class="iconic-title text-center col-md-12 no-h-padding wow animated fadeIn">
            <div class="col-md-12 no-h-padding">
                <div class="title-icon">
                    <span><i class="pe-7s-id pe-2x"></i></span>
                </div>
            </div>
            <div class="col-md-12 no-h-padding">
                <h1>Get In Touch</h1>
                <h2>Feel Free To Contact Us</h2>
            </div>
        </div><!--/.iconic-title -->

        <div class="col-md-8 col-md-offset-2 text-center sec-h-pad sec-q-pad-t wow animated fadeIn">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <input type="text" name="f_name" class="def-input fullwidth mar-b-20 wow animated fadeIn" placeholder="First Name">
            <input type="text" name="l_name" class="def-input fullwidth mar-b-20 wow animated fadeIn" placeholder="Last Name">
            <input type="email" name="email" class="def-input fullwidth mar-b-20 wow animated fadeIn" placeholder="Email">
            <input type="tel" name="number" class="def-input fullwidth mar-b-20 wow animated fadeIn" placeholder="Phone No">
            <textarea cols="30" name="message" rows="5" class="def-input fullwidth mar-b-20 wow animated fadeIn" placeholder="Your Message Here"></textarea>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="g-recaptcha" data-sitekey="6Lf8HBMUAAAAAMciofnnmYeMLllzVdVhu4aACn1k"></div>

            <button class="def-btn btn-solid fullwidth mar-t-10 wow animated fadeIn">
                Send Message
            </button>
        </div>
    </div>
</section><!--/.bottom-contact-form -->
<!--Bottom Contact Form End-->

<!-- Footer Begin -->
<?php $this->view('inc/footer') ?>
<!-- Footer End -->

<!-- JavaScripts -->
<script src="<?= base_url('js/bootstrap.min.js')?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&key=AIzaSyC9zJ2nP5_nbv2XbJv-c3YZEhJct0GQwNs"></script>
<script src="<?=base_url('js/custom-map.js')?>"></script>
<script src="<?=base_url('js/wow.min.js')?>"></script>
<script src="<?=base_url('js/slick.min.js')?>"></script>
<script src="<?=base_url('js/typed.min.js')?>"></script>
<script src="<?=base_url('js/smoothproducts.min.js')?>"></script>
<script src="<?=base_url('js/jquery.countTo.js')?>"></script>
<script src="<?=base_url('js/jquery.parallax.js')?>"></script>
<script src="<?=base_url('js/jquery.appear.min.js')?>"></script>
<script src="<?=base_url('js/isotope.min.js')?>"></script>
<script src="<?=base_url('js/masonry.min.js')?>"></script>
<script src="<?=base_url('js/imagesLoaded.js')?>"></script>
<script src="<?=base_url('js/jquery.downCount.js')?>"></script>
<script src="<?=base_url('js/jquery.vanillabox.js')?>"></script>
<script src="<?=base_url('js/modernizr.js')?>"></script>
<script src="<?=base_url('js/custom.js')?>"></script>

</body>