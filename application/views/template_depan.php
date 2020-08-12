<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title><?= $title ?></title>

    <link rel="shorcut icon" href="<?php echo base_url() . 'assets/images/logo/icon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/magnific-popup.css' ?>">
    <!-- Image Hover CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/normalize.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/set2.css' ?>" />

    <!-- Masonry Gallery -->
    <link href="<?php echo base_url() . 'theme/css/animated-masonry-gallery.css' ?>" rel="stylesheet" type="text/css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>+62 821 2197 0603
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>tk-islam-al-wakaf@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Gambir, Jakarta Pusat, INA. 10140
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url() . 'assets/images/logo/logo.png' ?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about'); ?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('psb'); ?>">Info PSB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru'); ?>">Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswa'); ?>">Siswa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('gallery'); ?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- <button id="topBtn"><i class="fas fa-arrow-up"></i></button> -->

    <!-- SCROLL TOP BUTTON -->
    <button id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <!-- END SCROLL TOP BUTTON -->

    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <!--=========================== CONTENTS ============================-->

    <?= $contents ?>

    <!--============================= FOOTER =============================-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo base_url() . 'assets/images/logo/logo.png' ?>" class="img-fluid pr-12" alt="footer_logo">
                        </a>
                        <p class="text-center"><?php echo date('Y'); ?> Copyright © TK ISLAM AL-WAKAF.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                            <li><a href="<?php echo site_url('psb'); ?>">Info PSB</a></li>
                            <li><a href="<?php echo site_url('gallery'); ?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Sekolah</h3>
                        <ul>
                            <li><a href="<?php echo site_url('guru'); ?>">Guru</a></li>
                            <li><a href="<?php echo site_url('siswa'); ?>">Siswa </a></li>
                            <li><a href="<?php echo site_url('agenda'); ?>">Agenda</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p>Alamat : Gambir, Jakarta Pusat, INA. 10140 <br>
                            Email : tk-islam-al-wakaf@gmail.com <br>
                            Telp. : +62 821 2197 0603</p>
                        <!-- <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>



    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->

    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/jquery-ui-1.10.4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/jquery.isotope.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/animated-masonry-gallery.js' ?>"></script>
    <!-- Magnific popup JS -->
    <script src="<?php echo base_url() . 'theme/js/jquery.magnific-popup.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>