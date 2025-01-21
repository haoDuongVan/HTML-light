<?php
class Booking {
    public function sendBookingEmail($data, $toEmail) {
        $subject = 'Đơn đặt bàn mới'; // Tiêu đề email
        $to = $toEmail['value']; // Email thông báo lấy từ database
        $emailFrom = $data['name'] . ' <' . $data['email'] . '>';

        // Nội dung email
        $message = "<h3>Thông tin đặt bàn</h3>";
        $message .= "<p><strong>Tên:</strong> {$data['name']}</p>";
        $message .= "<p><strong>Email:</strong> {$data['email']}</p>";
        $message .= "<p><strong>Ngày:</strong> {$data['date']}</p>";
        $message .= "<p><strong>Thời gian:</strong> {$data['time']}</p>";
        $message .= "<p><strong>Số người:</strong> {$data['person']}</p>";
        $message .= "<p><strong>Số bàn:</strong> {$data['table']}</p>";
        $message .= "<p><strong>Lời nhắn:</strong> {$data['message']}</p>";

        // Header email
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "From: $emailFrom\r\n";
        // $headers .= "Return-Path: " . $emailFrom . "\r\n";

        // Gửi email
        return mail($to, $subject, $message, $headers);
    }
}

?>
