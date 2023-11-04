<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if('post' == get_post_type()): ?>
                    <div class="meta-info">
                        <p>Posted in <?php echo get_the_date(); ?> by the <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
                        <p>Categories: <?php the_category(' ') ?></p>
                        <p>Tags: <?php the_tags('', ', ') ?></p>
                    </div>
                    <?php endif; ?>
                    </header>
                    <div class="content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>