<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset = <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
  </head>

  <body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom ">
        <h1></h1>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?php echo site_url(); ?>" class="nav-link px-2 italiana-regular fw-bold"  style="color: black;">Home</a></li>
          <li><a href="<?php echo site_url('/about'); ?>" class="nav-link px-2 italiana-regular fw-bold" style="color: black;">About</a></li>
          <li><a href="<?php echo site_url('/projects'); ?>" class="nav-link px-2 italiana-regular fw-bold"  style="color: black;">Projects</a></li>
          <li><a href="<?php echo site_url('/resume'); ?>" class="nav-link px-2 italiana-regular fw-bold"  style="color: black;">Resume</a></li>
      </ul>
    </header>
    
