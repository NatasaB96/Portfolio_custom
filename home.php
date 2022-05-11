<?php include 'header.php' ?>

<!-- header -->

<!--ovde izlistavam blog postove -->
<header class="headeri">
        <div class="slika">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog-header.jpg" alt="">
        </div>
        <article class="row">
            <div class="col-md-6 box">
                <div class="card card-body d-flex justify-content-center">
                    <h2>Blog</h2>
                    <h5>Dnevnik jednog programera</h5>    
                </div>
            </div>
            
            <div class="col-md-6"></div>
        </article>
</header>

<!--blog-->
    <section class="blog container py">
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

<?php include 'footer.php' ?>