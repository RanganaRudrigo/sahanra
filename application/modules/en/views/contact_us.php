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
                        <h1>Contact</h1>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="my-inner-heading-col head-text">

                        <ul>
                            <li><a href="<?=base_url(HOME)?>">Home</a></li>
                            <li><a href="#">/</a></li>
                            <li><a href="#" class="active"> Contact </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Heading end -->

    <!-- About two start -->
    <section class="my-about-two my-inner-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <form id="contact_form" name="contact_form" class="contact-form" action="" method="post" novalidate="novalidate">
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="form_name">Name <small>*</small></label>
                                    <input id="form_name" name="form_name" class="form-control" placeholder="enter a name" required="required" data-error="Name is required." type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="form_email">Email <small>*</small></label>
                                    <input id="form_email" name="form_email" class="form-control required email" placeholder="enter an email" required="required" data-error="Email is required." type="email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="form_phone">Phone <small>*</small></label>
                                    <input id="form_phone" name="form_phone" class="form-control required" placeholder="enter a phone" required="required" data-error="Phone Number is required." type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="form_subject">Subject <small>*</small></label>
                                    <input id="form_subject" name="form_subject" class="form-control required" placeholder="enter a subject" required="required" data-error="Subject is required." type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form_name">Message</label>
                            <textarea id="form_message" name="form_message" class="form-control style2 required" rows="10" placeholder="type in a message" required="required" data-error="Message is required."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group text-right">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
                            <button type="submit" class="btn btn-lg my-btn-black" data-loading-text="Getting Few Sec...">Send Message</button>
                        </div>
                    </form>
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