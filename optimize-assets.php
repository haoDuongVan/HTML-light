<?php

require __DIR__ . '/vendor/autoload.php';

use MatthiasMullie\Minify;

// Gộp và nén CSS
function minifyCss($files, $outputFile) {
    $minifier = new Minify\CSS();
    foreach ($files as $file) {
        $minifier->add($file); // Thêm từng file vào trình nén
    }
    $minifier->minify($outputFile); // Lưu file gộp và nén
    echo "CSS minified to: $outputFile\n";
}

// Danh sách các file CSS
$cssFiles = [
    'public/css/bootstrap.css',
    'public/css/animate.css',
    'public/css/plugin.css',
    'public/css/owl.carousel.css',
    'public/css/owl.theme.css',
    'public/css/owl.transitions.css',
    'public/css/magnific-popup.css',
    'public/css/style.css',
    'public/css/bg.css',
    'public/css/rev-settings.css',
    'public/fonts/font-awesome/css/font-awesome.css',
    'public/fonts/elegant_font/HTML_CSS/style.css'
];

// Nén và lưu file CSS gộp
minifyCss($cssFiles, 'public/css/main.min.css');

// Gộp và nén JavaScript
function minifyJs($files, $outputFile) {
    $minifier = new Minify\JS();
    foreach ($files as $file) {
        $minifier->add($file); // Thêm từng file vào trình nén
    }
    $minifier->minify($outputFile); // Lưu file gộp và nén
    echo "JS minified to: $outputFile\n";
}

// Danh sách các file JS
$jsFiles = [
    'public/js/jquery.min.js',
    'public/js/bootstrap.min.js',
    'public/js/jquery.isotope.min.js',
    'public/js/easing.js',
    'public/js/jquery.flexslider-min.js',
    'public/js/jquery.scrollto.js',
    'public/js/owl.carousel.js',
    'public/js/classie.js',
    'public/js/wow.min.js',
    'public/js/jquery.magnific-popup.min.js',
    'public/js/enquire.min.js',
    'public/js/jquery.stellar.min.js'
    // 'public/js/designesia.js'

];

// Nén và lưu file JS gộp
minifyJs($jsFiles, 'public/js/main.min.js');
