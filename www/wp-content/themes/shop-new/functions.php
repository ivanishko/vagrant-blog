<?php

add_filter('show_admin_bar', '__return_false'); // отключить админ бар


if ( ! function_exists( 'shopnew_setup' ) ) :
function shopnew_setup()
{

    register_nav_menus(
        array(
            'menu-1' => __('Primary', 'shop-new'),
            'footer' => __('Footer Menu', 'shop-new'),
            'social' => __('Social Links Menu', 'shop-new'),
        )
    );
}
endif;

add_action( 'after_setup_theme', 'shopnew_setup' );


function twentynineteen_widgets_init() {

    register_sidebar(
        array(
            'name'          => __( 'Footer', 'twentynineteen' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );
