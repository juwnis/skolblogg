<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php
  wp_head();
  ?>

  <title><?php bloginfo('name'); ?></title>

</head>

<body>

  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    
    <div class="logo">
    <?php

      if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
      }
 
    ?>
    </div> <!-- logo -->
    <div class="blog-title">
    <h3><?php echo bloginfo('name'); ?></h3>
    </div><!-- blog-title -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu( array(
      'theme_location'    => 'header-menu',
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse header-text',
      'container_id'      => 'navbarCollapse',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => '__return_false',
      'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'             => 2,
      'walker'            => new bootstrap_4_walker_nav_menu()
      ) );
      ?>
    </nav>     
