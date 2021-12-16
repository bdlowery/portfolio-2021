<?php

//fix root file path issues with wordpress.
function getFile($path)
{
  return dirname(__FILE__) . "/" . $path;
}


// Disable Wordpress Admin Bar for all users
add_filter("show_admin_bar", "__return_false");

//load css into the website's front-end
function mytheme_enqueue_style()
{
  wp_enqueue_style("mytheme-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "mytheme_enqueue_style");


//enable wordpress menus under Appearance
function register_my_menu()
{
  register_nav_menu("site-menu", __("Site Menu"));
}
add_action("init", "register_my_menu");
