<?php
define('BASE_URL', '/restaurant');
session_start();
require_once __DIR__ . '/core/App.php';
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/Model.php';


// Khởi chạy ứng dụng
$app = new App();
?>
