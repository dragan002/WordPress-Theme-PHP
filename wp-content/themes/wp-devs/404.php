<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="error-404">
                <header>
                    <h1><?php _e('Page not Found', 'wp-devs'); ?></h1>
                    <p><?php _e('Unfortunately, the page is not founded', 'wp-devs'); ?></p>
                </header>

                <div class="error">
                    <p><?php _e('How About a doing Search', 'wp-devs'); ?></p>
                    <?php get_search_form(); ?>
                    <?php the_widget('WP_Widget_Recent_Posts', array(
                        'title' => __('Try these recent posts:', 'wp-devs'),
                        'number' => 3,
                    )); ?>
                </div>
            </div>
        </main>    
    </div>
</div>
<?php get_footer(); ?>