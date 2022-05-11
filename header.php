<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>

<body>
    <!-- nav-->
    <nav class="navbar navbar-expand-lg fixed-top justify-content-between pt-4">
        
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 2, 
                    'container'       => 'div',
                    'container_class' => 'menu d-flex w-25 order-0 align-items-baseline',
                    'container_id'    => 'navbarNav',
                    'menu_class'      => 'navbar-nav text-uppercase',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
            ?>

        <div class="logo d-flex w-50 justify-content-center order-1">
            <a href="<?php echo esc_url(home_url()); ?>">Natasa Bogdanovic</a>
        </div>

        <?php
                wp_nav_menu( array(
                    'theme_location'  => 'secondary',
                    'depth'           => 2, 
                    'container'       => 'div',
                    'container_class' => 'socialIcons d-flex w-25 justify-content-end order-2',
                    'container_id'    => 'socials',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
        ?>
    

    </nav>

