<?php

$is_contact = true; // Biến chỉ định đây là trang contact
$body_class = 'page-contact'; 
$header_class = 'header-solid header-light';
$custom_css = ['public/fonts/elegant_font/HTML_CSS/lte-ie7.js'];
$custom_js = ['public/js/validation.js'];

ob_start();
?>

<?php $lang = trim($data['lang']); ?>


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

                                                    <form name="contactForm" id='contact_form' method="post" action="index.php?url=ContactController/sendEmail">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id='name_error' class='error'>Please enter your name.</div>
                                                                <div>
                                                                    <input type='text' name='name' id='name' class="form-control" placeholder="<?= $data['placeholders']['name']['placeholder']; ?>" autocomplete="name">
                                                                </div>

                                                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                                                <div>
                                                                    <input type='text' name='email' id='email' class="form-control" placeholder="<?= $data['placeholders']['email']['placeholder']; ?>" autocomplete="email">
                                                                </div>

                                                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                                                <div>
                                                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="<?= $data['placeholders']['phone']['placeholder']; ?>" autocomplete="phone">
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
        </div>
<?php
$content = ob_get_clean();
include 'layout.php';
?>
