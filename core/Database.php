<?php

class Database {
    private $pdo;
    private $stmt;

    public function __construct() {
        // Lấy thông tin cấu hình
        $config = require __DIR__ . '/../config/database.php';

        try {
            // Tạo kết nối PDO
            $dsn = 'mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'] . ';charset=utf8mb4';
            $this->pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Lỗi kết nối cơ sở dữ liệu: ' . $e->getMessage());
        }
    }

    // Thực thi truy vấn SQL
    public function query($sql, $params = []) {
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $result = $this->stmt->execute($params);
            if (!$result) {
                throw new Exception("Truy vấn thất bại: " . $sql);
            }
            return $result;
        } catch (Exception $e) {
            // Ghi log lỗi
            error_log($e->getMessage());
            return false;
        }
    }

    // Lấy tất cả dữ liệu
    public function fetchAll() {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy một hàng dữ liệu
    public function fetch() {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Lấy ID của bản ghi vừa thêm
    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }
}

?>

