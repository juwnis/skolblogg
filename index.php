<?php get_header(); ?>


  <div class="container">
  <?php if ( get_header_image() ) { ?>
    <div id="site-header" class="col" style="background-image: url('<?php header_image(); ?>');">

            <h1 style="color:<?php echo get_header_textcolor(); ?>"><?php echo get_theme_mod( "showcase_heading", 'Developer with an eye for Wordpress sites' ); ?> </h1>
    </div>
<?php }
  else {
    echo "<p>Here goes the image</p>";
    } ?>
  </div>

<hr>
<div class="container">
  <div class="row">
    <?php
    get_sidebar();
    ?>
      <div class="col-lg-9">
          <h1>The Title</h1>
          <p>
            Something went wrong...
          </p>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
