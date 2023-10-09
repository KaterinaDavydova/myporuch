<?php 

// Функція для друку svg з url

function rmn_custom_mime_types( $mimes ) {
    // Новый mime тип
    $mimes['jpg'] = 'image/jpg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'rmn_custom_mime_types' );



// Disable the toolbar completely for all users
add_filter('show_admin_bar', '__return_false');

// Підключення класичного редактора WP
add_filter( 'use_block_editor_for_post_type', '__return_false' );

// Підключення css та js
add_action( 'wp_enqueue_scripts', 'auto_scripts' );
function auto_scripts() {

    // Script and css for page

        // css
        // wp_enqueue_style( 'main_css', get_template_directory_uri().'/assets/css/main-1.css', 
        // array(), null );

        // js
        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.7.0.min.js');
        wp_enqueue_script( 'script_main', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime( get_theme_file_path('/assets/js/script.js')));
        wp_enqueue_script( 'slick_js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), filemtime( get_theme_file_path('/assets/js/slick.min.js')));
        wp_enqueue_script( 'zoom_js', get_stylesheet_directory_uri() . '/assets/js/zoom.js', array('jquery'), filemtime( get_theme_file_path('/assets/js/zoom.js')));
    };

// Додаєм підтримку мініатюр

add_theme_support( 'post-thumbnails' );
add_image_size( '300-300', 300, 300, false);
add_image_size( '161-234', 161, 234, false);

// Реєстрація меню
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Меню шапка сайту',
		'footer_menu' => 'Меню підвал'
	] );
} );

//remove the span wrapper in Contact Form 7 
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});


//видалення параметра ver 
function rem_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'rem_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'rem_wp_ver_css_js', 9999 );