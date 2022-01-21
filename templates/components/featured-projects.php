<?php

// ***
// *** INLCUDED IN project-home.php
// ***

$name = get_field("name", $featuredCard);
$projectImage = get_field("project_image", $featuredCard);
$description = get_field("description", $featuredCard);
$toolsUsed = get_field("tool", $featuredCard);
$featuredPermalink = get_permalink($featuredCard);

if ($projectImage) {
  $projectImage = $projectImage["url"];
} else {
  $projectImage = "https://peprojects.dev/alpha-2/purplebox.jpg";
}

?>
<?php

?>

<a class="project-card-link" href="<?= $featuredPermalink ?>">
  <div class="project-card my-work-project-card">
    <picture class="project-picture" style="background-image: url(<?= $projectImage ?>)">
    </picture>
    <h2 class="stern-voice"><span><?= $name ?></span></h2>
    <?php
    $terms = get_the_terms($featuredCard->ID, 'tool');
    ?>
    <div class="tools">
      <?php foreach ($terms as $term) { ?>

        <span class="quiet-voice"><?= $term->name; ?></span>

      <?php } ?>
    </div>
    <p class="description-voice"><?= $description ?></p>
  </div>
</a>