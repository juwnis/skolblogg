<?php
get_header();
?>

<div class="container page">
    <div class="row">
    <?php
            get_sidebar();
            ?>
        <div class="col-md-8">
            <h6>Page</h6>
            <?php

            if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <?php
            the_content();
            endwhile;
            wp_reset_postdata();
            else :
                _e( 'Sorry, no posts matched your criteria.', 'skolblogg' );
            endif; 
            ?>
        </div><!-- /col-md-8 -->
        <div class="col-md-4">
        </div><!-- /col-md-4 -->
    </div><!-- /row -->
</div><!-- /container -->

<?php
get_footer();