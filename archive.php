<?php
get_header();
?>

<div class="container category">
	<div class="row">
		
		<?php get_sidebar(); ?>
		
		<div class="col-md-9">

			<h1 class="text-underline"><?php the_archive_title();?></h1>

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
			<div class="cat-excerpt">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2>
				<div class="post-meta">
				<?php the_date(); ?>
				</div>
				<?php
				the_excerpt();
				?>
			</div>
			<?php
			endwhile;
			else :
				_e( 'Sorry, no posts matched your criteria.', 'skolblogg' );
			endif;
			?>
			
		</div><!-- /col-md-9 -->

		<?php
		get_footer();