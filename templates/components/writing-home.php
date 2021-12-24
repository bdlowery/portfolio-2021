<?php
$title = get_the_title();
$permalink = get_the_permalink();
$description = get_the_excerpt();
$date = get_the_date();
$dateNumbersOnly = get_the_date("Y-m-d")
?>




<a href="<?= $permalink ?>" class="writing-card-link">
  <div class="writing-text">
    <time datetime="<?= $dateNumbersOnly  ?>" class="quiet-voice"><?= $date; ?></time>
    <h2 class="attention-voice"><span><?= $title; ?></span></h2>
    <p class="description-voice"><?= $description ?></p>
  </div>
  <span class="quiet-voice read-more"><span> read more →</span></span>
</a>