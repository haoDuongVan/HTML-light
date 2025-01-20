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
define('BASE_URL', '/restaurant');

// Khởi tạo session
session_start();

// Thiết lập ngôn ngữ mặc định nếu chưa tồn tại trong session
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'vi'; // Ngôn ngữ mặc định
}

// Kiểm tra nếu có thay đổi ngôn ngữ qua URL hoặc form
if (isset($_GET['lang']) && in_array(trim($_GET['lang']), ['vi', 'en', 'jp'])) {
    $_SESSION['lang'] = trim($_GET['lang']);;

    // Xóa query string chứa 'lang' và chuyển hướng
    $redirectUrl = strtok($_SERVER['REQUEST_URI'], '?');
    if (!empty($_SERVER['QUERY_STRING'])) {
        parse_str($_SERVER['QUERY_STRING'], $queryParams);
        unset($queryParams['lang']);
        $queryString = http_build_query($queryParams);
        $redirectUrl .= $queryString ? '?' . $queryString : '';
    }

    // Chuyển hướng đến URL mới
    header('Location: ' . $redirectUrl);
    exit();
}


// Nạp các file hệ thống cần thiết
require_once __DIR__ . '/core/AutoLoad.php';
require_once __DIR__ . '/core/App.php';
require_once __DIR__ . '/core/Controller.php';

// Khởi chạy ứng dụng
$app = new App();
