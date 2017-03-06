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
                        <h1>Success Stories</h1>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="my-inner-heading-col head-text">

                        <ul>
                            <li><a href="<?=base_url(HOME)?>">Home</a></li>
                            <li><a href="#">/</a></li>
                            <li><a href="<?= SUCCESS_STORIES ?>"  > Success Stories </a></li>
                            <li><a href="#">/</a></li>
                            <li><a href="#" class="active"> <?=$story->StoryTitle?> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Heading end -->

    <section class="my-inner-blog-field">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="my-blog-col clearfix">
                        <!-- blog main content start -->

                        <div class="my-blog-box">
                            <div class="post-entry-heading">
                                <div class="owl-carousel-grid-one blog-img-carousel post-main-thumb">
                                    <?php foreach (json_decode($story->MoreImage) as $image ): ?>
                                        <div class="item">
                                            <img src="<?= UP.$image ?>" alt="<?=$story->StoryTitle?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="my-blog-heading-row clearfix">

                                <div class="my-post clearfix">

                                    <h2><a href="#"><?=$story->StoryTitle?></a></h2>
                                </div>
                            </div>
                            <?=$story->Description?>
                        </div>


                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="my-blog-col clearfix">
                        <!-- search box start -->
                        <div class="my-sidebar-title">
                            <h4> Success Stores</h4>
                        </div>
                        <!-- archives start -->



                        <!-- Tab Widget start -->
                        <div class="my-tab-widget">

                            <div class="my-tab">

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <?php foreach ($stories as $story): ?>
                                            <div class="my-tab-content">
                                                <img src="<?=UPT.$story->Image?>" width="50" class="img-responsive" alt="">
                                                <p><?= $story->StoryTitle?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Fliker Widget start -->

                    </div>
                </div>
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