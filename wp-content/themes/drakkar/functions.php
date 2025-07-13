<?php

/**
 * Drakkar Theme Functions
 * 
 * @package Drakkar
 */

// Prevent direct access
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Theme Setup
 */
function drakkar_theme_setup()
{
	// Add theme support
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
		'height'      => 100,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array('site-title', 'site-description'),
	));
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	// Register navigation menus
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'drakkar'),
	));
}
add_action('after_setup_theme', 'drakkar_theme_setup');

/**
 * Enqueue scripts and styles
 */
function drakkar_scripts()
{
	// Enqueue theme stylesheet
	wp_enqueue_style('drakkar-style', get_stylesheet_uri(), array(), '1.0.0');

	// Enqueue theme JavaScript
	wp_enqueue_script('drakkar-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

	// Enqueue responsive script for mobile menu
	wp_enqueue_script('drakkar-mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'drakkar_scripts');

/**
 * Get custom logo or fallback
 */
function drakkar_get_logo()
{
	if (has_custom_logo()) {
		return get_custom_logo();
	} else {
		// Fallback to logo in wp-content/logos directory
		$logo_svg = home_url('/wp-content/logos/logo-drakkar-full.svg');
		$logo_png = home_url('/wp-content/logos/logo-drakkar-full.png');

		if (file_exists(ABSPATH . 'wp-content/logos/logo-drakkar-full.svg')) {
			return '<a href="' . esc_url(home_url('/')) . '" class="custom-logo-link" rel="home">
                        <img src="' . esc_url($logo_svg) . '" class="custom-logo" alt="' . esc_attr(get_bloginfo('name')) . '" />
                    </a>';
		} elseif (file_exists(ABSPATH . 'wp-content/logos/logo-drakkar-full.png')) {
			return '<a href="' . esc_url(home_url('/')) . '" class="custom-logo-link" rel="home">
                        <img src="' . esc_url($logo_png) . '" class="custom-logo" alt="' . esc_attr(get_bloginfo('name')) . '" />
                    </a>';
		}
	}
	return false;
}

/**
 * Custom Walker for Navigation Menu
 */
class Drakkar_Walker_Nav_Menu extends Walker_Nav_Menu
{

	function start_lvl(&$output, $depth = 0, $args = null)
	{
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"sub-menu\">\n";
	}

	function end_lvl(&$output, $depth = 0, $args = null)
	{
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul>\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

		$item_output = isset($args->before) ? $args->before : '';
		$item_output .= '<a' . $attributes . '>';
		$item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
		$item_output .= '</a>';
		$item_output .= isset($args->after) ? $args->after : '';

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}

	function end_el(&$output, $item, $depth = 0, $args = null)
	{
		$output .= "</li>\n";
	}
}

/**
 * Customize the excerpt length
 */
function drakkar_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'drakkar_excerpt_length');

/**
 * Add viewport meta tag for responsive design
 */
function drakkar_viewport_meta()
{
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
}
add_action('wp_head', 'drakkar_viewport_meta');

/**
 * Fallback menu when no menu is assigned
 */
function drakkar_fallback_menu()
{
	echo '<ul id="primary-menu" class="menu">';
	echo '<li><a href="' . esc_url(home_url('/')) . '">Lavoura Online</a></li>';
	echo '<li><a href="#agricultura">Agricultura de Precisão</a></li>';
	echo '<li><a href="#historias">Histórias de Sucesso</a></li>';
	echo '<li><a href="#sobre">A Drakkar</a></li>';
	echo '<li><a href="#newsletter">Newsletter</a></li>';
	echo '</ul>';
}
