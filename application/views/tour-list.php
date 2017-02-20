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


<?php $this->view('inc/header') ?><!-- Banner Small Begin -->

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


<!-- Portfolio Filter Begin -->
<section class="portfoliofilter wow animated fadeIn text-center sec-pad-t">
    <div class="container">
        <div class="row">
            <a href="javascript:void(0)" data-filter="*" class="current filterbutton">
                ALL
            </a>
            <?php foreach ($packages as $package): ?>               
                <a href="javascript:void(0)" data-filter=".package-<?= $package->PackageId ?>" class="filterbutton">
                    <?= $package->PackageTitle ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Portfolio Filter End -->

<!-- Portfolio Collase Begin -->
<section class="portfolio-collase">
    <div class="container no-h-padding">
        <div class="isotope-wrap masonry-grid">
            <?php foreach ($tours as $tour): ?>
                <div class="element-item masonry-item col-md-4 col-sm-6 col-xs-12 with-space package-<?= $tour->PackageId ?>">
                    <div class="portfolio-item">
                        <figure class="portfolio-figure">
                            <img src="<?= UP.$tour->Image ?>" alt="Portfolio Image">
                            <figcaption>
                                <div class="valign-wrap fullwidth fullheight">
                                    <div class="caption-wrap valign-middle">
                                        <h2><?= $tour->TourTitle ?></h2>
                                        <div class="separator"></div>
                                        <p><?= character_limiter($tour->ShortDescription,200) ?></p>
                                        <a href="<?=  base_url('tour/'.url_title($tour->TourTitle)."/$tour->TourId") ?>" 
                                           class="def-btn btn-outline portfolio-btn">
                                            <span class="text-content">
                                            More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div><!--/.portfolio-item -->
                </div>

            <?php endforeach; ?>
 

        </div><!--/.isotope-wrap -->
    </div><!--/.container-fluid -->
</section><!--/.portfolio -->
<!-- Portfolio Collase End -->


<!-- Footer Begin -->
<?php $this->view('inc/footer') ?>
<!-- Footer End -->

<!-- JavaScripts -->
<script src="<?= base_url('js/bootstrap.min.js')?>"></script>
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