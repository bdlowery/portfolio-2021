<?php
$content = apply_filters('the_content', get_the_content());
$title = get_the_title();
$permalink = get_the_permalink();
$description = get_the_excerpt();
$date = get_the_date();
$dateNumbersOnly = get_the_date("Y-m-d")

?>
<article>
  <header class="page-header">
    <div class="inner-column">
      <h1 class="loud-voice"><?= $title ?></h1>
      <p><em><?= $description ?></em></p>
    </div>
  </header>

  <section class="post">
    <?php
    include(getFile("module-loop.php"));
    ?>
  </section>
</article>