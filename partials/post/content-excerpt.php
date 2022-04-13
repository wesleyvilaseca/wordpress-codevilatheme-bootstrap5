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
        <h2 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <p class="blog-post-meta"><?php echo get_the_date() ?>by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a></p>

        <p><?php the_category(' ') ?></p>
        <div class="entry-content">
            <?php the_excerpt() ?>
            <a href="<?php the_permalink() ?>" class="more-link">Read More</a>
        </div>
    </article>