<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>

<div class="container page">
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
            the_content();
            endwhile;
            wp_reset_postdata();
            else :
                _e( 'Sorry, no posts matched your criteria.', 'skolblogg' );
            endif; 
            ?>

			<?php get_search_form(); ?>

		</div><!-- col-lg-9 -->
	</div><!-- row -->
</div><!-- container -->

<?php get_footer();