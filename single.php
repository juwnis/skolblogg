<?php
get_header();
?>

	<div class="container single">
		<div class="row">
		<?php
				get_sidebar();
		?>
			<div class="col-md-9">

				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
					<?php
					get_template_part('content', get_post_format() );
					// check if the post or page has a Featured Image assigned to it.
				
				endwhile;
				else :
					_e( 'Sorry, no posts matched your criteria.', 'elefantbajs2000' );
				endif;
				?>
				<hr>
				<?php 
			$popular_posts = new WP_Query('post_type=post&posts_per_page=3');
			if ($popular_posts->have_posts()){
				?>
				<div class="row">
				<?php
				while ($popular_posts->have_posts()){
					?>
						<div class="col-md-4">
					<?php
				$popular_posts->the_post();
				?>
				<h4><?php the_title(); ?></h4>
				<p><?php the_excerpt(); ?></p>
			</div>
				<?php
			}
			?>
			</div>
			<?php
			}
			?>
			</div><!-- /col-md-8 -->
		</div><!-- /row -->
	</div><!-- /container -->

<?php
get_footer();