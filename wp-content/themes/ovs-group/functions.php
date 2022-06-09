<?php
    add_filter('show_admin_bar', '__return_false');

    remove_action('wp_head',             'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles',     'print_emoji_styles');
    remove_action('admin_print_styles',  'print_emoji_styles');
    
    remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
    remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
    remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
    remove_action('wp_head', 'rsd_link'); // remove EditURI
    remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
    remove_action('wp_head', 'rel_canonical'); //remove canonical
    remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
    remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate
    
    add_action('wp_enqueue_scripts', 'site_scripts');
    function site_scripts() {
        wp_dequeue_style('wp-block-library'); // remove wp-block-library-css
        wp_dequeue_style('global-styles'); // remove global-styles-inline-css
    }

    // Конвертирование пути для изображений Webp
    function convertToWebpSrc($src){
        $src_webp = $src . '.webp';
        return str_replace('uploads', 'uploads-webpc/uploads', $src_webp);
    }

    // Меню
    add_action('after_setup_theme', 'theme_support');
    function theme_support(){
        register_nav_menu('menu_main_header', 'Меню в шапке');
        register_nav_menu('menu_main_footer', 'Меню в подвале');
    }

    // Подключение плагина Carbon Fields
    add_action('after_setup_theme', 'crb_load');
    function crb_load() {
        require_once('includes/carbon-fields/vendor/autoload.php');
        \Carbon_Fields\Carbon_Fields::boot();
    }

    add_action('carbon_fields_register_fields', 'register_carbon_fields');
    function register_carbon_fields(){
        require_once('includes/carbon-fields-options/theme-options.php');
        require_once('includes/carbon-fields-options/post-meta.php');
    }

    // Глобальные переменные для настроек сайта
    add_action('init', 'create_global_variable');
    function create_global_variable(){
        global $ovs_group;
        $ovs_group = [
            //Общие настройки
            'main_name' => carbon_get_theme_option('site_main_name'),
            'work_time' => carbon_get_theme_option('site_work_time'),
            //Логотип
            'logo_text' => carbon_get_theme_option('site_logo_text'),
            //Контакты
            'address' => carbon_get_theme_option('site_address'),
            'icon_address' => wp_get_attachment_image_url(carbon_get_theme_option('site_icon_address')),
            'email_main' => carbon_get_theme_option('site_email_main'),
            'icon_email_footer' => wp_get_attachment_image_url(carbon_get_theme_option('site_icon_email_footer')),
            'phone_main' => carbon_get_theme_option('site_phone_main'),
            'phone_nomask_main' => carbon_get_theme_option('site_phone_nomask_main'),
            'phone_additional' => carbon_get_theme_option('site_phone_additional'),
            'phone_nomask_additional' => carbon_get_theme_option('site_phone_nomask_additional'),
            'icon_phone_footer' => wp_get_attachment_image_url(carbon_get_theme_option('site_icon_phone_footer')),
        ]; 
    } 
?>