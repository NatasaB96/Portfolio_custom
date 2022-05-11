<?php include 'header.php' ?>

<!-- header -->
<header class="headeri">
        <div class="slika">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kontakt-header.jpg" alt="">
        </div>
        <article class="row">
            <div class="col-md-6 box">
                <div class="card card-body d-flex justify-content-center cardContact">
                    <h2>Kontakt</h2>
                    <h5>Zakazite termin</h5>    
                </div>
            </div>
            
            <div class="col-md-6"></div>
        </article>
</header>

<!--contanct section-->
<section class="contact container py">
    <div class="row">
        <div class="col-md-6">
            <div class="row rowData h-100 justify-content-center align-items-center">
                <div class="col-md-6 socialContact">
                    <h4>Info</h4>
                    <hr>
                    <ul class="list-unstyled icons">
                        <p><i class="fas fa-phone"></i>&nbsp;0621651665</p>
                        
                        <p><i class="far fa-envelope-open"></i>&nbsp;natasa1996@gmail.com</p>
                    </ul>
                </div>
                <div class="col-md-6 dataContact">
                    <h4>Adresa</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Pukovnika Milana Jovica</li>
                        <li>Loznica</li>
                        <li>Srbija</li>
                    </ul>
                </div>
            </div>
           
        </div>
        <div class="col-md-6">
            <?php
            if ( is_active_sidebar( 'contact-form' ) ) : ?>
                <?php dynamic_sidebar( 'contact-form' ); ?>     
            <?php endif; ?>
        </div>
    </div>
</section>


<?php include 'footer.php' ?>
