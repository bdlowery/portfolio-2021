<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo wp_get_document_title(); ?></title>
  <!-- Meta Tags -->
  <meta name="description" content="Brian Lowery, Web Developer and Designer in California"" />
  <meta property=" og:image" content="[[meta image source]]" />

  <!-- Styles -->
  <link rel="stylesheet" href="style.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="inner-column">
      <h1>BDL</h1>
      <?php include("templates/components/site-menu.php") ?>
    </div>
  </header>
  <main class="site-content">