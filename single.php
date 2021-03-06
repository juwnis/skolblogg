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
				_e( 'Sorry, no posts matched your criteria.', 'skolblogg' );
			endif;
			?>
			<hr>
			<?php
				// Get latest posts and exclude current post
			$post_id = get_queried_object_id();
			$exclude = array($post_id);
			$popular_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => $exclude));
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
							<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h4>
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