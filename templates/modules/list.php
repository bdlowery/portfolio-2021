<?php

$listHeading = get_sub_field("heading");
$listDescription = get_sub_field("description");
$listType = get_sub_field("type");



?>
<section class="list-module">
  <div class="inner-column">
    <h2><?= $listHeading; ?></h2>
    <?= $listDescription; ?>
    <ul>
      <?php
      while (have_rows('items')) {
        the_row();

        $listItems = get_sub_field("item"); ?>

        <li> <?= $listItems; ?></li>
      <?php } ?>
    </ul>
  </div>
</section>