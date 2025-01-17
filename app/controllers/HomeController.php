<?php
class HomeController extends Controller {
    public function index() {
        $this->view('home', ['title' => 'Trang chủ']);
    }

    public function bookTable() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookingModel = $this->model('Booking');
            $result = $bookingModel->addBooking($_POST);
            $message = $result ? "Đặt bàn thành công!" : "Đặt bàn thất bại!";
            $this->view('home', ['message' => $message]);
        }
    }
}
?>
