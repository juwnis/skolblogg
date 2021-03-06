<?php
get_header();
?>

<div class="container category">
	<div class="row">
		<?php get_sidebar(); ?>
		<div class="col-lg-9">

			<h1 class="text-underline"><?php single_cat_title(); ?></h1>
			<div class="container">
				<div class="row">
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
					<div class="col-md-5 offset-md-1 cat-excerpt">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
						<div class="post-meta">
							Author: <?php the_author(); ?> | Created: <?php the_date(); ?>
						</div>
						<?php
						the_excerpt();
						?>
					</div> <!-- /col-md-5 -->
					<?php
					endwhile;
					else :
						_e( 'Sorry, no posts matched your criteria.', 'skolblogg' );
					endif;
					?>
				</div> <!-- /row -->
			</div>	<!-- /container -->
		</div><!-- /col-md-9 -->

		<?php
		get_footer();