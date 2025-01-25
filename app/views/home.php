<?php
$is_home = true; // Biến chỉ định đây là trang home
$body_id = 'homepage'; // Gán id riêng cho <body>
$header_class = ''; // Không cần class cho <header> ở trang Home
$custom_css = ['public/css/datepicker.css',
               'public/css/bootstrap-timepicker.min.css',
                'public/fonts/et-line-font/style.css',
                'public/revolution/css/settings.css'];
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
        
        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                <div id="revolution-slider">
                <p class="fallback">Không thể tải slider. Vui lòng kiểm tra kết nối mạng của bạn.</p>
                    <ul>
                        <?php foreach ($data['sliders'] as $slider): ?>
                            <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                                <!--  BACKGROUND IMAGE -->
                                <img src="<?= BASE_URL . $slider['image']; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" loading="lazy"/>

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
                                            <img src="<?= BASE_URL . $item['image']; ?>" class="img-responsive" alt="" loading="lazy">
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
                                                    <img src="<?= BASE_URL . $item['image']; ?>" class="img-responsive" alt="" loading="lazy">
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
                                                    <img src="<?= BASE_URL . $item['image']; ?>" class="img-responsive" alt="" loading="lazy">
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
                                                    <img src="<?= BASE_URL . $item['image']; ?>" class="img-responsive" alt="" loading="lazy">
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



<?php
$content = ob_get_clean();
include 'layout.php';
?>
