<?php
class BookController extends Controller {
    public function index() {
        // Lấy ngôn ngữ hiện tại từ session
        $lang = trim($_SESSION['lang']);

        $db = new Database();

        // Lấy thông tin navigation
        $db->query("SELECT * FROM navigations ORDER BY order_number ASC");
        $navigations = $db->fetchAll();

        // Lấy thông tin cài đặt
        $db->query("SELECT * FROM settings");
        $settings = $db->fetchAll();

        // Lấy thông tin section contents
        $db->query("SELECT * FROM section_contents");
        $sectionContents = $db->fetchAll();

        // Lấy thông tin book form
        $db->query("SELECT * FROM book_form");
        $bookForm = $db->fetchAll();

        // Giải mã JSON cho các trường cần thiết
        foreach ($navigations as &$navigation) {
            $navigation['title'] = json_decode($navigation['title'], true);
        }

        foreach ($settings as &$setting) {
            $setting['value'] = json_decode($setting['value'], true);
        }

        foreach ($sectionContents as &$sectionContent) {
            $sectionContent['content'] = json_decode($sectionContent['content'], true);
        }

        $placeholders = [];
        foreach ($bookForm as $form) {
            $form['content'] = json_decode($form['content'], true);
            $placeholders[$form['input_id']][$form['type']] = $form['content'][$lang] ?? '';
        }

        // Đổ dữ liệu vào view
        $this->view('book', [
            'lang' => $lang,
            'navigations' => $navigations,
            'settings' => $settings,
            'sectionContents' => $sectionContents,
            'placeholders' => $placeholders
        ]);
    }

    public function bookTable() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookingModel = new Booking();
    
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'message' => $_POST['message'],
                'date' => $_POST['date'],
                'time' => $_POST['time'],
                'person' => $_POST['person'],
                'table' => $_POST['table']
            ];
    
            $result = $bookingModel->sendBookingEmail($data);
    
            if ($result) {
                echo 'sent'; // Gửi email thành công
            } else {
                echo 'failed'; // Gửi email thất bại
            }
        }
    }
}
?>
