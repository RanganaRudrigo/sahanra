<footer class="footer">
    <div class="container extraspace">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-3-2 extspc">

                <div class="widget tag">
                    <h5 class="widget-title">Menu</h5>
                    <ul class="list-icon square-style list-border foter-usful-link">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="<?= ABOUT_US ?>">About Us</a></li>
                        <li><a href="<?=PRODUCT_SERVICES?>">Product and Services</a></li>
                        <li><a href="<?=PARTNERS?>">Partners</a></li>
                        <li><a href="<?=SUCCESS_STORIES?>">Success Stories</a></li>
                        <li><a href="<?=NEWS?>">Latest News</a></li>
                        <li><a href="<?=EVENTS?>">Events</a></li>
                        <li><a href="<?=GALLERY?>">Gallery</a></li>
                        <li><a href="<?=PUBLICATION?>">Publication</a></li>
                        <li><a href="<?=TESTIMONIAL?>">Testimonials</a></li>
                        <li><a href="<?=PRIVACY_POLICY?>">Privacy Policy</a></li>
                        <li><a href="<?=CAREER?>">Careers</a></li>
                        <li><a href="<?=CONTACT_US?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">

                <div class="widget tag ">
                    <h4 class="widget-title">Latest News</h4>
                </div>
                <?php foreach ($footer['news'] as $value): ?>
                    <div class="widget news-widget border-bottom-blue">
                        <div class="post-content">
                            <h6 class="post-title"><?=$value->NewsTitle?></h6>
                            <p><?= character_limiter($value->ShortDescription,80) ?></p>
                            <a class="post-date" href="#"><?= date('d M, Y',strtotime($value->NewsDate)) ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 extspc">

                <div class="widget tag">
                    <h5 class="widget-title">Downloads</h5>
                    <ul class="list-icon square-style list-border foter-usful-link">
                        <?php foreach ($footer['downloads'] as $value): ?>
                            <li><a target="_parent" href="<?= UP.$value->DownloadFile  ?>"><?= $value->DownloadTitle  ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="widget social-feed">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="feed-widget"> <a href="#"><i class="fa fa-rss rss-color" aria-hidden="true"></i></a>
                                <div class="social-link">
                                    <div class="title">Subscribe</div>
                                    <div class="sub-title">to RSS Feed</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="feed-widget"> <a href="#"><i class="fa fa-twitter twitt-color" aria-hidden="true"></i></a>
                                <div class="social-link">
                                    <div class="title">Follow Us</div>
                                    <div class="sub-title">on Twitter</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="feed-widget"> <a href="#"><i class="fa fa-facebook facebk-color" aria-hidden="true"></i></a>
                                <div class="social-link">
                                    <div class="title">Find Us</div>
                                    <div class="sub-title">on Facebook</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="feed-widget"> <a href="#"><i class="fa fa-google-plus gplus-color" aria-hidden="true"></i></a>
                                <div class="social-link">
                                    <div class="title">Find Us</div>
                                    <div class="sub-title">on Google+</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="feed-widget"> <a href="#"><i class="fa fa-pinterest pin-color" aria-hidden="true"></i></a>
                                <div class="social-link">
                                    <div class="title">Follow Us</div>
                                    <div class="sub-title">on Pinterest</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="feed-widget"> <a href="#"><i class="fa fa-dribbble drbl-color" aria-hidden="true"></i></a>
                                <div class="social-link">
                                    <div class="title">Follow Us</div>
                                    <div class="sub-title">on Dribbble</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 spacingd">
                <div class="widget footer-logo border-bottom-blue">
                    <h5 class="widget-title">Contact Us</h5>
                    <div class="widget social-feed">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="feed-widget"> <a href="#"><i class="fa fa-map rsss-color" aria-hidden="true"></i></a>
                                    <div class="social-link">

                                        <div class="sub-title">'ABC Court' 117, Hunupitiya Lake Road, Colombo - 02, Sri Lanka.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="feed-widget"> <a href="#"><i class="fa fa-phone rsss-color" aria-hidden="true"></i></a>
                                    <div class="social-link">

                                        <div class="sub-title">+94 112 438 951 / +94 112 430 170</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="feed-widget"> <a href="#"><i class="fa fa-fax rsss-color" aria-hidden="true"></i></a>
                                    <div class="social-link">

                                        <div class="sub-title"> +94 112 438 956 / +94 112 446 117</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="feed-widget"> <a href="#"><i class="fa fa-envelope rsss-color" aria-hidden="true"></i></a>
                                    <div class="social-link">

                                        <div class="sub-title"> info@sahanracapital.lk</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="feed-widget"> <a href="#"><i class="fa fa-envelope rsss-color" aria-hidden="true"></i></a>
                                    <div class="social-link">

                                        <div class="sub-title">www.sahanracapital.lk</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <h4 style=" color:#fff;">Branch</h4>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="feed-widget"> <a href="#"><i class="fa fa-map rsss-color" aria-hidden="true"></i></a>
                                    <div class="social-link">

                                        <div class="sub-title">202, Ambagamuwa, Gampola, Sri Lanka. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="feed-widget"> <a href="#"><i class="fa fa-phone rsss-color" aria-hidden="true"></i></a>
                                    <div class="social-link">

                                        <div class="sub-title">+94 112 438 951 / +94 112 430 170</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid copy-right">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center tac-smd">
                <p class="copyright">Copyright 2017 Sahanra Capital Corporation Limited All Rights Reserved.   |  Powered by IT MARTX </p>
            </div>
        </div>
    </div>
</footer>