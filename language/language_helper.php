<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // 1. Set language
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        $_SESSION['lang'] = $lang;
    } else {
        $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'no';
    }
    
    // 2. Get current page name
    $current_page = basename($_SERVER['PHP_SELF'], ".php"); 
    if ($current_page == 'index') { $current_page = ''; }
    
    // 3. Base URL Function
    function base_url($path = '') {
        global $lang;
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $folder = "sunnUtover/"; 
        if (empty($path)) {
            return $protocol . $host . "/" . $folder . $lang . "/";
        }
        return $protocol . $host . "/" . $folder . $path;
    }
    
    // 4. Load language JSON file
    $lang_file = __DIR__ . "/../language/" . $lang . ".json";
    $texts = [];
    if (file_exists($lang_file)) {
        $texts = json_decode(file_get_contents($lang_file), true);
    }
    
    // 5. Translation function using dot (.) notation
    function __($key) {
        global $texts;
        $keys = explode('.', $key);
        $temp = $texts;
        foreach ($keys as $k) {
            if (isset($temp[$k])) {
                $temp = $temp[$k];
            } else {
                return $key; 
            }
        }
        return $temp;
    }
?>