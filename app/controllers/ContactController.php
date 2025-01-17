<?php
class ContactController extends Controller {
    public function index() {
        $this->view('contact', ['title' => 'Liên hệ']);
    }

    public function sendEmail() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $to = "your-email@example.com";
            $subject = "Liên hệ từ $name";
            $headers = "From: $email";

            if (mail($to, $subject, $message, $headers)) {
                $this->view('contact', ['message' => 'Email đã được gửi thành công!']);
            } else {
                $this->view('contact', ['message' => 'Gửi email thất bại.']);
            }
        }
    }
}
?>
