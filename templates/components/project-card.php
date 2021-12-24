<?php
//only get the field associated with the correct card ID.
$name = get_field("name", $card->ID);
$projectImage = get_field("project_image", $card->ID);
$description = get_field("description", $card->ID);
$toolsUsed = get_field("tool", $card->ID);
$permalink = get_permalink($card->ID);

if ($projectImage) {
  $projectImage = $projectImage["url"];
} else {
  $projectImage = "https://peprojects.dev/alpha-2/purplebox.jpg";
}

?>
<?php

?>

<a class="project-card-link" href="<?= $permalink ?>">
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