<?php get_header(); ?>

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Album example</h1>
    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
    <p>
      <a href="#" class="btn btn-primary">Main call to action</a>
      <a href="#" class="btn btn-secondary">Secondary action</a>
    </p>
  </div>
</section>
<hr>
<div class="container">
  <div class="row">
    <?php
    get_sidebar();
    ?>
      <div class="col-lg-9">
          <h1>The Title</h1>
          <p>
            You Are on Index page
          </p>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
