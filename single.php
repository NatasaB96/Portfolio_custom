<?php include 'header.php' ?>

<!-- header -->
<header class="headeri">
        <div class="slika slikaBlogova">
            <?php the_post_thumbnail(); ?>
        </div>
</header>

<!--blog-->
    <section class="blog container py pojedinacniBlogovi">
        <div class="row">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="col-md-8">
                    <div class="card border-0">
                        <div class="meta">
                            <div class="avatar">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                            </div>
                            
                            <div class="autorDate">
                                  <a href="<?php echo get_author_posts_url(get_the_author_meta('id')) ?>"><?php the_author(); ?></a>
                                <p class="date"><?php echo get_the_date(); ?></p>
                                
                            </div>
                            
                            <div class="category">
                                <hr class="vertical">
                                <span><?php the_category($separator = ','); ?></span>
                            </div>
                        </div>
                        <hr class="horizontal">
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                           
                            </a>
                        </div>
                    </div>
                    
                    <?php endwhile; else: ?>
                    <?php _e('Niste uneli ni jedan blog post'); ?>
                    <?php endif; ?>
                    <hr>
                    
                    <div class="postNavigation d-flex justify-content-between">
                        <div class="previous">
                            <?php previous_post_link('%link', ' <i class="fas fa-chevron-left"></i> %title'); ?>    
                        </div>
                        <div class="next">
                            <?php next_post_link( '%link', '%title <i class="fas fa-chevron-right"></i>'); ?>
                        </div>
                    </div>

                    <hr>
                    <?php comments_template(); ?>
            </div>
            <div class="col-md-4">

                <?php get_template_part('searchform') ?>

                <?php
                if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>     
                <?php endif; ?>

                <?php
                if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>     
                <?php endif; ?>

            </div>
            
        </div>
    </section>

<?php include 'footer.php' ?>
