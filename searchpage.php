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

			<?php get_search_form(); ?>

		</div><!-- col-lg-9 -->
	</div><!-- row -->
</div><!-- container -->

<?php get_footer();