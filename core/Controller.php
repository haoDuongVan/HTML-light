<?php
class Controller {
    public function view($view, $data = []) {
        // Tạo đường dẫn tới view
        $viewPath = __DIR__ . '/../app/views/'.$view.'.php';
        // $layoutPath = __DIR__ . '/../app/views/layout.php';
    
        if (file_exists($viewPath)) {
            // Include layout chính và truyền view vào
            // $view = $viewPath;
            require_once $viewPath;
        } else {
            die("View không tồn tại!");
        }
    }
    
}
?>
