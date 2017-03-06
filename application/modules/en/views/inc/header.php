<header class="header-package">
    <div class="header-top-sector">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-2">
                <div class="widget contact-num left-1">
                    <ul class="list-inline">
                        <li><a href="callto:+94112438951"><i class="fa fa-phone"></i>+94 112 438 951</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3-1">
                <div class="widget contact-num left-1">
                    <ul class="list-inline">
                        <li><a href="mailto:<?=EMAIL?>"><i class="fa fa-envelope"></i><?=EMAIL?></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8-1">
                <div class="widget langu pull-right spacing">
                    <ul class="list-inline lang-cart">
                        <li><a class="carts-icon" href="<?=base_url()?>">Home</a> &nbsp;&nbsp; | <a class="carts-icon" href="<?=base_url(CONTACT_US)?>">Contact Us &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        <li class="border-right-two">
                            <div class="dropdown">
                                <button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" id="dropdownMenu1" type="button" class="btn read-more-btn-two btn-sm lang dropdown-toggle">
                                    English <span class="caret"></span>
                                </button>
                                <ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
                                    <li><a href="<?=base_url('si')?>"> Sinhala</a></li>
                                    <li><a href="<?=base_url('tn')?>"> Tamil</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>




    <div class="header-nav">
        <div class="main-header-nav scrollingto-fixed">
            <div class="container">
                <nav id="menuzord" class="menuzord blue"> <a href="<?=base_url(HOME)?>" class="menuzord-brand"><img src="<?=base_url()?>images/header-logo.png" alt=""></a>
                    <ul class="menuzord-menu">
                        <li><a href="#">About Us</a>
                            <ul class="dropdown">
                                <li><a href="<?= base_url(ABOUT_US) ?>">Overview & Objectives</a></li>
                                <li><a href="<?= base_url(ABOUT_US_CHAIRMAN) ?>">Chairman Message </a></li>
                                <li><a href="<?= base_url(ABOUT_US_BOARD_DIRECTORS) ?>">Board of Directors</a></li>
                                <li><a href="<?= base_url(ABOUT_US_OUR_SUBSIDIARIES) ?>">Our Subsidiaries</a></li>
                                <li><a href="<?= base_url(ABOUT_US_MILESTONES) ?>">Milestones</a></li>
                                <li><a href="<?= base_url(ABOUT_US_CSR) ?>">CSR</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url(PRODUCT_SERVICES) ?>">Product and Services</a></li>
                        <li><a href="<?= base_url(PARTNERS) ?>">Partners</a></li>
                        <li><a href="<?= base_url(SUCCESS_STORIES) ?>">Success Stories</a></li>
                        <li><a href="<?= base_url(PUBLICATION) ?>">Publication</a></li>
                        <li><a href="<?= base_url(CAREER) ?>">Careers</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>