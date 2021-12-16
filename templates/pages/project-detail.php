<?php
$name = get_field("name");
$projectImage = get_field("project_image");
$description = get_field("description");

if ($projectImage) {
  $projectImage = get_field("project_image");
} else {
  $projectImage = "https://peprojects.dev/alpha-2/purplebox.jpg";
}
?>

<header class="page-header">
  <div class="inner-column">
    <h1 class="title-voice"><?= $name ?></h1>
    <p><?= $description ?></p>
  </div>
</header>

<section class="page-section">
  <div class="inner-column">
    <h1><?php the_field("name"); ?></h1>
  </div>
</section>