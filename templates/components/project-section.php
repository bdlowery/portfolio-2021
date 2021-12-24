<?php
$sectionTitle = get_field("section_title");
$sectionDescription = get_field("section_description");

?>
<section>
  <div class="inner-column">
    <div class="projects-intro">
      <h2 class="strong-voice"><?= $sectionTitle ?></h2>
      <p><?= $sectionDescription ?></p>
    </div>
    <div class="project-cards">
      <?php
      //Access all of the posts that are a project.
      //Get the ID of each project type by using a meta_query.
      //Compare ID of project_type on project, and ID of the individual project_type
      $cards = get_posts(array(
        'post_type' => 'project',
        'orderby' => 'date',
        'order' => 'ASC',
        'numberposts' => '-1',
        'meta_query' => array(
          array(
            "key" => "project_type", // name of custom field
            "value" => '"' . get_the_ID() . '"',
            // matches exactly "123", not just 123. This prevents a match for "1234"
            "compare" => "LIKE",
          ),
        ),
      ));

      if ($cards) {
        foreach ($cards as $index => $card) {
          include(getfile("templates/components/project-card.php"));
        }
      }
      ?>
    </div>
  </div>
</section>