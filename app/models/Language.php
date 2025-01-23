<?php
class Language {
    public static function getLanguage() {
        if (!empty($_COOKIE['lang'])) {
            return $_COOKIE['lang'];
        } else {
            return 'vi'; // Ngôn ngữ mặc định
        }
    }
    public static function setLanguage($lang) {
        setcookie('lang', $lang, time() + (86400 * 30), "/"); // Lưu cookie trong 30 ngày
    }
}