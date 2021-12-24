<header class="page-header">
  <div class="inner-column">
    <h1 class="title-voice">My Work</h1>
    <p>A directory for all of my work, past and present.</p>
  </div>
</header>
<?php
$parameters = array(
  "post_type" => "project-type",
  'post__not_in' => array(46),
);

$query = new WP_Query($parameters);

while ($query->have_posts()) : $query->the_post();
  include(getFile("templates/components/project-section.php"));
endwhile;

//reset what was done above.
//Allows looping of more items below this.
wp_reset_postdata();
?>