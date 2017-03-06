<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('inc/meta') ?>
    <!-- css file -->
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?=base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?=base_url('css/menuzord-border-bottom.css') ?>"  />
    <link rel="stylesheet" href="<?=base_url('css/main-style.css') ?>" />
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?=base_url('css/responsive.css') ?>">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/settings.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/layers.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/font-awesome-animation.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/jquery-ui.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/owl.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/isotop.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/magnific-popup.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/menuzord.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/modernizr.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/hover.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/timecounter.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/fancyBox.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/prettyphoto.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/jquery.mCustomScrollbar.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/jquery.circliful.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/fonticon-et-line.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/fonticon-linearicons.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/my-style.css') ?>">
</head>
<body>
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Preloader -->

    <!-- Content Main Start -->
    <div class="content-main">
        <!-- Main Header Start -->
        <?php $this->view('inc/header') ?>
        <!-- Home Section end-->
    </div>


    <!-- Inner Heading start -->
    <section class="my-inner-heading-field my-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="my-inner-heading-col">
                        <h1>CSR</h1>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="my-inner-heading-col head-text">

                        <ul>
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li><a href="#">/</a></li>
                            <li><a href="#" class="active">CSR</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Heading end -->

    <section class="my-about-field">
        <div class="container">
            <div class="row">
                <?php foreach ($csrs as $csr): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="my-team-col">
                            <div class="thumb">
                                <img class="img-responsive my-img-fluided" src="<?= UP.$csr->Image ?>"" alt="">
                                <div class="layer"></div>
                                <div class="thumb-content">
                                    <h4 class="title text-uppercase"><?=  $csr->CSRTitle ?></h4>
<!--                                    <h5 class="sub-title efinance-color">Ceo / Employee manger</h5>-->
                                </div>
                                <!--<div class="icon">
                                    <i class="icon-plus fa fa-plus"></i>
                                    <ul class="team-icons">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>-->
                            </div>
                            <div class="content">
                                <p>  <?=  character_limiter($csr->ShortDescription,200) ?></p>
                                <a class="efinance-color" href="#">read more <i class="lnr lnr-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php $this->view('inc/footer') ?>
    <!-- Footer Blog End  -->

</div>
<!-- Main Content End -->

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- Wrapper End -->

<!--External Script-->
<script type="text/javascript" src="<?=base_url('js/jquery.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/jquery-ui.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/scrollto.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/SmoothScroll.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/jquery.knob.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/modernizr.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/jquery-scrolltofixed-min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/menuzord.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/isotope.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/stellar.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/jquery.fitvids.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/wow.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/owl.carousel.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/timepicker.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/jquery.magnific-popup.min.js')?>"></script>
<!-- Some of Jquery Plugin -->
<script type="text/javascript" src="<?=base_url('js/jquery.circliful.js')?>"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="<?=base_url('js/jquery.themepunch.tools.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('js/jquery.themepunch.revolution.min.js')?>"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="<?=base_url('js/script.js')?>"></script>


<!-- Slider Revolution Start -->

</body>
</html>