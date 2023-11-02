<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
                Services
            </section>
            <section class="home-blog">
                <div class="container">
                    <div class="blog-items">
                    <?php  
                if (have_posts()):
                    while (have_posts()) : the_post();
                ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div class="meta-info">
                        <p>Posted in <?php echo get_the_date(); ?> by the <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
                        <p>Categories: <?php the_category(' ') ?></p>
                        <p>Tags: <?php the_tags('', ', ') ?></p>
                    </div>
                    <?php the_content(); ?>
                </article>
                <?php
                    endwhile;
                else:
                ?>
                <p>Nothing yet to be displayed</p>
                <?php endif; ?>
                    </div>
                </div>
           
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>
