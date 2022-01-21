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

<article>
  <header class="page-header">
    <div class="inner-column">
      <?php echo get_hansel_and_gretel_breadcrumbs() ?>
      <h1 class="title-voice"><?= $name ?></h1>
      <p class="regular-voice"><?= $description ?></p>

      <?php
      $user = wp_get_current_user();
      if (in_array('administrator', (array) $user->roles) || in_array('editor', (array) $user->roles)) {
        edit_post_link(__('Edit Post'));
      }

      ?>
    </div>
  </header>


  <section class="post">

    <?php
    include(getFile("module-loop.php"));
    ?>
  </section>

</article>