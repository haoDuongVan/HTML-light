<?php
class ContactController extends Controller {
    public function index() {
        // Lấy ngôn ngữ hiện tại từ session
        $lang = Language::getLanguage();

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

        // Lấy thông tin category của contact
        $db->query("SELECT * FROM contact_categories");
        $contactCategories = $db->fetchAll();

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

        foreach ($contactCategories as &$contactCategory) {
            $contactCategory['name'] = json_decode($contactCategory['name'], true);
        }

        // Đổ dữ liệu vào view
        $this->view('contact', [
            'lang' => $lang,
            'navigations' => $navigations,
            'settings' => $settings,
            'sectionContents' => $sectionContents,
            'placeholders' => $placeholders,
            'contactCategories' => $contactCategories,
        ]);
    }

    public function sendEmail() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mailModel = new Mailer();
            $db = new Database();
            
            // Lấy thông tin cài đặt
            $db->query("SELECT * FROM settings WHERE `key` = 'SUPPORT_EMAIL'");
            $mailto = $db->fetch();
            $toEmail = json_decode($mailto['value'], true);

            $data = [
                'name' => $_POST['name'] ,
                'email' => $_POST['email'] ,
                'message' => $_POST['message'] ,
                'phone' => $_POST['phone'] ,
            ];
            if (empty($data['name']) || empty($data['email']) || 
                empty($data['phone']) || empty($data['message'])) {
                echo 'failed';
                return;
            }

            $result = $mailModel->sendContactEmail($data, $toEmail);

            if ($result) {
                echo 'sent'; // Gửi email thành công
                // print_r("Email sent successfully");
            } else {
                echo 'failed'; // Gửi email thất bại
                // print_r("Email sent failed");

            }
        }
    }
}
?>
