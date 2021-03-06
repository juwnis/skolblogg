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

<div class="container page">
  <div class="row">

    <?php
    get_sidebar();
    ?>
    <div class="col-lg-9">
     <?php
     if ( have_posts() ) : while ( have_posts() ) : the_post();
     ?>
     <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h1>
     <?php
     the_excerpt();
     endwhile;
     wp_reset_postdata();
     else :
      _e( 'Sorry, no posts matched your criteria.', 'skolblogg' );
    endif; 
    ?>
  </div>
</div>
<?php get_footer(); ?>   