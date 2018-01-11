<?php
/*
Plugin Name: dv-favorites
Description: Добавление статей в избранное
Version: 0.1
Author: Denis Venediktov
*/
require __DIR__."/functions.php";

add_filter( 'the_content', 'dv_favorites' );
add_action( "wp_enqueue_scripts", "dv_favorites_scripts" );
add_action( "wp_ajax_dv_favorites_test", "dv_favorites_test" );