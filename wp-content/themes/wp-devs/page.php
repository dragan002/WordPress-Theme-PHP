<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" class="header_img">

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
                <div class="container">
                    <div class="page-items">
                    <?php  
                    while (have_posts()) : the_post();
  
                    get_template_part('parts/content', 'page'); 
                    
                    if(comments_open() || get_comments_number()) {
                        comments_template();
                    }
                ?>
                
                <?php
                    endwhile;
                ?>
                    </div>
                </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>
