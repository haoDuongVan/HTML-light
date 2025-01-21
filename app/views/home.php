<?php $lang = trim($data['lang']); ?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="utf-8">
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

    <!-- additional css files -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/datepicker.css" type="text/css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/bootstrap-timepicker.min.css" type="text/css">

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
                                    <?php
                                    // Xác định ngôn ngữ hiện tại
                                    $langConfig = [
                                        'vi' => ['name' => 'Tiếng Việt', 'flag' => 'vi.png'],
                                        'en' => ['name' => 'English', 'flag' => 'en.png'],
                                        'jp' => ['name' => '日本語', 'flag' => 'jp.png'],
                                    ];
                                    $currentLang = $langConfig[$lang] ?? $langConfig['vi'];
                                    ?>
                                    <!-- Hiển thị ngôn ngữ hiện tại -->
                                    <a href="#" class="btn-selector">
                                        <img src="<?= BASE_URL; ?>/public/images/flags/<?= $currentLang['flag']; ?>" alt="<?= $currentLang['name']; ?> Flag" class="flag-icon">
                                        <?= $currentLang['name']; ?>
                                    </a>

                                    <!-- Danh sách các ngôn ngữ -->
                                    <ul>
                                        <?php foreach ($langConfig as $code => $info): ?>
                                            <li data-lang="<?= $code; ?>" class="<?= $lang === $code ? 'active' : ''; ?>">
                                                <a href="?lang=<?= $code; ?>">
                                                    <img src="<?= BASE_URL; ?>/public/images/flags/<?= $info['flag']; ?>" alt="<?= $info['name']; ?> Flag" class="flag-icon">
                                                    <?= $info['name']; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
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
                                <?php foreach ($data['navigations'] as $navigation): ?> 
                                    <li>
                                        <a href="<?= BASE_URL . $navigation['url']; ?>">
                                            <?= $navigation['title'][$lang]; // Hiển thị tên bằng tiếng Việt ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                        <!-- mainmenu close -->

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                <div id="revolution-slider">
                    <ul>
                        <?php foreach ($data['sliders'] as $slider): ?>
                            <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                                <!--  BACKGROUND IMAGE -->
                                <img src="<?= BASE_URL . $slider['image']; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />

                                <div class="tp-caption very-big-white"
                                    data-x="center"
                                    data-y="220"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
                                    data-transform_out="opacity:0;x:-10;px;s:800;e:Power3.easeInOut;"
                                    data-start="700"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on">
                                    <?= $slider['title'][$lang]; ?>
                                </div>

                                <div class="tp-caption text-center"
                                    data-x="center"
                                    data-y="300"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                                    data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                                    data-start="1100">
                                    <?= $slider['description'][$lang]; ?>
                                </div>

                                <div class="tp-caption"
                                    data-x="center"
                                    data-y="410"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                                    data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                                    data-start="1200">
                                    <?php foreach ($slider['buttons'] as $button): ?>
                                        <a href="<?= BASE_URL . $button['url']; ?>" class="btn-slider rounded"><?= $button['text'][$lang]; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>
            <!-- revolution slider close -->

            <!-- section begin -->
            <section id="section-features" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php 
                            $featuresHeading = '';
                            $featuresSubheading = '';

                            foreach ($data['sectionContents'] as $content) {
                                if ($content['section_key'] === 'features_heading') {
                                    $featuresHeading = $content['content'][$lang] ?? 'Không có tiêu đề';
                                }
                                if ($content['section_key'] === 'features_subheading') {
                                    $featuresSubheading = $content['content'][$lang] ?? 'Không có phụ đề';
                                }
                            }
                            ?>
                                <h2><?= $featuresHeading; ?><span class="teaser"><?= $featuresSubheading; ?></span><span class="small-border center"></span></h2>
                        </div>

                            <?php foreach ($data['menuByCategory']['special'] as $item): ?>
                                <div class="col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay="<?= $index * 0.3 ?>s">
                                    <div class="menu-item">
                                        <figure class="pic-hover hover-scale mb10">
                                            <span class="center-xy">
                                                <a class="image-popup" href="<?= BASE_URL . $item['image']; ?>"></a>
                                            </span>
                                            <span class="bg-overlay"></span>
                                            <span class="border-overlay"></span>
                                            <img src="<?= BASE_URL . $item['image']; ?>" class="img-responsive" alt="">
                                        </figure>

                                        <h3><?= $item['name'][$lang]; ?></h3>
                                        <span class="id-color"><?= $item['price']; ?> 円</span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-services-tab" aria-label="section-services-tab">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <?php 
                        $menuHeading = 'menu_heading';
                        $menuSubheading = 'menu_subheading';

                        foreach ($data['sectionContents'] as $content) {
                            if ($content['section_key'] === 'menu_heading') {
                                $menuHeading = $content['content'][$lang] ?? 'Không có tiêu đề';
                            }
                            if ($content['section_key'] === 'menu_subheading') {
                                $menuSubheading = $content['content'][$lang] ?? 'Không có phụ đề';
                            }
                        }
                        ?>
                        <h2><?= $menuHeading; ?><span class="teaser"><?= $menuSubheading; ?></span><span class="small-border center"></span></h2>
                    </div>

                    <div class="col-md-12 mb60">
                        <div class="de_tab tab_style_2">
                            <ul class="de_nav">
                                <?php $index = 0; // Biến đếm ?>
                                <?php foreach ($data['menuCategories'] as $category): ?>
                                    <li class="<?= $index === 0 ? 'active' : ''; ?>" data-link="#section-services-tab">
                                        <span><?= $category['name'][$lang]; ?></span><div class="v-border"></div>
                                    </li>
                                    <?php $index++; // Tăng biến đếm ?>
                                <?php endforeach; ?>
                            </ul>

                            <div class="de_tab_content">

                                <div id="tab1" class="tab_single_content">
                                    <div class="row">
                                        <?php foreach ($data['menuByCategory']['main'] as $item): ?>
                                            <div class="col-md-6 mb30">
                                                <div class="post-menu">
                                                    <img src="<?= BASE_URL . $item['image']; ?>" class="img-responsive" alt="">
                                                    <div class="sub-item-service meta">
                                                        <div class="c1"><?= $item['name'][$lang]; ?></div>
                                                        <div class="c2"></div>
                                                        <div class="c3"><?= $item['price']; ?>  円</div>
                                                    </div>
                                                    <div class="service-text meta-content"><?= $item['description'][$lang]; ?></div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div id="tab2" class="tab_single_content">
                                    <div class="row">
                                        <?php foreach ($data['menuByCategory']['starter'] as $item): ?>
                                            <div class="col-md-6 mb30">
                                                <div class="post-menu">
                                                    <img src="<?= BASE_URL . $item['image']; ?>" class="img-responsive" alt="">
                                                    <div class="sub-item-service meta">
                                                        <div class="c1"><?= $item['name'][$lang]; ?></div>
                                                        <div class="c2"></div>
                                                        <div class="c3"><?= $item['price']; ?>  円</div>
                                                    </div>
                                                    <div class="service-text meta-content"><?= $item['description'][$lang]; ?></div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                        <div class="clearfix"></div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>

                                <div id="tab3" class="tab_single_content">
                                    <div class="row">
                                        <?php foreach ($data['menuByCategory']['drink'] as $item): ?>
                                            <div class="col-md-6 mb30">
                                                <div class="post-menu">
                                                    <img src="<?= BASE_URL . $item['image']; ?>" class="img-responsive" alt="">
                                                    <div class="sub-item-service meta">
                                                        <div class="c1"><?= $item['name'][$lang]; ?></div>
                                                        <div class="c2"></div>
                                                        <div class="c3"><?= $item['price']; ?>  円</div>
                                                    </div>
                                                    <div class="service-text meta-content"><?= $item['description'][$lang]; ?></div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                        <div class="clearfix"></div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section id="section-book-form" class="no-top no-bottom" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3">
                        <div data-bgcolor="#111111" class="padding60 text-center text-light mt-50 mb-50 shadow-soft wow fadeInUp">
                            <?php 
                            $formHeading = 'form_heading';
                            $formSubheading = 'form_subheading';

                            foreach ($data['sectionContents'] as $content) {
                                if ($content['section_key'] === 'form_heading') {
                                    $formHeading = $content['content'][$lang] ?? 'Không có tiêu đề';
                                }
                                if ($content['section_key'] === 'form_subheading') {
                                    $formSubheading = $content['content'][$lang] ?? 'Không có phụ đề';
                                }
                            }
                            ?>
                            <h2><?= $formHeading; ?><span class="teaser center"><?= $formSubheading; ?></span><span class="small-border center"></span></h2>

                            <div class="row">
                                <form name="contactForm" id="contact_form" class="form-dark" method="post" action="index.php?url=HomeController/bookTable">
                                    <div class="col-md-6 mb10">
                                        <input type="text" name="date" id="date" class="form-control" placeholder="<?= $data['placeholders']['date']['placeholder']; ?>">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type="text" name="time" id="time" class="form-control" placeholder="<?= $data['placeholders']['time']['placeholder']; ?>">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type="text" name="table" id="table" class="form-control" placeholder="<?= $data['placeholders']['table']['placeholder']; ?>">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type="text" name="person" id="person" class="form-control" placeholder="<?= $data['placeholders']['person']['placeholder']; ?>">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="<?= $data['placeholders']['name']['placeholder']; ?>">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="<?= $data['placeholders']['email']['placeholder']; ?>">
                                    </div>
                                    <div class="col-md-12 mb10">
                                        <textarea name="message" id="message" class="form-control" placeholder="<?= $data['placeholders']['message']['placeholder']; ?>"></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div id="submit">
                                            <input type="submit" id="send_message" value="<?= $data['placeholders']['send_message']['placeholder']; ?>" class="btn-solid rounded">
                                        </div>
                                        <div id="mail_success" class="success"><?= $data['placeholders']['form']['success_message']; ?></div>
                                        <div id="mail_fail" class="error"><?= $data['placeholders']['form']['error_message']; ?></div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- section begin -->
            <section id="section-news">
                <div class="container">
                    <div class="row">
                    
                    </div>
                </div>
            </section>
            <!-- section close -->



        </div>


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
    <script src="<?= BASE_URL; ?>/public/js/validation-reservation.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/wow.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/enquire.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/jquery.stellar.min.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/designesia.js"></script><!-- additional js files -->
    <script src="<?= BASE_URL; ?>/public/js/bootstrap-datepicker.js"></script>
    <script src="<?= BASE_URL; ?>/public/js/bootstrap-timepicker.min.js"></script>

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
            // revolution slider
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                delay: 3500,
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

            // Time picker settings
            $('#time').timepicker({
                showMeridian: false, // 24-hour format
                minuteStep: 15, // Step size for minutes
                defaultTime: false, // Set default time to current time
                showInputs: false,
                disableFocus: true,
                template: 'dropdown',
                maxHours: 24,
                snapToStep: true
            }).on('focus', function() {
                var currentTime = new Date();
                var hours = currentTime.getHours();
                var minutes = currentTime.getMinutes();
                if (hours < 9) {
                    hours = 9;
                    minutes = 0;
                } else if (hours >= 24) {
                    hours = 23;
                    minutes = 45;
                }
                $(this).timepicker('setTime', hours + ':' + (minutes < 10 ? '0' : '') + minutes);
            });

            // Giới hạn thời gian từ 9h sáng đến 12h đêm
            $('#time').timepicker().on('changeTime.timepicker', function(e) {
                var hours = e.time.hours;
                var minutes = e.time.minutes;
                if (hours < 9) {
                    $(this).timepicker('setTime', '09:00');
                } else if (hours >= 24) {
                    $(this).timepicker('setTime', '23:45');
                }
            });
    </script>


</body>
</html>
