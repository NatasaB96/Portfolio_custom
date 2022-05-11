<!--footer-->
<footer>
        <div class="container">
            <div class="row text-white">
                
            <?php
            if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <?php dynamic_sidebar( 'footer-1' ); ?>     
            <?php endif; ?>

            <?php
            if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <?php dynamic_sidebar( 'footer-2' ); ?>     
            <?php endif; ?>

            <?php
            if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <?php dynamic_sidebar( 'footer-3' ); ?>     
            <?php endif; ?>

            </div>
            <div class="bottom-bar text-center mt-3">
                <a href="" style="color:black"><small>&copy;<span style="color:white">Natasa Bogdanovic</span>2022</small></a>
            </div>
        </div>
           
    </footer>

    <?php wp_footer();?>
</body>
</html>