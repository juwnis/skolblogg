<?php
get_header();
?>

<div class="container category">
	<div class="row">
		<?php
		get_sidebar();
		?>
		<div class="col-md-9">

			<h1 class="text-underline"><?php single_cat_title(); ?></h1>
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
			<?php
					// check if the post or page has a Featured Image assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('min-thumb');
			}
			?>
			<div class="post-meta">
				Author: <?php the_author(); ?> | Created: <?php the_date(); ?>
			</div>
			<?php
			the_excerpt();
			?>
			<hr>
			<?php
			endwhile;
			else :
				_e( 'Sorry, no posts matched your criteria.', 'elefantbajs2000' );
			endif;
			?>
		</div><!-- /col-md-8 -->

	</div><!-- /row -->
</div><!-- /container -->

<?php
get_footer();