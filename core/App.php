<?php
class App {
    protected $controller = 'HomeController'; // Controller mặc định
    protected $method = 'index'; // Method mặc định
    protected $params = []; // Tham số mặc định

    public function __construct() {
        // Lấy và phân tích URL
        $url = $this->parseUrl();
        // error_log("Parsed URL: " . print_r($url, true));

        // Kiểm tra Controller
        if (!empty($url[0])) {
            if (strpos($url[0], 'bookTable') !== false) {
                // error_log("⚠️ URL có thể bị sai khi tách Controller. Đang nhận: " . $url[0]);
            }

            $potentialController = ucfirst($url[0]) . 'Controller';
            $controllerPath = __DIR__ . '/../app/controllers/' . $potentialController . '.php';

            if (file_exists($controllerPath)) {
                $this->controller = $potentialController;
                unset($url[0]);
            } else {
                $this->handleInvalidUrl('Controller không tồn tại');
                return;
            }
        }

        // Tải Controller
        require_once __DIR__ . '/../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Kiểm tra Method
        if (!empty($url[1])) { 
            $methodName = $url[1];
            // error_log("Checking Method: $methodName in Controller " . get_class($this->controller));

            if (method_exists($this->controller, $methodName)) {
                $this->method = $methodName;
                unset($url[1]); // Loại bỏ phần method khỏi mảng URL
            } else {
                $this->handleInvalidUrl('Method không tồn tại');
                return;
            }
        }

        // Lấy các tham số còn lại
        $this->params = !empty($url) ? array_values($url) : [];
        // error_log("Final Controller: " . get_class($this->controller) . ", Method: $this->method, Params: " . print_r($this->params, true));

        // Gọi Controller và Method với tham số
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() {
        $requestUri = $_SERVER['REQUEST_URI'];
        $parsedUrl = parse_url($requestUri, PHP_URL_PATH); // Chỉ lấy đường dẫn, bỏ query string
        $relativeUrl = trim($parsedUrl, '/'); // Loại bỏ dấu `/` ở đầu & cuối
        // error_log("REQUEST_URI: $requestUri, Parsed URL: $relativeUrl");

        return explode('/', filter_var($relativeUrl, FILTER_SANITIZE_URL));
    }


    private function handleInvalidUrl($message) {
        // Hiển thị thông báo lỗi hoặc chuyển hướng
        http_response_code(404); 
        echo "<h1>404 - NO PAGE FOUND</h1>";
        echo "<p>$message</p>";
        exit();
    }
}
?>
