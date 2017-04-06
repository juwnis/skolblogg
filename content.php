<?php
// check if the post or page has a Featured Image assigned to it.
if ( has_post_thumbnail() ) {
    the_post_thumbnail('post-thumb');
}
?>
<div class="post-title">
<h1> <?php the_title(); ?></h1>
</div>
<div class="post-meta">
    Created: <?php the_date(); ?>
    <hr>
</div>
<?php
the_content();
?>
<div class="author-single">
    <p>By: <?php the_author(); ?> </p>
</div>