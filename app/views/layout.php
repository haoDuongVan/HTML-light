<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Delizus - Restaurant  Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Delizus is the most complete restaurantwebsite template">
    <meta name="keywords" content="restaurant,cafe,event.multipurpose,onepage,responsive,minimal,bootstrap,theme">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="<?= BASE_URL; ?>/public/js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/plugin.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/style.css" type="text/css"><!-- custom background -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/bg.css" type="text/css">

    <!-- additional css files -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/datepicker.css" type="text/css">

    <!-- revolution slider custom css -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/rev-settings.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/et-line-font/style.css" type="text/css">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/public/revolution/css/settings.css">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/public/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/public/revolution/css/navigation.css">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col"><span class="id-color"><i class="fa fa-map-marker"></i></span>Collins Street West, Victoria 8007 Australia </div>
                            <div class="col"><span class="id-color"><i class="fa fa-clock-o"></i></span>Monday - Friday 08:00-16:00</div>
                            <div class="col"><span class="id-color"><i class="fa fa-phone"></i></span>1800.899.900</div>
                            <div class="col">
                                <div id="lang-selector" class="dropdown">
                                    <a href="#" class="btn-selector">English</a>
                                    <ul>
                                        <li class="active"><a href="#">English</a></li>
                                        <li><a href="#">France</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Spain</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <!-- social icons -->
                            <div class="col social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?= BASE_URL; ?>/">
                                <img class="logo" src="<?= BASE_URL; ?>/public/images/logo.png" alt="">
                                <img class="logo-2" src="<?= BASE_URL; ?>/public/images/logo-2.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="<?= BASE_URL; ?>/">Home</a></li>
                                <li><a href="<?= BASE_URL; ?>/menu">Menu</a></li>
                                <li><a href="<?= BASE_URL; ?>/book">Book</a></li>
                                <li><a href="<?= BASE_URL; ?>/contact">Contact</a></li>
                            </ul>

                        </nav>
                        
                        <!-- Language Dropdown -->
                         
                        <div class="language-selector">
                            <!-- Nút hiển thị ngôn ngữ mặc định (Tiếng Việt) -->
                             
                            <button class="language-btn">
                                <img src="<?= BASE_URL; ?>/public/images/flags/vi.png" alt="Vietnam Flag" class="flag-icon">
                                <span>Tiếng Việt</span>
                                <i class="arrow"></i>
                            </button>
                            <!-- Dropdown menu -->
                            <ul class="language-menu">
                                <li data-lang="vi">
                                    <img src="<?= BASE_URL; ?>/public/images/flags/vi.png" alt="Vietnam Flag" class="flag-icon"> Tiếng Việt 
                                </li>
                                <li data-lang="en">
                                    <img src="<?= BASE_URL; ?>/public/images/flags/en.png" alt="English Flag" class="flag-icon"> English 
                                </li>
                                <li data-lang="jp">
                                    <img src="<?= BASE_URL; ?>/public/images/flags/jp.png" alt="Japanese Flag" class="flag-icon"> 日本語 
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- Main Content -->
        <main>
            <?php require_once $view; ?>
        </main>


        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="col-md-4">
                            &copy; Copyright 2025 - Delizus by AutoTeam                     
                        </div>
                        <div class="col-md-4 text-center">
                            <img class="logo" src="<?= BASE_URL; ?>/public/images/logo.png" alt="">
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="<?= BASE_URL; ?>/public/js/jquery.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/bootstrap.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/jquery.isotope.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/easing.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/jquery.flexslider-min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/jquery.scrollto.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/owl.carousel.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/jquery.countTo.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/classie.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/video.resize.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/validation-reservation.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/wow.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/enquire.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/jquery.stellar.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/designesia.js"></script><!-- additional js files -->
    <script src="<?= BASE_URL; ?>/public/js/bootstrap-datepicker.js"></script>

    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>

    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.migration.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            // revolution slider
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                delay: 3300,
                navigation: {
                    arrows: { enable: true }
                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 600,
                disableProgressBar: "on"
            });


            // date picker settings
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(),
				nowTemp.getDate(), 0, 0, 0, 0);
            var checkin = $('#date').datepicker({
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ?
						'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                if (ev.date.valueOf() > checkin.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkin.setValue(newDate);
                }
                checkin.hide();
            }).data('datepicker');
        });
    </script>


</body>
</html>
