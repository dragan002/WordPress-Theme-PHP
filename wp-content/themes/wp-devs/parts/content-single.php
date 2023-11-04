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