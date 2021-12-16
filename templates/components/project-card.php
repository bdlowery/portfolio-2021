<?php
$name = get_field("name");
$projectImage = get_field("project_image");
$description = get_field("description");
$toolsUsed = get_field("project_tools");

if ($projectImage) {
  $projectImage = $projectImage["url"];
} else {
  $projectImage = "https://peprojects.dev/alpha-2/purplebox.jpg";
}
?>

<a class="project-card-link" href="<?php the_permalink(); ?>">
  <div class="project-card my-work-project-card">
    <picture class="project-picture" style="background-image: url(<?= $projectImage ?>)">
    </picture>
    <h2 class="stern-voice"><span><?= $name ?></span></h2>
    <div class="test-flex">
      <?php if ($toolsUsed) {
        foreach ($toolsUsed as $tool) {
          $permalink = get_permalink($tool->ID);
          $title = get_the_title($tool->ID);
          $custom_field = get_field("field_name", $tool->ID);
      ?>
          <span class="quiet-voice"><?= $title ?></span>
        <?php } ?>
    </div>


  <?php } ?>
  <p class="description-voice"><?= $description ?></p>
  </div>
</a>