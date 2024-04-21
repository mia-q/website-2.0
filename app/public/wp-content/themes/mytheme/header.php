<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>  <!-- this allows wordpress to be in controlf of header. now we have to tell wordpress to upload our css. this happens in functions.php -->
</head>
<body>
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom ">
              <!-- <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                  <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
              </div> -->
    <h1 id = "main-title">Hello.</h1>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?php echo site_url(); ?>" class="nav-link px-2" style="color: #EABE6C">home</a></li>
        <li><a href="<?php echo site_url('/about'); ?>" class="nav-link px-2" style="color: #EABE6C">about me</a></li>
        <li><a href="<?php echo site_url('/resume'); ?>" class="nav-link px-2" style="color: #EABE6C">resume</a></li>
    </ul>
  </header>
    
