<!DOCTYPE html>
<?php $lang = trim($data['lang']); ?>   
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['settings'][1]['value'][$lang]; ?></title>
    <!-- <meta name="description" content="Delizus is the most complete restaurantwebsite template">
    <meta name="keywords" content="restaurant,cafe,event.multipurpose,onepage,responsive,minimal,bootstrap,theme">
    <meta name="author" content=""> -->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/main.min.css" type="text/css">
    <!-- color scheme -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/public/css/color.css" type="text/css" id="colors">

<?php if (isset($is_contact) && $is_contact): ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
<?php endif; ?>

<?php if (isset($is_home) && $is_home): ?>
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/public/revolution/css/settings.css">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/public/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/public/revolution/css/navigation.css">
<?php endif; ?>
<!-- end -->
    <?php if (isset($custom_css)): ?>
        <?php foreach ($custom_css as $css_file): ?>
            <link rel="stylesheet" href="<?= BASE_URL; ?>/<?= $css_file ?> " type="text/css">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body 
    <?= isset($body_id) ? "id=\"$body_id\"" : '' ?>
    <?= isset($body_class) ? "class=\"$body_class\"" : '' ?>
>

    <div id="wrapper">
        <!-- header begin -->
        <header
            <?= isset($header_class) ? "class=\"$header_class\"" : '' ?>
        >
            <!-- Div riêng cho trang home -->
            <?php if (isset($is_home) && $is_home): ?>
                <div class="home-header">
                    <div class="info">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col"><span class="id-color"><i class="fa fa-map-marker"></i></span>xxxx-xxxx-xxxx-  Tokyo</div>
                                    <div class="col"><span class="id-color"><i class="fa fa-clock-o"></i></span>Monday - Friday 08:00-23:00</div>
                                    <div class="col"><span class="id-color"><i class="fa fa-phone"></i></span>070-xxxx-xxxx</div>
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
                </div>
            <?php endif; ?>
            <!-- end -->

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

    <!-- Nội dung -->
    <main>
        <?= isset($content) ? $content : '' ?>
    </main>

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
    <script src="<?= BASE_URL; ?>/public/js/main.min.js" defer></script>
    <script src="<?= BASE_URL; ?>/public/js/designesia.js?v=<?= time(); ?>" defer></script>
    <?php if (isset($custom_js)): ?>
            <?php foreach ($custom_js as $js_file): ?>
                <script src="<?= $js_file ?>" defer></script>
            <?php endforeach; ?>
    <?php endif; ?>
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/jquery.themepunch.tools.min.js?rev=5.0" defer></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>/public/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0" defer></script>
    <?php if ((isset($is_home) && $is_home) || (isset($is_book) && $is_book)): ?>
        <?php foreach ($extentions_js as $js_file): ?>
                <script src="<?= $js_file ?>" defer></script>
            <?php endforeach; ?>
    <?php endif; ?>
<?php if (isset($is_contact) && $is_contact): ?>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" defer></script>
    <script src="<?= BASE_URL; ?>/public/js/map.js" defer></script>
<?php endif; ?>

<!-- end -->

</body>
</html>