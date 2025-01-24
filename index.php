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

// Khởi tạo session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Danh sách ngôn ngữ được hỗ trợ
$supportedLangs = ['vi', 'en', 'jp'];
$defaultLang = 'vi';
// 1. Kiểm tra `?lang` từ request và cập nhật session/cookie
if (isset($_GET['lang']) && in_array($_GET['lang'], $supportedLangs)) {
    // Lưu vào session
    $_SESSION['lang'] = $_GET['lang'];

    // Lưu vào cookie (thời hạn 30 ngày)
    setcookie('lang', $_GET['lang'], time() + (86400 * 30), "/");

    // Chuyển hướng đến URL sạch (loại bỏ ?lang)
    $redirectUrl = strtok($_SERVER['REQUEST_URI'], '?'); // URL không chứa query string
    header("Location: $redirectUrl", true, 302); // Chuyển hướng với mã HTTP 302
    exit();
}

// 2. Lấy ngôn ngữ từ session, cookie hoặc mặc định
if (isset($_SESSION['lang']) && in_array($_SESSION['lang'], $supportedLangs)) {
    $lang = $_SESSION['lang'];
} elseif (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $supportedLangs)) {
    $lang = $_COOKIE['lang'];
    $_SESSION['lang'] = $lang; // Đồng bộ lại session
} else {
    $lang = $defaultLang; // Ngôn ngữ mặc định
    $_SESSION['lang'] = $lang;
    setcookie('lang', $lang, time() + (86400 * 30), "/");
}


// Nạp các file hệ thống cần thiết
require_once __DIR__ . '/core/AutoLoad.php';
require_once __DIR__ . '/core/App.php';
require_once __DIR__ . '/core/Controller.php';

// Khởi chạy ứng dụng
try {
    $app = new App();
} catch (Exception $e) {
    echo "Error initializing App: " . $e->getMessage();
}
