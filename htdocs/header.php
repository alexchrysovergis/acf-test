<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="website-header">
    <div class="container-fluid p-3">
      <nav class="navbar navbar-expand-lg d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>

        <div class="d-flex justify-content-center">
          <ul class="navbar-nav">
            <li class="nav-item">
             <?php wp_nav_menu(array('theme_location' => 'headerMenuLocation'));
            ?>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
</body>
</html>
