<?php
$featuredTitle = get_field("section_title");
$featuredDescription = get_field("section_description");

?>

<div class="projects-intro">
  <h1 class="loud-voice"><?= $featuredTitle ?></h2>
    <p><?= $featuredDescription ?></p>
</div>
<div class="project-cards">
  <?php
  //Access all of the projects, then sort them with a meta_query to only include the 
  //featured projects.
  $featuredCards = get_posts(array(
    'post_type' => 'project',
    'orderby' => 'date',
    'order' => 'ASC',
    'numberposts' => '-1',
    'meta_query' => array(
      array(
        'key'   => 'featured',
        'value' => '1',
      )
    )
  ));

  if ($featuredCards) {
    foreach ($featuredCards as $featuredCard) {
      include(getFile("templates/components/featured-projects.php"));
    }
  }


  ?>
</div>