<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <h1><?php _e('Search results for', 'wp-devs'); ?>: <?php echo get_search_query(); ?></h1>

        <?php  get_search_form(); ?>
            <?php while (have_posts()) : the_post(); 
get_template_part('parts/content', 'search');

                    if(comments_open() || get_comments_number()) {
                        comments_template();
                    }
                ?>
            <?php endwhile;
            the_posts_pagination();
             ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
