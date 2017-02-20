<!-- Navbar Start -->
<div class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top megamenu">
        <div class="top-content">
            <div class="container">
                <ul>
                    <li>
                        <i class="pe-7s-map-marker"></i>
                        Lewis place negombo Negombo
                    </li>
                    <li>

                        <i class="pe-7s-call"></i>
                        +94 77 998 4609
                    </li>
                    <li>
                        <i class="pe-7s-mail"></i>
                        info@mbstravels
                    </li>
                </ul>
                <ul class="pull-right" style="padding-right: 0;" >
                    <li>
                        <a href="<?= base_url() ?>" ><i class="fa fa-home"></i>
                            Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Testimonial') ?>" > Testimonial </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Contact-us') ?>" ><i class="fa fa-phone"></i>
                            Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Navbar Begin -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand no-effect" href="<?= base_url() ?>"><img src="<?=base_url()?>images/logo.png" alt=""></a>
            </div><!--/.navbar-header -->
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="<?= base_url() ?>"  >Home</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('About-SriLanka') ?>" >About Sri Lanka</a>

                    </li>
                    <li class="">
                        <a href="<?= base_url('tours') ?>"  >Tours</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('destination') ?>" >Destination</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('gallery') ?>"  >Gallery</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('About-us') ?>"  >About Us</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('Tailor-made-holiday') ?>"  >Tailor Made Holiday</a>
                    </li>

                </ul><!--/.navbar-nav -->
            </div><!--/.nav-collapse -->
        </div>
    </nav><!-- /.megamenu -->
</div>
<!-- Navbar End -->

<script>
    $(function () {
        $("#navbar a").each(function() {
            if(location.href == this.href){
                $(this).parent().addClass('active');
            }
        });

    })
</script>