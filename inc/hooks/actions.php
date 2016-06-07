<?php
/**
 * All core theme actions.
 * DO NOT EDIT THIS FILE EVER!
 * You can remove any action via a child theme using remove_action()
 *
 * @package WPSP_Blog
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Outer Wrap > Before
-------------------------------------------------------------------------------*/
add_action( 'wpsp_outer_wrap_before', 'wpsp_mobile_menu_navbar' );
add_action( 'wpsp_outer_wrap_before', 'wpsp_mobile_menu_fixed_top' );

/* Wrap > Top
-------------------------------------------------------------------------------*/
//add_action( 'wpsp_hook_wrap_top', 'wpsp_top_bar', 5 );
add_action( 'wpsp_hook_wrap_top', 'wpsp_header' );

/* Header > Before
-------------------------------------------------------------------------------*/
//add_action( 'wpsp_hook_header_before', 'wpsp_post_slider' );
add_action( 'wpsp_hook_header_before', 'wpsp_overlay_header_wrap_open', 9999 );

/* Header > Top
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_header_top', 'wpsp_header_menu' );

/* Header > Inner
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_header_inner', 'wpsp_header_logo' );
add_action( 'wpsp_hook_header_inner', 'wpsp_header_aside' );
add_action( 'wpsp_hook_header_inner', 'wpsp_header_menu' );
add_action( 'wpsp_hook_header_inner', 'wpsp_mobile_menu_icons' );
add_action( 'wpsp_hook_header_inner', 'wpsp_search_dropdown' );
add_action( 'wpsp_hook_header_inner', 'wpsp_search_header_replace' );

/* Header > Bottom
-------------------------------------------------------------------------------*/
//add_action( 'wpsp_hook_header_bottom', 'wpsp_post_slider' );
add_action( 'wpsp_hook_header_bottom', 'wpsp_header_menu' );
add_action( 'wpsp_hook_header_bottom', 'wpsp_mobile_menu_navbar' );

/* Menu > Bottom
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_main_menu_bottom', 'wpsp_search_dropdown' );

/* Content > Top
-------------------------------------------------------------------------------*/
//add_action( 'wpsp_hook_content_top', 'wpsp_page_header' );
//add_action( 'wpsp_hook_content_top', 'wpsp_post_slider' );

/* Content > Bottom
-------------------------------------------------------------------------------*/
//add_action( 'wpsp_hook_content_bottom', 'wpsp_next_prev' );

/* Content > Before
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_content_before', 'wpsp_overlay_header_wrap_open', 9999 );

/* Content > After
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_content_after', 'wpsp_overlay_header_wrap_close', 9999 );

/* Wrap > Bottom
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_wrap_bottom', 'wpsp_footer' );

/* Footer > Before
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_footer_before', 'wpsp_footer_reveal_open', 0 );
add_action( 'wpsp_hook_footer_before', 'wpsp_footer_callout' );

/* Footer > Inner
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_footer_inner', 'wpsp_footer_widgets' );

/* Footer > After
-------------------------------------------------------------------------------*/
add_action( 'wpsp_hook_footer_after', 'wpsp_footer_bottom' );
add_action( 'wpsp_hook_footer_after', 'wpsp_footer_reveal_close', 99 );

/* WP_Footer
-------------------------------------------------------------------------------*/
add_action( 'wp_footer', 'wpsp_mobile_menu_alt' );
add_action( 'wp_footer', 'wpsp_mobile_searchform' );
add_action( 'wp_footer', 'wpsp_search_overlay' );
add_action( 'wp_footer', 'wpsp_sidr_close' );
add_action( 'wp_footer', 'wpsp_scroll_top' );