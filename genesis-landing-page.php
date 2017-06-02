<?php
/**
 * Created by PhpStorm.
 * User: marcmiller
 * Date: 6/2/17
 * Time: 3:44 AM
 */

// This file adds the Landing template to the Exit Theme.

// Template Name: Landing

// Add custom body class to the head
add_filter( 'body_class', 'exit_add_body_class' );
function exit_add_body_class( $classes ) {
    $classes[] = 'exit-landing';
    return $classes;
}

// Remove header, navigation, breadcrumbs, footer widgets, footer
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_before_header', 'genesis_do_subnav' );
remove_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
remove_theme_support( 'genesis-menus' );
remove_action( 'genesis_before_header', 'utility_bar' );
remove_action( 'genesis_before_footer', 'exit_before_footer_widget_area', 1 );
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'sp_custom_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

genesis();