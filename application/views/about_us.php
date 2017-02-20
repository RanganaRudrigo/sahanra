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

<!-- Skill Content Begin -->
<section class="skill-content sec-pad ">
    <div class="container">
        <div class="col-md-6 col-sm-6 margin-responsive">
            <h3 class="underlined-heading wow animated fadeInUp">Our Team Skill</h3>
            <p class="wow animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="skillbar-wrap">
                <div class="icon valign-bottom text-right"><i class="pe-7s-shuffle pe-2x"></i></div>
                <div class="bar-and-text valign-bottom">
                    Durability
                    <div class="bar"><div class="filled wow animated fadeInLeft" style="width: 70%"></div></div>
                </div>
                <div class="number-wrap valign-bottom text-right">
                    <div class="number">70%</div>
                </div>
            </div><!--/.skillbar-wrap -->

            <div class="skillbar-wrap">
                <div class="icon valign-bottom text-right"><i class="pe-7s-help2 pe-2x"></i></div>
                <div class="bar-and-text valign-bottom">
                    Swimming
                    <div class="bar"><div class="filled wow animated fadeInLeft" style="width: 80%"></div></div>
                </div>
                <div class="number-wrap valign-bottom text-right">
                    <div class="number">80%</div>
                </div>
            </div><!--/.skillbar-wrap -->

            <div class="skillbar-wrap">
                <div class="icon valign-bottom text-right"><i class="pe-7s-compass pe-2x"></i></div>
                <div class="bar-and-text valign-bottom">
                    Survival
                    <div class="bar"><div class="filled wow animated fadeInLeft" style="width: 75%"></div></div>
                </div>
                <div class="number-wrap valign-bottom text-right">
                    <div class="number">75%</div>
                </div>
            </div><!--/.skillbar-wrap -->

            <div class="skillbar-wrap">
                <div class="icon valign-bottom text-right"><i class="pe-7s-gym pe-2x"></i></div>
                <div class="bar-and-text valign-bottom">
                    Stamina
                    <div class="bar"><div class="filled wow animated fadeInLeft" style="width: 90%"></div></div>
                </div>
                <div class="number-wrap valign-bottom text-right">
                    <div class="number">90%</div>
                </div>
            </div><!--/.skillbar-wrap -->
        </div>
    </div><!--/.container -->
</section><!--/.skill-content -->
<!-- Skill Content End -->

<!-- Project Counter Begin -->
<section class="project-counter parallax-section" style="background: url('assets/images/banner-small-2.jpg'); background-size: cover;">
    <div class="overlay"></div>
    <div class="container">
        <div class="counter-wrap sec-pad col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-3 col-sm-3 counter-column text-center wow animated fadeIn" data-wow-delay="0s">
                <div class="icon"><i class="pe-7s-anchor pe-2x"></i></div>
                <div class="separator"></div>
                <div class="counter-number" data-to="35" data-speed="5000" data-from="0"></div>
                <div class="bottom-text">Diving Spots Visited</div>
            </div><!--/.counter-column -->
            <div class="col-md-3 col-sm-3 counter-column text-center wow animated fadeIn" data-wow-delay="0.2s">
                <div class="icon"><i class="pe-7s-users pe-2x"></i></div>
                <div class="separator"></div>
                <div class="counter-number" data-to="1000" data-speed="3000" data-from="0"></div>
                <div class="bottom-text">Adventurer Trusts</div>
            </div><!--/.counter-column -->
            <div class="col-md-3 col-sm-3 counter-column text-center wow animated fadeIn" data-wow-delay="0.4s">
                <div class="icon"><i class="pe-7s-help2 pe-2x"></i></div>
                <div class="separator"></div>
                <div class="counter-number" data-to="75" data-speed="3000" data-from="0"></div>
                <div class="bottom-text">Snorkling Events Hosted</div>
            </div><!--/.counter-column -->
            <div class="col-md-3 col-sm-3 counter-column text-center wow animated fadeIn" data-wow-delay="0.6s">
                <div class="icon"><i class="pe-7s-star pe-2x"></i></div>
                <div class="separator"></div>
                <div class="counter-number" data-to="120" data-speed="3000" data-from="0"></div>
                <div class="bottom-text">Sponsors</div>
            </div><!--/.counter-column -->
        </div>
    </div>
</section><!--/.project-counter -->
<!-- Project Counter End -->

