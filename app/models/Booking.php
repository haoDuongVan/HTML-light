/*

class SaveAndBooking extends Model {
    public function addBooking($data) {
        try {
            // Lưu thông tin đặt bàn vào cơ sở dữ liệu
            $stmt = $this->db->prepare("
                INSERT INTO bookings (name, email, phone, message, date, time, person, table_number) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute([
                $data['name'],
                $data['email'],
                $data['phone'],
                $data['message'],
                $data['date'],
                $data['time'],
                $data['person'],
                $data['table']
            ]);

            // Gửi email thông báo
            $this->sendEmail($data);

            return true; // Trả về thành công
        } catch (Exception $e) {
            return false; // Trả về thất bại
        }
    }

    private function sendEmail($data) {
        $subject = 'Đơn đặt bàn mới'; // Tiêu đề email
        $to = 'info@designesia.com';  // Email nhận thông báo
        $emailFrom = $data['name'] . '<' . $data['email'] . '>';

        // Nội dung email
        $message = "Name : {$data['name']}\n";
        $message .= "Email : {$data['email']}\n";
        $message .= "Phone : {$data['phone']}\n";
        $message .= "Date : {$data['date']}\n";
        $message .= "Time : {$data['time']}\n";
        $message .= "Person : {$data['person']}\n";
        $message .= "Table : {$data['table']}\n";
        $message .= "Message : {$data['message']}\n";

        // Header email
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: " . $emailFrom . "\r\n";
        $headers .= "Return-Path: " . $emailFrom . "\r\n";

        // Gửi email
        mail($to, $subject, nl2br($message), $headers);
    }
}

*/

<?php
class Booking {
    public function sendBookingEmail($data) {
        $subject = 'Đơn đặt bàn mới'; // Tiêu đề email
        $to = 'info@designesia.com';  // Email nhận thông báo
        $emailFrom = $data['name'] . '<' . $data['email'] . '>';

        // Nội dung email
        $message = "Name : {$data['name']}\n";
        $message .= "Email : {$data['email']}\n";
        $message .= "Phone : {$data['phone']}\n";
        $message .= "Date : {$data['date']}\n";
        $message .= "Time : {$data['time']}\n";
        $message .= "Person : {$data['person']}\n";
        $message .= "Table : {$data['table']}\n";
        $message .= "Message : {$data['message']}\n";

        // Header email
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: " . $emailFrom . "\r\n";
        $headers .= "Return-Path: " . $emailFrom . "\r\n";

        // Gửi email
        if (mail($to, $subject, nl2br($message), $headers)) {
            return true; // Email gửi thành công
        } else {
            return false; // Email gửi thất bại
        }
    }
}
?>
