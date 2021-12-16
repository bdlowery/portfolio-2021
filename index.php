<?php get_header(); ?>

<?php
//regular page
if (is_page("home")) {
  include("templates/pages/home.php");
}

//regular page
if (is_page("my-work")) {
  include("templates/pages/my-work.php");
}

//project detail page....
//$todo "projects" seems problematic for a single page.
if (is_singular("project")) {
  include("templates/pages/project-detail.php");
}

if (is_404()) {
  include("templates/pages/page-not-found.php");
}
?>

<?php get_footer(); ?>