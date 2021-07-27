<?php

    /**
     * Loading All CSS Stylesheets and Javascript Files.
     */


    function my_theme_supports(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menu('header', 'En tête du menu');
        register_nav_menu('footer', 'bas de page');

        add_image_size('card-header', 500, 350, true);
        add_image_size('home-header', 1900, 600, true);
        add_image_size('apprenants', 225, 300, true);
    }

    function my_theme_register_assets (){
        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
        wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
    }

    function my_theme_document_title_parts($title){
        unset($title['tagline']);
        return $title;

    }

    function my_theme_menu_class($classes){
        $classes[] = 'nav-item';
        return $classes;
    }

    function my_theme_link_class($attrs){
        $attrs['class'] = 'nav-link';
        return $attrs;
    }

    function my_theme_init() {
        register_post_type('Modules', [
            'label' => 'Modules',
            'public' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-screenoptions',
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => true,
        ]);
        register_post_type('Apprenants', [
            'label' => 'Apprenants',
            'public' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-groups',
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => true,
        ]);
    }

    add_action('init', 'my_theme_init');
    add_action('wp_enqueue_scripts', 'my_theme_register_assets');
    add_action('after_setup_theme', 'my_theme_supports');
    add_filter('document_title_parts', 'my_theme_document_title_parts');
    add_filter('nav_menu_css_class', 'my_theme_menu_class');
    add_filter('nav_menu_link_attributes', 'my_theme_link_class');

    // return un modules par son ID
    add_action('rest_api_init', function (){
        register_rest_route('my_theme/v1', '/module/(?P<id>\d+)', [
            'methods' => 'GET',
            'callback' => function (WP_REST_Request $request){
                $postID = (int)$request->get_param('id');
                $post = get_post($postID);
                if ($post === null){
                    return new WP_Error('Rien', 'Rien trouvé', ['status' =>404]);
                }
                return $post->post_title;
            }
        ]);
    });



    function wordpress_scripts_loader()
    {

        $theme_version = wp_get_theme()->get('Version');

        // 1. Styles.
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], $theme_version, 'all');
        wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], $theme_version, 'all'); // main.scss: Compiled Framework source + custom styles.

        if (is_rtl()) {
            wp_enqueue_style('rtl', get_template_directory_uri() . '/assets/css/rtl.css', [], $theme_version, 'all');
        }

        // 2. Scripts.
        wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.bundle.js', [], $theme_version, true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    add_action('wp_enqueue_scripts', 'wordpress_scripts_loader');
