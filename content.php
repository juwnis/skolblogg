<?php
                    // check if the post or page has a Featured Image assigned to it.
                    if ( has_post_thumbnail() ) {
                    the_post_thumbnail('min-thumb');
                        }
                        ?>
                    <h1> <?php the_title(); ?></h1>
                    <div class="post-meta">
                        Created: <?php the_date(); ?>
                    </div>
                    <?php
                    the_content();
                    ?>
                    <div class="author-single">
                    <p>By: <?php the_author(); ?> </p>
                    </div>