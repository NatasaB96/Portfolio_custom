<?php get_header('pomocni'); ?>

<section class="blog container autorPage py">
        <br>
        <h2>Blog posts: <?php the_author(); ?></h2>
        <br><br>
        <div class="row">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="col">
                    <div class="card border-0">
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                        <div class="meta">
                            <div class="avatar">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('id')) ?>">
                                    <?php echo get_avatar( get_the_author_meta('ID'), 40); ?>
                                </a>
                            </div>
                            <div class="autorDate">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('id')) ?>"><?php the_author(); ?></a>
                                <p class="date"><?php echo get_the_date(); ?></p>
                            </div>
                        
                            <div class="category"><span><?php the_category($separator = ','); ?></span></div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <h4 class="card-title" ><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                            <?php the_excerpt(); ?>
                           
                        </div>
                    </div>
            </div>
            
            <?php endwhile; else: ?>
                    <?php _e('Niste uneli ni jedan blog post'); ?>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>