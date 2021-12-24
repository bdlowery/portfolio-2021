 <?php
  $menuParameters = array(
    "theme_location" => "site-menu",
    "container" => "nav",
    "container_class" => "site-menu",
    'link_before'     => '<span>',
    'link_after'      => '</span>',
    'echo'            => false,
    'items_wrap'      => '%3$s',
    'depth'           => 1,
  );

  echo strip_tags(wp_nav_menu($menuParameters), '<nav>, <a>, <span>');
  ?>

  