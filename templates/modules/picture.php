<?php
$imageHeading = get_sub_field("heading");
$image = get_sub_field("image")["url"];
$imageDescription = get_sub_field("description");
?>

<section class="picture-module">
  <div class="inner-column">
    <h2><?= $imageHeading; ?></h2>
    <picture>
      <img src="<?= $image; ?>" alt="">
    </picture>
    <?= $imageDescription; ?>
  </div>
</section>