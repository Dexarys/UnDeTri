<?php

function menu_widget_init() {
 
    /*register_sidebar( array(
        'name' => 'menu full screen',
        'id' => 'menu-full-screen',
    ) );

    register_sidebar( array(
        'name' => 'menu full screen (bottom)',
        'id' => 'menu-full-screen-bottom',
    ) );

    register_sidebar( array(
        'name' => 'right footer',
        'id' => 'right-footer',
    ) );

    register_sidebar( array(
        'name' => 'left footer',
        'id' => 'left-footer',
    ) );

    register_sidebar( array(
        'name' => 'bottom footer',
        'id' => 'bottom-footer',
    ) );*/

}
add_action( 'widgets_init', 'menu_widget_init' );