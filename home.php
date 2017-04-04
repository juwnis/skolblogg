<?php get_header(); ?>

<section class="jumbotron">
  <div class="container">
  <?php if ( get_header_image() ) { ?>
    <div id="site-header">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    </div>
<?php }
  else {
    echo "<p>Here goes the image</p>";
    } ?>
  </div>
</section>

<div class="container">
  <div class="row">

    <?php
    get_sidebar();
    ?>
    <div class="col-lg-9">
     <?php
     if ( have_posts() ) : while ( have_posts() ) : the_post();
     ?>
     <h1><?php the_title(); ?></h1>
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