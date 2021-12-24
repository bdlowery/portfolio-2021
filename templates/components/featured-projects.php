<?php
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

    <?php if ($toolsUsed) { ?>
      <div class="test-flex">
        <?php foreach ($toolsUsed as $tool) {
          echo "hello"; ?>

          <span class="quiet-voice"><?= esc_html($tool->name); ?></span>
        <?php } ?>
      </div>


    <?php } ?>
    <p class="description-voice"><?= $description ?></p>
  </div>
</a>