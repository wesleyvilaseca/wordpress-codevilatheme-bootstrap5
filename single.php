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
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    global $post;
                    $author_id          = $post->post_author;
                    $author_url         = get_author_posts_url($author_id);
            ?>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="entry-image">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('full', [
                                    'class' => 'image_fade'
                                ]) ?>
                            </a>
                        </div>
                    <?php endif ?>

                    <article class="blog-post">
                        <!--<h2 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>-->
                        <p class="blog-post-meta"><?php echo get_the_date() ?>by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a></p>

                        <div class="mt-2 mb-2">
                            <p><?php the_category(' ') ?></p>
                        </div>
                        
                        <div class="entry-content">
                            <?php
                            the_content();
                            $defaults = [
                                'before'           => '<p class="text-center">' . __('Pages:', 'codeVilaSimpleTheme'),
                                'after'            => '</p>',
                            ];
                            wp_link_pages($defaults);
                            ?>

                            <div class="tagcloud clearfix bottommargin">
                                <?php the_tags('', ' ') ?>
                            </div>

                        </div>
                    </article>

                    <div class="post-navigation clearfix">

                        <div class="col_half nobottommargin">
                            <?php previous_post_link() ?>
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <?php next_post_link() ?>
                        </div>

                    </div>

                    <hr>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <?php get_sidebar(); ?>
    </div>

</main>
<?php get_footer() ?>