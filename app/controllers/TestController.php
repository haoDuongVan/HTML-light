<?php
require_once __DIR__ . '/../../core/Database.php'; // Đường dẫn tới file Database

class TestController extends Controller {
    public function index() {
        $db = new Database();

        // Kiểm tra kết nối bằng cách lấy danh sách các bảng
        $db->query("SHOW TABLES");
        $tables = $db->fetchAll();

        // Hiển thị danh sách bảng (trả về cho view)
        $this->view('test', ['tables' => $tables]);
    }
}
?>
