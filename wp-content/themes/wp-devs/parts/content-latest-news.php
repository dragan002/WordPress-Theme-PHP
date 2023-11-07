<article class="latest-news">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    <?php if (has_post_thumbnail()): ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php endif; ?>
    <div class="meta-info">
        <p>
            <?php esc_html_e('Posted in', 'wp-devs'); ?> <?php echo get_the_date(); ?> <?php _e('by the', 'wp-devs'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
            <?php if (has_category()): ?>
                <?php esc_html_e('Categories', 'wp-devs'); ?>: <?php the_category(' '); ?>
            <?php endif; ?>
            <?php if (has_tag()): ?>
                <?php esc_html_e('Tags', 'wp-devs'); ?>: <?php the_tags('', ', '); ?>
            <?php endif; ?>
        </p>
        <p><span><?php echo esc_html(get_date() ); ?></span></p>
    </div>
    <?php the_excerpt(); ?>
</article>