<!-- Team Slider Begin -->
<section class="team-slider-wrap sec-pad">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="text-content col-md-9 col-sm-9 col-xs-12 sec-h-pad-b no-h-padding">
                <h3 class="underlined-heading wow animated fadeInUp">We Are Great Team</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
            </div><!--/.left-content -->
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider team-slider-nav wow animated fadeIn">
                <div class="team-photo">
                    <img src="assets/images/team1.jpg" alt="">
                    <div class="overlay">
                        <div class="valign-wrap content">
                            <div class="valign-middle">
                                <div class="name"><h3>Jonathan Doe</h3></div>
                                <div class="position">CEO, Owner</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.team-photo -->

                <div class="team-photo">
                    <img src="assets/images/team2.jpg" alt="">
                    <div class="overlay">
                        <div class="valign-wrap content">
                            <div class="valign-middle">
                                <div class="name"><h3>Kim Jose</h3></div>
                                <div class="position">Diving Guide</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.team-photo -->

                <div class="team-photo">
                    <img src="assets/images/team3.jpg" alt="">
                    <div class="overlay">
                        <div class="valign-wrap content">
                            <div class="valign-middle">
                                <div class="name"><h3>Jessica Jean</h3></div>
                                <div class="position">Finance</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.team-photo -->

                <div class="team-photo">
                    <img src="assets/images/team4.jpg" alt="">
                    <div class="overlay">
                        <div class="valign-wrap content">
                            <div class="valign-middle">
                                <div class="name"><h3>Stephen Gerald</h3></div>
                                <div class="position">Snorkling Guide</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.team-photo -->

                <div class="team-photo">
                    <img src="assets/images/team5.jpg" alt="">
                    <div class="overlay">
                        <div class="valign-wrap content">
                            <div class="valign-middle">
                                <div class="name"><h3>Steve Webb</h3></div>
                                <div class="position">Travel Guide</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.team-photo -->
            </div><!--/.team-slider-nav -->
            <div class="slider team-slider wow animated fadeIn">
                <div class="slider-content">
                    <div class="col-md-6 no-h-padding photo-section">
                        <img src="assets/images/team1-large.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-section no-h-padding">
                        <div class="title"><h3>Jonathan Doe</h3></div>
                        <div class="subtitle"><h4>CEO, Owner</h4></div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula. consectetur adipiscing elit. Curabitur viverra vulputate tincidunt.</p>
                        </div>
                        <div class="socmed">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div><!--/.slider-content -->
                <div class="slider-content">
                    <div class="col-md-6 no-h-padding photo-section">
                        <img src="assets/images/team2-large.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-section no-h-padding">
                        <div class="title"><h3>Kim Jose</h3></div>
                        <div class="subtitle"><h4>Diving Guide</h4></div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula. consectetur adipiscing elit. Curabitur viverra vulputate tincidunt.</p>
                        </div>
                        <div class="socmed">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div><!--/.slider-content -->
                <div class="slider-content">
                    <div class="col-md-6 no-h-padding photo-section">
                        <img src="assets/images/team3-large.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-section no-h-padding">
                        <div class="title"><h3>Jessica Jean</h3></div>
                        <div class="subtitle"><h4>Finance</h4></div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula. consectetur adipiscing elit. Curabitur viverra vulputate tincidunt.</p>
                        </div>
                        <div class="socmed">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div><!--/.slider-content -->
                <div class="slider-content">
                    <div class="col-md-6 no-h-padding photo-section">
                        <img src="assets/images/team4-large.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-section no-h-padding">
                        <div class="title"><h3>Stephen Gerald</h3></div>
                        <div class="subtitle"><h4>Snorkling Guide</h4></div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula. consectetur adipiscing elit. Curabitur viverra vulputate tincidunt.</p>
                        </div>
                        <div class="socmed">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div><!--/.slider-content -->
                <div class="slider-content">
                    <div class="col-md-6 no-h-padding photo-section">
                        <img src="assets/images/team5-large.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-section no-h-padding">
                        <div class="title"><h3>Steve Webb</h3></div>
                        <div class="subtitle"><h4>Travel Guide</h4></div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula. consectetur adipiscing elit. Curabitur viverra vulputate tincidunt.</p>
                        </div>
                        <div class="socmed">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div><!--/.slider-content -->
            </div><!--/.team-slider -->
        </div>
    </div><!--/.container-->
</section><!--/.team-slider-wrap-->
<!-- Team Slider End -->

