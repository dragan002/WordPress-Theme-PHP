<article class="latest-news">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    <?php  if(has_post_thumbnail()): ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php endif; ?>
    <div class="meta-info">
        <p>
            Posted in <?php echo get_the_date(); ?> by the <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
            <?php if(has_category()): ?>
                Categories: <?php the_category(' ') ?>
            <?php endif; ?>
            <?php if(has_tag()): ?>
                Tags: <?php the_tags('', ', ') ?>
            <?php endif; ?>
        </p>
    </div>
    <?php the_excerpt(); ?>
</article>
