<?php

$body_class = 'page-menu'; // Gán class riêng cho <body>
$header_class = 'header-solid header-light'; // Class riêng cho <header>
$custom_css = [];
$custom_js = ['public/fonts/elegant_font/HTML_CSS/lte-ie7.js'];

ob_start();
?>


<?php $lang = trim($data['lang']); ?>


        <!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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
                        <h1><?= $menuHeading; ?></h1>
                        <h2><span><?= $menuSubheading; ?></span></h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <!-- section begin -->
            <?php $divId = ['sub-menu-1', 'sub-menu-2', 'sub-menu-3']; ?>
            <?php $categoris = ['main', 'starter', 'drink']; ?>

            <?php for ($idx = 0; $idx < count($divId); $idx++): ?>
                <section id=<?= $divId[$idx] ; ?> class="side-bg" data-bgcolor="<?= $idx % 2 === 1 ? '#f5f5f5' : ''; ?>">
                    <div class="<?= $idx % 2 === 0 ? 'col-md-3 image-container' : 'col-md-3 col-md-offset-9 image-container pull-right'; ?>">
                        <div class="background-image"></div>
                    </div>
    
                    <div class="container">
                        <div class="row">
                            <div class="<?= $idx % 2 === 0 ? 'col-md-8 col-md-offset-4' : 'col-md-8'; ?>">
                                <?php $category = $data['menuCategories'][$idx] ?>
                                <div class="text-center">
                                    <h2><?= $category['name'][$lang]; ?><span class="teaser">Fresh and delicious</span><span class="small-border center"></span></h2>
                                </div>
                                
                                <div class="row">
                                    <?php foreach ($data['menuByCategory'][$categoris[$idx]] as $item): ?>
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
    
    
                        </div>
                    </div>
                </section>
                <!-- section close -->
            <?php endfor; ?>
        </div>
<?php
$content = ob_get_clean();
include 'layout.php';
?>

