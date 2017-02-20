<!doctype html>
<html class="no-js" lang="">
<head>
    <?php $this->view('inc/meta') ?>
    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('css') ?>/bootstrap.min.css">

    <!-- Fontawsome CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('css') ?>/font-awesome.min.css">

    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('css') ?>/owl.carousel.css">

    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('css') ?>/jquery-ui.css">

    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('css') ?>/meanmenu.min.css">

    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('css') ?>/animate.css">

    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('lib') ?>/nivo-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('lib') ?>/nivo-slider/css/preview.css" type="text/css" media="screen" />

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('css') ?>/style.css">

    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('css') ?>/responsive.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="<?= base_url('js') ?>/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--Header Area Start-->
<?php $this->view('inc/header') ?>
<div class="error-area">
<div class="container">
                    <div class="col-md-12">
                        <div class="error-text-container text-center" >
                            <h1 class="text-center">Oops...</h1>
                            <h2 class="text-center">Page Not Found!</h2>
                            <img src="<?= base_url() ?>img/testimonial1.png" class="text-center">
                            <p>Sorry the Page Could not be Found here.
                            Try using the button below to go to <br>main page
                            of the site</p>
                            <a href="http://almashriqtours.com/">Go to home</a>
                        </div>
                    </div>
                </div>
</div>
<?php $this->view('inc/footer') ?>


<!-- jquery
============================================ -->
<script src="<?= base_url('js') ?>/vendor/jquery-1.12.3.min.js"></script>

<!-- bootstrap JS
============================================ -->
<script src="<?= base_url('js') ?>/bootstrap.min.js"></script>

<!-- nivo slider js
============================================ -->
<script src="<?= base_url('lib') ?>/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?= base_url('lib') ?>/nivo-slider/home.js" type="text/javascript"></script>

<!-- wow JS
============================================ -->
<script src="<?= base_url('js') ?>/wow.min.js"></script>

<!-- price-slider JS
============================================ -->
<script src="<?= base_url('js') ?>/jquery-price-slider.js"></script>

<!-- meanmenu JS
============================================ -->
<script src="<?= base_url('js') ?>/jquery.meanmenu.js"></script>

<!-- owl.carousel JS
============================================ -->
<script src="<?= base_url('js') ?>/owl.carousel.min.js"></script>

<!-- scrollUp JS
============================================ -->
<script src="<?= base_url('js') ?>/jquery.scrollUp.min.js"></script>

<!-- Waypoints JS
============================================ -->
<script src="<?= base_url('js') ?>/waypoints.min.js"></script>

<!-- Counter Up JS
============================================ -->
<script src="<?= base_url('js') ?>/jquery.counterup.min.js"></script>

<!-- plugins JS
============================================ -->
<script src="<?= base_url('js') ?>/plugins.js"></script>

<!-- main JS
============================================ -->
<script src="<?= base_url('js') ?>/main.js"></script>
</body>
</html>