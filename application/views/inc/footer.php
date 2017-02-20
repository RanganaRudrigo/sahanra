<footer>
    <div class="column-container">
        <div class="container">

            <div class="col-md-3 col-sm-3">
                <div class="footer-column margin-responsive">
                    <div class="title">
                        <h4 class="underlined-heading">Contact Us</h4>
                    </div>
                    <div class="content">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="pe-7s-map-marker pe-2x"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <p>Lewis place negombo
                                    Negombo</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="pe-7s-phone pe-2x"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <p> +94 77 998 4609</p>
                                <p>+94 77 998 4609</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="pe-7s-mail pe-2x"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <p>info@mbstravels</p>

                            </div>
                        </div>
                    </div><!--/.content -->
                </div><!--/.footer-column -->
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="footer-column margin-responsive footer-menu">
                    <div class="title">
                        <h4 class="underlined-heading">Menu</h4>
                    </div>

                    <ul>
                        <li> <a href="<?=base_url()?>">Home</a></li>
                        <li><a href="<?= base_url('About-us') ?>">About Us</a></li>
                        <li><a href="<?= base_url('tours') ?>">Tours</a></li>
                        <li> <a href="<?= base_url('About-SriLanka') ?>">About Sri Lanka</a></li>
                        <li><a href="<?= base_url('gallery') ?>">Gallery</a></li>
                    </ul>

                </div><!--/.footer-column -->
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="footer-column margin-responsive footer-menu">
                    <div class="title" style="margin-bottom: 44px" >
                        <h4 class="">&nbsp;</h4>
                    </div>

                    <ul>
                        <li><a href="<?= base_url('destination') ?>">Destination</a></li>
                        <li><a href="<?= base_url('Tailor-made-holiday') ?>">Tailor Made Holiday</a></li>
                        <li><a href="<?= base_url('Testimonial') ?>">Testimonials</a></li>
                        <li><a href="<?= base_url('Special-Offers') ?>">Special Offers</a></li>
                        <li><a href="<?= base_url('Contact-us') ?>">Contact Us</a></li>
                    </ul>

                </div><!--/.footer-column -->
            </div>
            <div class="col-md-3 col-sm-3 contact-us">
                <div class="footer-column margin-responsive">
                    <div class="title">
                        <h4 class="underlined-heading">Subscribe</h4>
                    </div>
                    <div class="content">
                        <p>Marsh mallow muffin soufflé jelly-o tart cake Marsh mallow macaroon jelly jubes dont dragee ice cream dessert </p>
                        <span id="subscribe-success" style="display: none" class="text-success" > Thank you for Subscribe US </span>
                        <span id="subscribe-error" style="display: none" class="text-danger" >  </span>
                        <form id="subscribe" class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="Email" required class="form-control def-input" placeholder="Your Email">
                                    <div class="input-group-btn">
                                        <button   class="def-btn btn-solid">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.content -->
                </div><!--/.footer-column -->
            </div><!--/.contact-us -->

        </div><!--/.container -->
    </div><!--/.column-container -->

    <div class="copyright col-md-12 no-h-padding">
        <div class="left-section col-md-6 col-sm-6"></div>
        <div class="container content-wrap">
            <div class="content">
                <div class="col-md-6 col-sm-6 col-xs-6 left-content">MBS Travels & Tours Sri Lanka &copy; All Right Reserved  | Powered by IT MARTX</div>
                <div class="col-md-6 col-sm-6 col-xs-6  right-content text-right">
                    <div class="social-media">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>

                    </div>
                </div>
            </div><!--/.content -->
        </div><!--/.content-wrap -->
    </div><!--/.copyright -->
</footer>

<script>
    $(function () {
        $('#subscribe').submit(function (e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url : '<?= base_url('api/subscribe') ?>',
                data : form.serializeArray() ,
                dataType: 'json',
                success : function (json) {
                    if(json['hasError']) {
                        $('#subscribe-error').html(json['Error']).show('slow').fadeOut(3000);
                    }else{
                        $('#subscribe-success').show('slow').fadeOut(3000).val("");
                    }
                }
            });
        });
    })
</script>