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
                        <h1><?= $formHeading; ?></h1>
                        <h2><span><?= $formSubheading; ?></span></h2>

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
                                        <form name="contactForm" id="contact_form" class="form-dark" method="post" action="index.php?url=BookController/bookTable">
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

                            <div class="col-md-6 text-center middle" data-bgcolor="#eee">

                                <div class="padding60">
                                    <?php 
                                    $openHeading = 'open_title';
                                    $openSubheading = 'open_subtitle';
                                    $weekdayHours = 'weekday_hours';
                                    $weekendHours = 'weekend_hours';

                                    foreach ($data['sectionContents'] as $content) {
                                        if ($content['section_key'] === 'open_title') {
                                            $openHeading = $content['content'][$lang] ?? 'Không có tiêu đề';
                                        }
                                        if ($content['section_key'] === 'open_subtitle') {
                                            $openSubheading = $content['content'][$lang] ?? 'Không có phụ đề';
                                        }
                                        if ($content['section_key'] === 'weekday_hours') {
                                            $weekdayHours = $content['content'][$lang] ?? 'Không có giờ làm việc';
                                        }
                                        if ($content['section_key'] === 'weekend_hours') {
                                            $weekendHours = $content['content'][$lang] ?? 'Không có giờ làm việc';
                                        }
                                    }
                                    ?>
                                    <h2><?= $openHeading; ?><span class="teaser"><?= $openSubheading; ?></span></h2>
                                    <p><?= $weekdayHours; ?></p>
                                    <span class="small-border"></span>
                                    <p><?= $weekendHours; ?></p>
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
