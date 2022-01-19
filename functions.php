<?php

include("functions/utilities.php");

function getFile($path)
{
  return dirname(__FILE__) . "/" . $path;
}

// Disable Wordpress Admin Bar for all users
add_filter("show_admin_bar", "__return_false");

//load css into the website's front-end
function portfolio_enqueue_style()
{
  wp_enqueue_style("portfolio-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "portfolio_enqueue_style");

//load js into the website's front-end
function portfolio_enqueue_scripts()
{
  wp_enqueue_script('portfolio-js', get_theme_file_uri('script.js'), [], null, true);
}
add_action("wp_enqueue_scripts", "portfolio_enqueue_scripts");



//enable wordpress menus under Appearance
function register_my_menu()
{
  register_nav_menu("site-menu", __("Site Menu"));
}
add_action("init", "register_my_menu");


//wp-admin login functions

function my_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
  return "Brian Lowery's Portfolio";
}
add_filter('login_headertext', 'my_login_logo_url_title');


function my_login_stylesheet()
{
  wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/wp-admin-login.css');
  wp_enqueue_script('custom-login', get_stylesheet_directory_uri() . '/wp-admin-login.js');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');


// The proper way to enqueue GSAP script
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script()
{
  wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', array(), false, true);
  wp_enqueue_script('gsap-js2', get_template_directory_uri() . '/js/custom-gsap-scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'theme_gsap_script');
