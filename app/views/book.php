<?php
$is_book = true;
$body_class = 'page-book'; // Gán class riêng cho <body>
$header_class = 'header-solid header-light'; // Class riêng cho <header>
$custom_css = ['public/css/datepicker.css',
               'public/css/bootstrap-timepicker.min.css',
                'public/fonts/elegant_font/HTML_CSS/lte-ie7.js'];
                $custom_js = ['public/js/validation-reservation.js',
                'public/js/bootstrap-datepicker.js',
                'public/js/bootstrap-timepicker.min.js',
                'public/js/main.js',];

$extentions_js = [// Extensions
    'public/revolution/js/extensions/revolution.extension.video.min.js',
    'public/revolution/js/extensions/revolution.extension.slideanims.min.js',
    'public/revolution/js/extensions/revolution.extension.layeranimation.min.js',
    'public/revolution/js/extensions/revolution.extension.navigation.min.js',
    'public/revolution/js/extensions/revolution.extension.actions.min.js',
    'public/revolution/js/extensions/revolution.extension.kenburn.min.js',
    'public/revolution/js/extensions/revolution.extension.migration.min.js',
    'public/revolution/js/extensions/revolution.extension.parallax.min.js'
    ];

ob_start();
?>

<?php $lang = trim($data['lang']); ?>

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
                            
                            <div class="col-md-6">
                                <div data-bgcolor="#111111" class="padding60 text-center text-light shadow-soft">
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
                                                <input type="text" name="name" id="name" class="form-control" placeholder="<?= $data['placeholders']['name']['placeholder']; ?>" autocomplete="name">
                                            </div>
                                            <div class="col-md-6 mb10">
                                                <input type="text" name="email" id="email" class="form-control" placeholder="<?= $data['placeholders']['email']['placeholder']; ?>" autocomplete="email">
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


                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
