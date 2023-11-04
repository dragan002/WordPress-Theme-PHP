<article class="latest-news">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="meta-info">
                            <p>
                                Posted in <?php echo get_the_date(); ?> by the <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                Categories: <?php the_category(' ') ?>
                                Tags: <?php the_tags('', ', ') ?>
                            </p>
                        </div>
                        <?php the_excerpt(); ?>
                    </article>