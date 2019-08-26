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

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'MyPhoto', 'theme-slug' ),
        'id' => 'myPhoto',
        'description' => __('myPhoto')
    ) );
}
?>