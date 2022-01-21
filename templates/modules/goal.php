<?php
while (have_rows('goal')) {
  the_row();

  $goalHeading = get_sub_field("heading");
  $goalContent = get_sub_field("text");
}

?>
<section class="goal-module">
  <div class="inner-column">
    <div class="goal-content">
      <p><?= $goalHeading ?></p>
      <div class="goal-text">
        <p><?= $goalContent ?></p>
      </div>
    </div>
  </div>
</section>