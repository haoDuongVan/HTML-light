<?php

// Tự động tải thư viện bên thứ ba
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$dbUser = $_ENV['DB_USER'];
$dbPass = $_ENV['DB_PASS'];

// Định nghĩa đường dẫn cơ bản
define('BASE_URL', '');

// // Khởi tạo session
// session_start();

// Kiểm tra và xử lý ngôn ngữ từ query string
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + (86400 * 30), "/"); // Lưu cookie trong 30 ngày
    // Chuyển hướng đến URL không có query string để tránh lặp lại
    $redirectUrl = strtok($_SERVER['REQUEST_URI'], '?');
    header('Location: ' . $redirectUrl, true, 301);
    exit();
}

// Lấy ngôn ngữ từ Local Storage (qua JavaScript) hoặc đặt mặc định
if (!empty($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'vi'; // Ngôn ngữ mặc định
    setcookie('lang', $lang, time() + (86400 * 30), "/"); // Lưu cookie trong 30 ngày
}

// Loại bỏ các tham số `i` và `lang` khỏi URL
if (isset($_GET['i']) || isset($_GET['lang'])) {
    // Lấy URL không chứa query string
    $redirectUrl = strtok($_SERVER['REQUEST_URI'], '?');
    
    // Phân tích query string thành mảng
    if (!empty($_SERVER['QUERY_STRING'])) {
        parse_str($_SERVER['QUERY_STRING'], $queryParams);
        unset($queryParams['lang']);
        unset($queryParams['i']);   // Loại bỏ `i`
        
        // Tạo lại query string nếu còn tham số
        $queryString = http_build_query($queryParams);
        $redirectUrl .= $queryString ? '?' . $queryString : '';
    }

    // Chuyển hướng đến URL mới
    header('Location: ' . $redirectUrl, true, 301);
    exit();
}


// Nạp các file hệ thống cần thiết
require_once __DIR__ . '/core/AutoLoad.php';
require_once __DIR__ . '/core/App.php';
require_once __DIR__ . '/core/Controller.php';

// Khởi chạy ứng dụng
$app = new App();
