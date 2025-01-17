<?php
class BookController extends Controller {
    public function index() {
        $this->view('book', ['title' => 'Đặt bàn']);
    }

    public function bookTable() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookingModel = $this->model('Booking');
            $result = $bookingModel->addBooking($_POST);
            $message = $result ? "Đặt bàn thành công!" : "Đặt bàn thất bại!";
            $this->view('book', ['message' => $message]);
        }
    }
}
?>
