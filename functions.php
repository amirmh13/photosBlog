<?php 

// $args = array(
// 	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
// 	'id'            => 'myPhoto',    // ID should be LOWERCASE  ! ! !
// 	'description'   => '',
//         'class'         => '',
// 	'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 	'after_widget'  => '</li>',
// 	'before_title'  => '<h2 class="widgettitle">',
// 	'after_title'   => '</h2>' );

add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup(){
    load_theme_textdomain( 'photosBlog', get_template_directory() . '/languages' );
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'langSwitcher', 'theme-slug' ),
        'id' => 'langSwitcher',
        'description' => __('langSwitcher')
    ) );

    register_sidebar( array(
        'name' => __( 'order-form-en', 'theme-slug' ),
        'id' => 'order-form-en',
        'description' => __('order-form')
    ) );

    register_sidebar( array(
        'name' => __( 'order-form-fa', 'theme-slug' ),
        'id' => 'order-form-fa',
        'description' => __('order-form')
    ) );

    register_sidebar( array(
        'name' => __( 'contact-us-form-fa', 'theme-slug' ),
        'id' => 'contact-us-form-fa',
        'description' => __('contact-us-form')
    ) );

    register_sidebar( array(
        'name' => __( 'contact-us-form-en', 'theme-slug' ),
        'id' => 'contact-us-form-en',
        'description' => __('contact-us-form')
    ) );
}

?>