<?php
class MenuController extends Controller {
    public function index() {
        $this->view('menu', ['title' => 'Thực đơn']);
    }
}
?>
