<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
                <h2>Services</h2>
                <div class="container-services">
                    <div class="services-item">
                        <?php if (is_active_sidebar('service-1')) {
                            dynamic_sidebar('service-1');
                        } ?>
                    </div>
                    <div class="services-item">
                        <?php if (is_active_sidebar('service-2')) {
                            dynamic_sidebar('service-2');
                        } ?>
                    </div>
                    <div class="services-item">
                        <?php if (is_active_sidebar('service-3')) {
                            dynamic_sidebar('service-3');
                        } ?>
                    </div>
                </div>
            </section>
            <section class="home-blog">
                <h2>Latest news</h2>
                <div class="container">
                    <?php  
                    
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'category__in' => array(4, 1, 5),
                        'category__not_in' => array(25),
                    );

                    var_dump($args);
                   

                    $postlist = new WP_Query($args);

                    if ($postlist->have_posts()):
                        while ($postlist->have_posts()) : $postlist->the_post();
                    ?>
                    <article class="latest-news">
                        <?php the_post_thumbnail('large'); ?>
                        <h3><?php the_title(); ?></h3>
                        <div class="meta-info">
                            <p>
                                Posted in <?php echo get_the_date(); ?> by the <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                Categories: <?php the_category(' ') ?>
                                Tags: <?php the_tags('', ', ') ?>
                            </p>
                        </div>
                        <?php the_excerpt(); ?>
                    </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                    ?>
                    <p>Nothing yet to be displayed</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>