<!-- Triple Column Begin -->
<section class="triple-column">
    <div class="container">

        <div class="col-md-4 col-sm-4 column wow animated fadeIn">
            <div class="valign-wrap">
                <div class="valign-middle">
                    <div class="title"><h3>Your Travel Plan</h3></div>
                    <div class="text"><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p></div>
                    <div class="button">
                        <a href="#" class="def-btn btn-outline">Visit Now</a>
                    </div>
                </div>
            </div>
        </div><!--/.column -->

        <div class="col-md-4 col-sm-4 column center wow animated fadeIn">
            <div class="valign-wrap">
                <div class="valign-middle">
                    <div class="title"><h3>Choose Date</h3></div>
                    <div class="text"><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p></div>
                    <div class="button">
                        <a href="#" class="def-btn btn-solid">Visit Now</a>
                    </div>
                </div>
            </div>
        </div><!--/.column -->

        <div class="col-md-4 col-sm-4 column wow animated fadeIn">
            <div class="valign-wrap">
                <div class="valign-middle">
                    <div class="title"><h3>Begin Adventure</h3></div>
                    <div class="text"><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p></div>
                    <div class="button">
                        <a href="#" class="def-btn btn-outline">Visit Now</a>
                    </div>
                </div>
            </div>
        </div><!--/.column -->

    </div><!--/.container-fluid -->
</section><!--/.triple-column -->
<!-- Triple Column End -->

<!-- Testimonial Begin -->
<section class="testimonial sec-pad">
    <div class="container">
        <div class="text-content col-md-9 col-sm-9 col-xs-12">
            <h3 class="underlined-heading wow animated fadeInUp">Adventurer Testimonial</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
        </div><!--/.left-content -->


        <div class="testimonial-slider wow animated fadeIn">
            <div class="testimonial-content">
                <div class="text">
                    <div class="quote">
                        <img src="assets/images/quote.png" alt="">
                    </div>
                    Sail is the best snorkling agent , I have travelled more than 10 snorkling spots and their service is very niche.
                </div>
                <div class="image-name-wrap valign-wrap">
                    <div class="image valign-middle">
                        <img src="assets/images/person1.jpg" alt="" class="img-circle">
                    </div>
                    <div class="name-position valign-middle">
                        <div class="name">Jonathan Van</div>
                        <div class="position">Travel Blogger</div>
                    </div>
                </div>
            </div><!--/.testimonial-content -->

            <div class="testimonial-content">
                <div class="text">
                    <div class="quote">
                        <img src="assets/images/quote.png" alt="">
                    </div>
                    Sail is my best diving partner, they always give me the best gear, very recommended for beginner and professional
                </div>
                <div class="image-name-wrap valign-wrap">
                    <div class="image valign-middle">
                        <img src="assets/images/person2.jpg" alt="" class="img-circle">
                    </div>
                    <div class="name-position valign-middle">
                        <div class="name">Mark Andre</div>
                        <div class="position">Professional Diver</div>
                    </div>
                </div>
            </div><!--/.testimonial-content -->

            <div class="testimonial-content">
                <div class="text">
                    <div class="quote">
                        <img src="assets/images/quote.png" alt="">
                    </div>
                    Amazing snorkling event hosted by Sail, it's so fun and great, I am meet so many new friends on that event.
                </div>
                <div class="image-name-wrap valign-wrap">
                    <div class="image valign-middle">
                        <img src="assets/images/person3.jpg" alt="" class="img-circle">
                    </div>
                    <div class="name-position valign-middle">
                        <div class="name">Leone Tan</div>
                        <div class="position">Aquatic Athlete</div>
                    </div>
                </div>
            </div><!--/.testimonial-content -->

            <div class="testimonial-content">
                <div class="text">
                    <div class="quote">
                        <img src="assets/images/quote.png" alt="">
                    </div>
                    Not just water adventure, Sail is support me for learning wall climbing, so fun.
                </div>
                <div class="image-name-wrap valign-wrap">
                    <div class="image valign-middle">
                        <img src="assets/images/person4.jpg" alt="" class="img-circle">
                    </div>
                    <div class="name-position valign-middle">
                        <div class="name">Johny Varella</div>
                        <div class="position">Climber</div>
                    </div>
                </div>
            </div><!--/.testimonial-content -->

        </div><!--/.testimonial-slider -->
    </div><!--/.container -->
</section><!--/.testimonial -->
<!-- Testimonial End -->




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