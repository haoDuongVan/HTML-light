<?php
class MenuController extends Controller {
    public function index() {
        // Lấy ngôn ngữ hiện tại từ session
        $lang = Language::getLanguage();

        $db = new Database();

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


        // Giải mã JSON cho các trường cần thiết
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


        // Đổ dữ liệu vào view
        $this->view('menu', [
            'lang' => $lang,
            'menuByCategory' => $menuByCategory,
            'menuCategories' => $menuCategories,
            'navigations' => $navigations,
            'settings' => $settings,
            'sectionContents' => $sectionContents
        ]);
    }
}
?>
