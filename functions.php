<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// Widgets
if (!function_exists('bootscore_widgets_init')) :

  function bootscore_widgets_init() {

    // Top Nav
    register_sidebar(array(
      'name'          => esc_html__('Top Nav', 'bootscore'),
      'id'            => 'top-nav',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="ms-3">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="widget-title d-none">',
      'after_title'   => '</div>'
    ));
    // Top Nav End

    // Top Nav Search
    register_sidebar(array(
      'name'          => esc_html__('Top Nav Search', 'bootscore'),
      'id'            => 'top-nav-search',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="top-nav-search">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="widget-title d-none">',
      'after_title'   => '</div>'
    ));
    // Top Nav Search End

    // Sidebar
    register_sidebar(array(
      'name'          => esc_html__('Sidebar', 'bootscore'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<section id="%1$s" class="widget %2$s card card-body mb-4 bg-light border-0">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title card-title border-bottom py-2">',
      'after_title'   => '</h2>',
    ));
    // Sidebar End

    // Top Footer
    register_sidebar(array(
      'name'          => esc_html__('Top Footer', 'bootscore'),
      'id'            => 'top-footer',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-5">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>'
    ));
    // Top Footer End

    // Footer 1
    register_sidebar(array(
      'name'          => esc_html__('Footer 1', 'bootscore'),
      'id'            => 'footer-1',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title h4">',
      'after_title'   => '</h2>'
    ));
    // Footer 1 End

    // Footer 2
    register_sidebar(array(
      'name'          => esc_html__('Footer 2', 'bootscore'),
      'id'            => 'footer-2',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title h4">',
      'after_title'   => '</h2>'
    ));
    // Footer 2 End

    // Footer 3
    register_sidebar(array(
      'name'          => esc_html__('Footer 3', 'bootscore'),
      'id'            => 'footer-3',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title h4">',
      'after_title'   => '</h2>'
    ));
    // Footer 3 End

    // Footer 4
    register_sidebar(array(
      'name'          => esc_html__('Footer 4', 'bootscore'),
      'id'            => 'footer-4',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title h4">',
      'after_title'   => '</h2>'
    ));
    // Footer 4 End

    // 404 Page
    register_sidebar(array(
      'name'          => esc_html__('404 Page', 'bootscore'),
      'id'            => '404-page',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>'
    ));
    // 404 Page End

    // Bottom Footer
    register_sidebar(array(
      'name'          => esc_html__('Bottom Footer', 'bootscore'),
      'id'            => 'bottom-footer',
      'description'   => esc_html__('Add widgets here.', 'bootscore'),
      'before_widget' => '<div class="footer_widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>'
    ));

  }
  add_action('widgets_init', 'bootscore_widgets_init');

endif;
// Widgets END

/**
 * Onion service functions and definitions.
 *
 * Implements multi-domain support for onion domains using WordPress filter hooks.
 *
 * Acknowledgements: https://blog.paranoidpenguin.net/2017/09/how-to-configure-wordpress-as-a-tor-hidden-service/
 */

if ($_SERVER["HTTP_HOST"] == 'wpxr4uoni5735l45imfd44btckt46gp4oloxcahcemv3suja7jmuayad.onion') {
	add_filter('option_home', 'rewrite_permalinks');
	add_filter('option_siteurl', 'rewrite_permalinks');
	add_filter('bloginfo', 'rewrite_blogname');
	add_filter('option_blogname', 'rewrite_blogname');
	add_filter('post_link', 'rewrite_permalinks');
	add_filter('page_link', 'rewrite_permalinks');
	add_filter('post_type_link', 'rewrite_permalinks');
	add_filter('category_link', 'rewrite_permalinks');
	add_filter('tag_link', 'rewrite_permalinks');
	add_filter('author_link', 'rewrite_permalinks');
	add_filter('day_link', 'rewrite_permalinks');
	add_filter('month_link', 'rewrite_permalinks');
	add_filter('year_link', 'rewrite_permalinks');
	add_filter('nav_menu_link_attributes', 'rewrite_permalinks');
	add_filter('includes_url', 'rewrite_permalinks');
	add_filter('content_url', 'rewrite_permalinks');
	add_filter('admin_url', 'rewrite_permalinks');
	add_filter('feed_link', 'rewrite_permalinks');
	add_filter('stylesheet_uri', 'rewrite_permalinks');
	add_filter('attachment_link', 'rewrite_permalinks');
	add_filter('wp_get_attachment_image_src', 'rewrite_permalinks');
	add_filter('wp_get_attachment_link', 'rewrite_permalinks');
	add_filter('the_excerpt', 'rewrite_permalinks');
	add_filter('the_content', 'rewrite_permalinks');
}

function rewrite_blogname($content) {
	$content = str_replace('Centre for Postdigital Cultures', 'Centre for Postdigital Cultures: onion service', $content);
	return $content;
}

function rewrite_permalinks($content) {
	$content = preg_replace('/https?:\/\/postdigitalcultures.org/', 'http://wpxr4uoni5735l45imfd44btckt46gp4oloxcahcemv3suja7jmuayad.onion', $content);
	return $content;
}
