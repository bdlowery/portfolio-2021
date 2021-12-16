<?php

?>

<header class="page-header">
  <div class="inner-column">
    <h1 class="title-voice">My Work</h1>
    <p>A directory for all of my work, past and present.</p>
  </div>
</header>
<section>
  <div class="inner-column">
    <div class="projects-intro">
      <h2 class="strong-voice">Personal Projects</h2>
      <p>These are projects I've made to learn and grow as a developer/designer.</p>
    </div>
    <div class="project-cards">
      <?php
      $parameters = get_posts(array(
        'numberposts'  => -1,
        "post_type" => "project",
        "meta_query" => array(
          array(
            "key" => "project_type",
            'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
            'compare' => 'LIKE'
          ),
        ),
      ));

      $query = new WP_Query($parameters);

      while ($query->have_posts()) : $query->the_post();
        include(getfile("templates/components/project-card.php"));
      endwhile;

      //reset what was done above.
      //Allows looping of more items below this.
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>