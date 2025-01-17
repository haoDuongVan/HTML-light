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
	<script src="js/html5shiv.js"></script>
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

    <!-- color scheme -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/color.css" type="text/css" id="colors">

    <!-- revolution slider custom css -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/rev-settings.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/elegant_font/HTML_CSS/lte-ie7.js" type="text/css">
</head>
<body class="page-book">

    <div id="wrapper">
        <!-- header begin -->
        <header class="header-solid header-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?= BASE_URL; ?>/public/index.html">
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

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Book</h1>
                        <h2><span>Make a Reservation</span></h2>

                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row-fuild display-table">
                            <div class="col-md-6">
                                <div data-bgcolor="#111111" class="padding60 text-center text-light shadow-soft">
                                    <div class="row">
                                        <form name="contactForm" id='contact_form' class="form-dark" method="post" action='reservation.php'>
                                            <div class="col-md-4 mb10">
                                                <input type='text' name='date' id='date' class="form-control" placeholder="Date">
                                            </div>
                                            <div class="col-md-4 mb10">
                                                <input type='text' name='time' id='time' class="form-control" placeholder="Time">
                                            </div>
                                            <div class="col-md-4 mb10">
                                                <input type='text' name='person' id='person' class="form-control" placeholder="Person">
                                            </div>
                                            <div class="col-md-6 mb10">
                                                <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                            </div>
                                            <div class="col-md-6 mb10">
                                                <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                            </div>
                                            <div class="col-md-12 mb10">
                                                <textarea name='message' id='message' class="form-control" placeholder="Any Message?"></textarea>
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <div id='submit'>
                                                    <input type='submit' id='send_message' value='Submit Form' class="btn-solid rounded">
                                                </div>
                                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 text-center middle" data-bgcolor="#eee">

                                <div class="padding60">
                                    <h2>We're Open<span class="teaser">Everyday!</span></h2>
                                    <p>
                                        Monday - Friday<br>
                                        <strong>08.00 - 21.00</strong>
                                    </p>
                                    <span class="small-border"></span>
                                    <p>
                                        Saturday &amp Sunday<br>
                                        <strong>10.00 - 23.00</strong>
                                    </p>
                                </div>

                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

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

        <a href="<?= BASE_URL; ?>/" id="back-to-top"></a>
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
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        jQuery(document).ready(function () {
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
