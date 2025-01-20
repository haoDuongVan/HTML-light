<?php
class App {
    protected $controller = 'HomeController'; // Controller mặc định
    protected $method = 'index'; // Method mặc định
    protected $params = []; // Tham số mặc định

    public function __construct() {
        // Lấy và phân tích URL
        $url = $this->parseUrl();

        // Kiểm tra Controller
        if (!empty($url[0])) { // Nếu có phần tử đầu tiên trong URL
            $potentialController = ucfirst($url[0]) . 'Controller'; // Viết hoa chữ cái đầu
            $controllerPath = __DIR__ . '/../app/controllers/' . $potentialController . '.php';

            if (file_exists($controllerPath)) {
                $this->controller = $potentialController; // Gán Controller
                unset($url[0]); // Bỏ controller khỏi mảng URL
            } else {
                $this->handleInvalidUrl('Controller không tồn tại');
                return;
            }
        }

        // Tải Controller
        require_once __DIR__ . '/../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Kiểm tra Method
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1]; // Gán Method
            unset($url[1]); // Bỏ method khỏi mảng URL
        } else if (isset($url[1])) {
            $this->handleInvalidUrl('Method không tồn tại');
            return;
        }

        // Lấy các tham số còn lại
        $this->params = $url ? array_values($url) : [];

        // Gọi Controller và Method với tham số
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() {
        // Lấy URL từ REQUEST_URI
        $requestUri = $_SERVER['REQUEST_URI'];
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        $relativeUrl = str_replace($scriptName, '', $requestUri);

        // Loại bỏ dấu `/` và phân tích thành mảng
        return explode('/', filter_var(trim($relativeUrl, '/'), FILTER_SANITIZE_URL));
    }

    private function handleInvalidUrl($message) {
        // Hiển thị thông báo lỗi hoặc chuyển hướng
        http_response_code(404); // Mã HTTP 404
        echo "<h1>404 - NO PAGE FOUND</h1>";
        // echo "<p>$message</p>";
        exit();
    }
}
?>
