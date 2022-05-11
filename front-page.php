<?php include 'header.php' ?>

    <!--header-->
    <header class="mainHeader">
        <div class="slika">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home-header.jpg" alt="">
        </div>
        <article class="row">
            <div class="col-md-6">
                <h2>WordPress Development</h2>
                <p class="text-white">Pozdrav, ja sam Natasa Bogdanovic, full stack WordPress developer. Pored rada za klijente, bavim se edukacijom u svim tehnologijama koje okružuje WordPress ekosistem.</p>
                
                <a class="btnUnajmi bg-transparent ">Unajmite me</a>
            </div>
        </article>
    </header>

    <!--sekcija opisProjekta-->
    <section class="opisProjekta py container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <h2>Hajde da napravimo vaš website zajedno</h2>
                <button class="btnKontakt btn text-white mt-1">Kontakt</button>
            </div>
            <div class="col-md-6">
                <p>Opišite vaš projekat, koji imate budžet, koje su potrebe i strategija vašeg sajta. Posle prvog sastanka i inputa koje dobijem od vas, pravim predlog rešenja i estimaciju, vremenski okvir u kojem će vaš sajt biti završen.</p>
            </div>
        </div>
    </section>

    <!--sekcija slider-->
    <section class="slider py container-fluid">
        <div class="custom-shape-divider-top-1646081920">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>

        <h3 class="text-center">Usluge</h3>
        <h4 class="text-center">Alati koje preferiram i koristim u radu</h4>
        <article class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/program-cpanel-360x360.jpg" alt=""></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/program-gutenberg.jpg" alt=""></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/program-html-i-css-360x360.jpg" alt=""></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/program-woo-commerce.jpg" alt=""></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/program-wordpress.jpg" alt=""></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/themify-licenca-360x360.jpg" alt=""></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/acf-licenca-360x360.jpg" alt=""></div>
        </article>

        <div class="custom-shape-divider-bottom-1646082773">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>  
    </section>

     <!--blog-->
     <section class="blog container py">
        <h3 class="text-center">Blog</h3>
        <h4 class="text-center mb-5">Dnevnik jednog programera</h4>
        <div class="row">

            <?php $the_query = new WP_Query( array(
                'post-type' => 'post',
                'posts_per_page' => '3'
              ) ); ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

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

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
        </div>
    </section>

<?php include 'footer.php' ?>