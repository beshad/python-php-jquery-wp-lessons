<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
    wp_nav_menu([
      'menu'            => 'my-custom-menu',
      'theme_location'  => 'my-custom-menu',
      'container'       => 'div',
      'container_id'    => 'navbarCollapse',
      'container_class' => 'collapse navbar-collapse',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav mr-auto',
      'depth'           => 0,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
    ]);
  ?>
</nav>
<!-- <?php wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?> -->