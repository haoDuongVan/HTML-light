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
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?= BASE_URL; ?>/public/images-slider/wide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />

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
                                ĐẶT LỊCH HẸN
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br>
                                eiusmod tempor incididunt ut labore et dolore<br>
                                magna aliqua. Ut enim ad minim
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
                                <a href="#" class="btn-slider rounded">Đặt lịch</a>&nbsp;&nbsp;
								<a href="#" class="btn-solid rounded">Xem Menu</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?= BASE_URL; ?>/public/images-slider/wide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />

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
                                KHÔNG GIAN RỘNG RÃI THOẢI MÁI
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br>
                                eiusmod tempor incididunt ut labore et dolore<br>
                                magna aliqua. Ut enim ad minim
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
                                <a href="book.html" class="btn-slider rounded">Đặt lịch</a>&nbsp;&nbsp;
								<a href="menu.html" class="btn-solid rounded">Xem Menu</a>
                            </div>
                        </li>



                    </ul>
                </div>
            </section>
            <!-- revolution slider close -->

            <!-- section begin -->
            <section id="section-features" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Những món nhất định phải thử<span class="teaser">Bếp trưởng tự hào</span><span class="small-border center"></span></h2>
                        </div>

                        <div class="col-md-3 col-sm-6 text-center wow fadeInUp">
                            <div class="menu-item">
                                <figure class="pic-hover hover-scale mb10">
                                    <span class="center-xy">
                                        <a class="image-popup" href="images/menu/thumbs/1.jpg"></a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <span class="border-overlay"></span>
                                    <img src="<?= BASE_URL; ?>/public/images/menu/thumbs/1.jpg" class="img-responsive" alt="">
                                </figure>

                                <h3>Roasted Chicken</h3>
                                <span class="id-color">55 円</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay=".3s">
                            <div class="menu-item">
                                <figure class="pic-hover hover-scale mb10">
                                    <span class="center-xy">
                                        <a class="image-popup" href="images/menu/thumbs/2.jpg"></a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <span class="border-overlay"></span>
                                    <img src="<?= BASE_URL; ?>/public/images/menu/thumbs/2.jpg" class="img-responsive" alt="">
                                </figure>
                                <h3>Baked Crab Cheese</h3>
                                <span class="id-color">66 円</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay=".6s">
                            <div class="menu-item">
                                <figure class="pic-hover hover-scale mb10">
                                    <span class="center-xy">
                                        <a class="image-popup" href="images/menu/thumbs/3.jpg"></a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <span class="border-overlay"></span>
                                    <img src="<?= BASE_URL; ?>/public/images/menu/thumbs/3.jpg" class="img-responsive" alt="">
                                </figure>
                                <h3>Foie Gras</h3>
                                <span class="id-color">99 円</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 text-center wow fadeInUp" data-wow-delay=".9s">
                            <div class="menu-item">
                                <figure class="pic-hover hover-scale mb10">
                                    <span class="center-xy">
                                        <a class="image-popup" href="images/menu/thumbs/4.jpg"></a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <span class="border-overlay"></span>
                                    <img src="<?= BASE_URL; ?>/public/images/menu/thumbs/4.jpg" class="img-responsive" alt="">
                                </figure>
                                <h3>Chicken Satay</h3>
                                <span class="id-color">56 円</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-services-tab" aria-label="section-services-tab">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <h2>Menu của Quán<span class="teaser">Ngon  &amp;  Bổ &amp;  Rẻ </span><span class="small-border center"></span></h2>
                    </div>

                    <div class="col-md-12 mb60">
                        <div class="de_tab tab_style_2">
                            <ul class="de_nav">
                                <li class="active" data-link="#section-services-tab"><span>Món chính</span><div class="v-border"></div>
                                </li>
                                <li data-link="#section-services-tab"><span>Đồ ăn kèm</span><div class="v-border"></div>
                                </li>
                                <li data-link="#section-services-tab"><span>Đồ uống</span><div class="v-border"></div>
                            </ul>

                            <div class="de_tab_content">

                                <div id="tab1" class="tab_single_content">
                                    <div class="row">
                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/main/1.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Chicken Crispy Roll</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">66 円</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/main/2.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Cheese Shrimp Roll</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">42 円</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/main/3.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Baked Crab Cheese</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">66 円</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/main/4.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Crispy Squid</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">54 円</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/main/5.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Foie Gras</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">99 円</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/main/6.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Roasted Chicken</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">55 円</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div id="tab2" class="tab_single_content">
                                    <div class="row">
                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/starter/1.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Chicken Soup</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">8< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/starter/2.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Caprese Salad</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">9< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/starter/3.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Polpette</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">8< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/starter/4.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Waffle</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">9< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/starter/5.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Caprino</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">8< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/starter/6.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Calamary</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">10 円</div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>

                                <div id="tab3" class="tab_single_content">
                                    <div class="row">
                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/drink/1.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Limeade</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">5< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/drink/2.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Iced Tea</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">3< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/drink/3.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Milk Shake</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">5< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/drink/4.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Orange Juice</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">3< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/drink/5.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Hot Tea</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">3< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb30">
                                            <div class="post-menu">
                                                <img src="<?= BASE_URL; ?>/public/images/menu/thumbs-small/drink/6.jpg" class="img-responsive" alt="">
                                                <div class="sub-item-service meta">
                                                    <div class="c1">Coffee</div>
                                                    <div class="c2"></div>
                                                    <div class="c3">3< 円/div>
                                                </div>
                                                <div class="service-text meta-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            </div>
                                        </div>


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
                            <h2>Lên lịch hẹn<span class="teaser center">Đặt bàn</span><span class="small-border center"></span></h2>

                            <div class="row">
                                <form name="contactForm" id='contact_form' class="form-dark" method="post" action='reservation.php'>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='date' id='date' class="form-control" placeholder="Ngày">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='time' id='time' class="form-control" placeholder="Thời gian">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='table' id='table' class="form-control" placeholder="Số bàn">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='person' id='person' class="form-control" placeholder="Số người">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Tên">
                                    </div>
                                    <div class="col-md-6 mb10">
                                        <input type='text' name='email' id='email' class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 mb10">
                                        <textarea name='message' id='message' class="form-control" placeholder="Lời nhắn đến quán"></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div id='submit'>
                                            <input type='submit' id='send_message' value='Đặt lịch hẹn' class="btn-solid rounded">
                                        </div>
                                        <div id='mail_success' class='success'>Tin nhắn đã được gửi thành công.</div>
                                        <div id='mail_fail' class='error'>Xin lỗi, đã có lỗi xảy ra trong quán trình gửi tin nhắn.</div>
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
            var checkin = (' 円#date').datepicker({
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
