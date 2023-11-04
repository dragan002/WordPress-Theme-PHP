<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="meta-info">
                        <p>Posted in <?php echo get_the_date(); ?> by the <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
                        <p>Categories: <?php the_category(' ') ?></p>
                        <p>Tags: <?php the_tags('', ', ') ?></p>
                    </div>
                    <?php the_excerpt(); ?>
                    <?php wp_link_pages(); ?>
                </article>

                <div class="wpdevs-pagination">
                        <div class="pages next">
                            <?php next_post_link('&laquo; %link') ?>
                        </div>
                        <div class="pages previus">
                            <?php previous_post_link('%link &raquo;'); ?>
                        </div>
                    </div>

                <?php 
                    if(comments_open() || get_comments_number()) {
                        comments_template();
                    }
                ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
