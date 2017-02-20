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
        #map {
            width: 100%;
            height: 437px;
        }
    </style>
</head>

<body class="navbar-fixed">
<!-- Header Begin -->
<?php $this->view('inc/header') ?>
<!-- Header End -->

<!-- Banner Small Begin -->
<section class="section banner-small parallax-section valign-wrap" style="background: url('<?= UP.$tour->BannerImage ?>'); background-size: cover;">
    <div class="overlay"></div>
    <div class="content-wrap valign-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="title wow animated fadeInUp"><h1><?= $tour->TourTitle ?></h1></div>
                <div class="subtitle wow animated fadeIn"><h2><?= $tour->ShortDescription ?></h2></div>
            </div>
        </div>
    </div><!--/.content-wrap -->
</section><!--/.banner-small -->
<!-- Banner Small End -->

<!-- Iconic Title Begin -->
<div class="container">
    <div class="iconic-title text-center col-md-12 no-h-padding sec-hq-pad-t sec-q-pad-b">

        <div class="col-md-12 no-h-padding">
            <div class="title wow animated fadeInUp"><h1><?= $tour->TourTitle ?></h1></div>
        </div>
    </div>
</div>
<!-- Iconic Title End -->

<!-- Banner Carousel Begin -->
<section class="banner-carousel">
    <div class="container container-medium">
        <div class="col-md-12 no-h-padding">
            <div id="banner-carousel-alt" class="carousel slide wow animated fadeIn" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <?php foreach ( json_decode($tour->MoreImage) as $k =>  $image ): ?> 
                        <figure class="item <?= !$k ? 'active':'' ?>">
                            <img src="<?= UP.$image?>"  >
                        </figure><!--/.item -->
                    <?php endforeach; ?> 
                </div><!--/.carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#banner-carousel-alt" role="button" data-slide="prev">
                    <div class="control-button def-btn btn-solid left"><i class="fa fa-angle-left"></i></div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#banner-carousel-alt" role="button" data-slide="next">
                    <div class="control-button def-btn btn-solid right"><i class="fa fa-angle-right"></i></div>
                    <span class="sr-only">Next</span>
                </a>
            </div><!--/.carousel -->
        </div>
    </div><!--/.container -->
</section><!--/.banner-carousel -->
<!-- Banner Carousel End -->

<!-- Portfolio Single Section Begin -->
<section class="portfolio-single container-fluid no-h-padding" id="portfolio">
    <div class="container-medium clearfix sec-hq-pad">
        <div class="row">
            <div class="col-md-12 description margin-responsive">
                <h3 class="textbold wow animated fadeIn mar-b-20">Description</h3>
                <?= $tour->Description ?>
            </div>
        </div>
        <div class="row "  >
            <div class="col-md-6 description margin-responsive">
                <?php foreach ( json_decode($tour->TourDays) as $k => $days ):  ?>
                    <div class="single-blog-post-text">
                        <h4> Day <?= $k ?> </h4>
                        <?= $days ?>
                    </div>
                <?php endforeach;  ?>
            </div>
            <div class="col-md-6 client-testimonial">
                <div id="map" class="client-bio wow animated fadeIn"  > </div>
            </div>
        </div>
    </div>
</section><!--/.portfolio-single -->

<!-- Footer Begin -->
<?php $this->view('inc/footer') ?>
<!-- Footer End -->
<input type="hidden" id="mapCenter" value="7.843296,80.683442" >
<input type="hidden" id="itinLocations" value="<?php foreach ($destinations as $destination) $d[] = $destination->Map;  echo implode(";",$d); ?>" >

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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&key=AIzaSyC9zJ2nP5_nbv2XbJv-c3YZEhJct0GQwNs"></script>
<script>
    var map;
    google.maps.event.addDomListener(window, 'load', initMap);

    function initMap() {
        var start , end , waypoints = [];
        var center = document.getElementById("mapCenter").value.split(",") ;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: new google.maps.LatLng(center[0], center[1])
        });
        directionsDisplay.setMap(map);

        var cities = document.getElementById("itinLocations").value.split(";") ;
        for (var i in cities ){
            var loc = cities[i].split(",") ;
            console.log(loc[0]+ "," + loc[1]);
            if(i == 0){
                start = new google.maps.LatLng(loc[0], loc[1]) ;
            }else if(i == cities.length - 1 ){
                end = new google.maps.LatLng(loc[0],loc[1]) ;
            }else{
                waypoints.push({location: new google.maps.LatLng(loc[0],loc[1]) });
            }
        }

        directionsService.route({
            origin: start,
            destination: end,
            waypoints: waypoints ,
            travelMode: 'DRIVING'
        }, function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });

        map.setCenter(new google.maps.LatLng(center[0], center[1]));
    }

</script>
</body>