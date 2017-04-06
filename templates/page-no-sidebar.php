<?php
/*
Template Name: No Sidebar Page
*/
get_header();
?>
<div class="container page">
    <div class="row">
        <div class="col-md-12">
            
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
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
</div><!-- /container -->
<?php
get_footer();
?>
