<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="error-404">
                <header>
                    <h1>Page not Found</h1>
                    <p>Unfortunately, the page is not founded</p>
                </header>

                <div class="error">
                    <p>How About a doing Search</p>
                    <?php get_search_form(); ?>
                    <?php the_widget('WP_Widget_Recent_Posts', array(
                        'title' => __('Try these recent posts:'),
                        'number' => 3,
                    )); ?>
                </div>
            </div>
        </main>    
    </div>
</div>
<?php get_footer(); ?>