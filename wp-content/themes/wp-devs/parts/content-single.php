<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
            <div class="meta-info">
                <p>
                    <?php esc_html_e('Posted in', 'wp-devs'); ?> <?php echo esc_html(get_the_date()); ?> <?php esc_html_e('by the', 'wp-devs'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                </p>
                <?php if (has_category()): ?>
                    <p><?php esc_html_e('Categories', 'wp-devs'); ?>: <?php the_category(' '); ?></p>
                <?php endif; ?>
                <?php if (has_tag()): ?>
                    <p><?php esc_html_e('Tags', 'wp-devs'); ?>: <?php the_tags('', ', '); ?></p>
                <?php endif; ?>
            </div>
    <?php the_excerpt(); ?>
    <?php wp_link_pages(); ?>
</article>
