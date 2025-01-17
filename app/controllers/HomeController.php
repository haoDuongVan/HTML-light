<?php
class HomeController extends Controller {
    public function index() {
        // Lấy ngôn ngữ hiện tại từ session
        $lang = $_SESSION['lang'];

        $db = new Database();

        // Lấy thông tin slider
        $db->query("SELECT * FROM sliders");
        $sliders = $db->fetchAll();

        // Lấy thông tin category của menu
        $db->query("SELECT * FROM menu_categories");
        $menuCategories = $db->fetchAll();
        
        // Lấy tất cả menu và phân loại theo category
        $db->query("SELECT * FROM menu_items");
        $menuItems = $db->fetchAll();
        $menuByCategory = [
            'special' => [],
            'main' => [],
            'starter' => [],
            'drink' => [],
        ];
        foreach ($menuItems as $item) {
            $item['name'] = json_decode($item['name'], true);
            $item['description'] = json_decode($item['description'], true);
            $menuByCategory[$item['category']][] = $item;
        }

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
        foreach ($sliders as &$slider) {
            $slider['title'] = json_decode($slider['title'], true);
            $slider['description'] = json_decode($slider['description'], true);
            $slider['buttons'] = json_decode($slider['buttons'], true);
        }

        foreach ($menuItems as &$menuItem) {
            $menuItem['name'] = json_decode($menuItem['name'], true);
            $menuItem['description'] = json_decode($menuItem['description'], true);
        }

        foreach ($menuCategories as &$menuCategory) {
            $menuCategory['name'] = json_decode($menuCategory['name'], true);
        }

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
        $this->view('home', [
            'lang' => $lang,
            'sliders' => $sliders,
            'menuByCategory' => $menuByCategory,
            'menuCategories' => $menuCategories,
            'navigations' => $navigations,
            'settings' => $settings,
            'sectionContents' => $sectionContents,
            'placeholders' => $placeholders
        ]);

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
