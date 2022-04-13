<?php get_header() ?>
<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php single_post_title(); ?></h1>
        <span>
            <?php

            if (function_exists('the_subtitle')) {
                the_subtitle();
            }

            ?>
        </span>
    </div>
</section><!-- #page-title end -->


<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <?php

            while (have_posts()) :
                the_post();

                global $post;
                $author_ID          =   $post->post_author;
                $author_URL         =   get_author_posts_url($author_ID);

            ?>
                <?php

                if (has_post_thumbnail()) :
                ?>
                    <div class="entry-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            the_post_thumbnail('full');
                            ?>
                        </a>
                    </div>
                <?php endif; ?>

                <?php

                the_content();

                $defaults = array(
                    'before'           => '<p class="text-center">' . __('Pages:', 'udemy'),
                    'after'            => '</p>',
                );
                
                wp_link_pages($defaults);

                ?>
            <?php endwhile; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>

</main>
<?php get_footer() ?>