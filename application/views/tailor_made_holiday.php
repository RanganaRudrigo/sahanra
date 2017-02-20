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
    <style>
        select  {
            margin: 5px 0 ;
        }
    </style>
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

<section class="checkout-form sec-hq-pad-t sec-q-pad-b">
    <div class="container">
        <div class="row">
            <form   method="post">
                <div class="row">
                    <div class="col-md-12 ">
                        <?php
                        $notification =  $this->session->flashdata('notification');
                        if (isset($notification)) { ?>
                            <div class="row" >
                                <div class=" col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12
         alert alert-<?= $notification['alert'] ?>  alert-success alert-dismissible fade in ">
                                    <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">&times;</button>
                                    <?= $notification['text'] ?>
                                </div>
                            </div>
                        <?php }   ?>
                    </div>
                    <div class="col-md-12" ><h3>  Primary Information </h3>  </div>
                    <div class="col-md-6">
                        <input name="first_name" value="<?= set_value('first_name') ?>" required type="text" class="def-input form-control" placeholder="First name">
                    </div>
                    <div class="col-md-6">
                        <input name="last_name" value="<?= set_value('last_name') ?>"  type="text" class="def-input form-control" placeholder="Last name">
                    </div>
                    <div class="col-md-6">
                        <input name="email" value="<?= set_value('email') ?>"  required type="email" class="def-input form-control" placeholder="Email">

                    </div>
                    <div class="col-md-6">
                        <input name="number" value="<?= set_value('number') ?>"  type="text" class="def-input form-control" placeholder="Phone number">
                    </div>

                    <div class="col-md-6  ">

                        <select class="def-input form-control" required  name="country"  id="country"  >
                            <option value="" > Select Country </option>
                            <?php foreach ($countries as $country): ?>
                                <option value="<?= $country->country_id ?>" > <?= $country->name ?> </option>
                            <?php endforeach; ?>
                        </select>
                        <select class="def-input form-control" required  name="province" id="province" >
                            <option value="" > Select Province </option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <textarea name="address" required class="def-input fullwidth mar-b-20" placeholder="Address"><?= set_value('address') ?></textarea>
                    </div>
                    <div class="col-md-12" ><h3 >  Travel Details </h3>  </div>

                    <div class="col-md-3">
                        <input name="Number_of_Travelers" value="<?= set_value('Number_of_Travelers') ?>" type="number" class="def-input form-control" placeholder="Number of Travelers">
                    </div>
                    <div class="col-md-3">
                        <input name="Adults" value="<?= set_value('Adults') ?>" type="number" class="def-input form-control" placeholder="Number of Adults">
                    </div>
                    <div class="col-md-3">
                        <input name="Children_under_12_years" value="<?= set_value('Children_under_12_years') ?>" type="number" class="def-input form-control" placeholder="Children under 12 years">
                    </div>
                    <div class="col-md-3">
                        <input name="Dates_of_travel" value="<?= set_value('Dates_of_travel') ?>" type="number" class="def-input form-control" placeholder="Dates of travel">
                    </div>


                    <div class="col-md-6">
                        <input name="Dates_of_travel" value="<?= set_value('Dates_of_travel') ?>" type="number" class="def-input form-control" placeholder="Dates of travel">
                    </div>

                    <div class="col-md-6">
                        <input name="Duration_of_stay_required" value="<?= set_value('Duration_of_stay_required') ?>" type="text" class="def-input form-control" placeholder="Duration of stay required">
                    </div>

                    <div class="col-md-6">
                        <select name="Type_of_Accommodation" class="def-input form-control" >
                            <option value="" >Type of Accommodation:</option>
                            <option>2 Star</option>
                            <option>3 Star</option>
                            <option>4 Star</option>
                            <option>5 Star</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select name="Preferred_Meal_Plan_on_Tour" class="def-input form-control" >
                            <option value="" >Preferred Meal Plan on Tour:</option>
                            <option> Bed And Breakfast </option>
                            <option> Half Broad </option>
                            <option> Fall Broad </option>
                        </select>
                    </div>

                    <div class="col-md-6   " >
                        <label  class="mar-t-20" >Activities you wish to engage: </label>
                        <div class="row" >
                            <div class="col-md-6" >
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Cultural sites" > Cultural sites
                                    </label>
                                </div>
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Beach" > Beach
                                    </label>
                                </div>
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Wild Life" > Wild Life
                                    </label>
                                </div>
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Trekking" >Trekking
                                    </label>
                                </div>

                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Bird Watching" >Bird Watching
                                    </label>
                                </div>
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Diving / Snorkeling " > Diving / Snorkeling
                                    </label>
                                </div>
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="River rafting" > River rafting
                                    </label>
                                </div>
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Golf" > Golf
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Shopping" > Shopping
                                    </label>
                                </div>
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Surfing" > Surfing
                                    </label>
                                </div>
                                <div class="checkbox"  >
                                    <label   >
                                        <input type="checkbox" name="Activities[]" value="Hill Country Tour" > Hill Country Tour
                                    </label>
                                </div>
                                <div>
                                    <textarea placeholder="If Other (Please specify) :" class="def-input fullwidth mar-b-20" style="height: 106px;" name="Activities_if_other" ><?= set_value('Activities_if_other') ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="mar-t-20" >Will you be celebrating your:</label>
                        <div class="checkbox"  >
                            <label   >
                                <input type="checkbox" name="celebration[]" value="Wedding" > Wedding
                            </label>
                        </div>
                        <div class="checkbox" >
                            <label >
                                <input type="checkbox" name="celebration[]" value="Anniversary" > Anniversary
                            </label>
                        </div>
                        <div class="checkbox" >
                            <label >
                                <input type="checkbox" name="celebration[]" value="Honeymoon" > Honeymoon
                            </label>
                        </div>
                        <div class="checkbox" >
                            <label  >
                                <input type="checkbox" name="celebration[]" value="Birthday" > Birthday
                            </label>
                        </div>
                        <div>
                            <textarea placeholder="If Other (Please specify) :" class="def-input fullwidth mar-b-20" style="height: 81px;" name="celebrating_if_other" ><?= set_value('celebrating_if_other') ?></textarea>
                        </div>
                    </div>
                    <div class="clearfix" ></div>



                    <div class="col-md-6" >
                        <textarea placeholder="Your message:" class="def-input fullwidth mar-b-20" style="height: 150px;" name="message" ><?= set_value('message') ?></textarea>
                    </div>
                    <div class="col-md-6 def-select" >
                        <select class="def-input form-control" name="Your_Budget" >
                            <option value="" > Your Budget - per person </option>
                            <option> $100 - $499 </option>
                            <option> $500 - $999 </option>
                            <option> $1000 - $1499 </option>
                            <option> $1500 - $1999 </option>
                            <option> $2000 or Above </option>
                        </select>

                    </div>
                    <div class="clearfix mar-b-20"></div>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    <div class="g-recaptcha" data-sitekey="6Lf8HBMUAAAAAMciofnnmYeMLllzVdVhu4aACn1k"></div>


                    <div class="col-md-6">
                        <input type="submit" value="Send Message" class="def-btn btn-solid fullwidth mar-t-10">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


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