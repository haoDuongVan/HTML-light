<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <?php $lang = trim($data['lang']); ?>
    <title><?= $data['settings'][1]['value'][$lang]; ?></title>
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

    <!-- color scheme -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/color.css" type="text/css" id="colors">

    <!-- revolution slider custom css -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/rev-settings.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/fonts/elegant_font/HTML_CSS/lte-ie7.js" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<body class="page-contact">

    <div id="wrapper">
        <!-- header begin -->
        <header class="header-solid header-light">
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
                                <?php foreach ($data['navigations'] as $navigation): ?> 
                                    <li>
                                        <a href="<?= BASE_URL . $navigation['url']; ?>">
                                            <?= $navigation['title'][$lang]; // Hiển thị tên bằng tiếng Việt ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
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
                        <?php 
                        $contactHeading = 'contact_heading';
                        $contactSubheading = 'contact_subheading';

                        foreach ($data['sectionContents'] as $content) {
                            if ($content['section_key'] === 'contact_heading') {
                                $contactHeading = $content['content'][$lang] ?? 'Không có tiêu đề';
                            }
                            if ($content['section_key'] === 'contact_subheading') {
                                $contactSubheading = $content['content'][$lang] ?? 'Không có phụ đề';
                            }
                        }
                        ?>
                        <h1><?= $contactHeading; ?></h1>
                        <h2><span><?= $contactSubheading; ?></span></h2>

                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <section class="no-top no-bottom relative overflow-hidden">

                <div id="map" class="map-container-full">
                </div>

                <div class="color-overlay">



                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="de_tab tab_style_2">
                                    <ul class="de_nav">
                                        <?php $idx = 0; ?>
                                        <?php foreach ($data['contactCategories'] as $idx => $category): ?>
                                            <li class="<?= $idx === 0 ? 'active' : ''; ?> <?= $idx === 2 ? 'cust-map-toggle' : ''; ?>" <?= $idx === 0 ? 'data-wow-delay="0s"' : ''; ?>>
                                                <span><?= $category['name'][$lang]; ?></span>
                                                <div class="v-border"></div>
                                            </li>
                                            <?php $idx++; ?>
                                        <?php endforeach; ?>
  

                                            <!-- <li class="active" data-wow-delay="0s"><span>Our Address</span><div class="v-border"></div>
                                            </li>
                                            <li><span>Send Us Message</span><div class="v-border"></div>
                                            </li>
                                            <li class="cust-map-toggle"><span>View Map</span><div class="v-border"></div>
                                            </li> -->
                                    </ul>

                                    <div class="de_tab_content tc_style-1">

                                        <div id="tab1">

                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="icon_pin_alt fontsize48 id-color mb30"></i>
                                                    <h3>Address</h3>
                                                    <?= $data['settings'][5]['value'][$lang]; ?>
                                                </div>

                                                <div class="col-md-4 text-center">
                                                    <i class="icon_phone fontsize48 id-color mb30"></i>
                                                    <h3>Phone</h3>
                                                    <?= $data['settings'][3]['value']['value']; ?>
                                                </div>

                                                <div class="col-md-4 text-center">
                                                    <i class="icon_mail_alt fontsize48 id-color mb30"></i>
                                                    <h3>Email</h3>
                                                    <?php $mailto = $data['settings'][2]['value']['value']; ?>
                                                    <a href="mailto:<?= $mailto; ?>"><?= $mailto; ?></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div id="tab2">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <form name="contactForm" id='contact_form' method="post" action='email.php'>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id='name_error' class='error'>Please enter your name.</div>
                                                                <div>
                                                                    <input type='text' name='name' id='name' class="form-control" placeholder="<?= $data['placeholders']['name']['placeholder']; ?>">
                                                                </div>

                                                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                                                <div>
                                                                    <input type='text' name='email' id='email' class="form-control" placeholder="<?= $data['placeholders']['email']['placeholder']; ?>">
                                                                </div>

                                                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                                                <div>
                                                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="<?= $data['placeholders']['phone']['placeholder']; ?>">
                                                                </div>

                                                                <div id='message_error' class='error'>Please enter your message.</div>
                                                                <div>
                                                                    <textarea name='message' id='message' class="form-control" placeholder="<?= $data['placeholders']['message']['placeholder']; ?>"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 text-center">
                                                                <div id='submit'>
                                                                    <input type='submit' id='send_message' value='<?= $data['placeholders']['send_message']['placeholder']; ?>' class="btn-solid rounded">
                                                                </div>
                                                                <div id='mail_success' class='success'><?= $data['placeholders']['form']['success_message']; ?></div>
                                                                <div id='mail_fail' class='error'><?= $data['placeholders']['form']['error_message']; ?></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>




                        </div>
                    </div>
                </div>


            </section>



            <!-- footer begin -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="col-md-4">
                                <?= $data['settings'][4]['value']['value']; ?>                  
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
        <script src="<?= BASE_URL; ?>/public/js/validation.js"></script>
        <script src="<?= BASE_URL; ?>/public/js/wow.min.js"></script>
        <script src="<?= BASE_URL; ?>/public/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= BASE_URL; ?>/public/js/enquire.min.js"></script>
        <script src="<?= BASE_URL; ?>/public/js/jquery.stellar.min.js"></script>
        <script src="<?= BASE_URL; ?>/public/js/validation.js"></script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script src="<?= BASE_URL; ?>/public/js/map.js"></script>
        <script src="<?= BASE_URL; ?>/public/js/designesia.js"></script><!-- RS5.0 Core JS Files -->
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
</body>
</html>
