<?php
/**
 * Header spécifique pour la Page d'Accueil
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        
        <header id="masthead" class="site-header home-header">
            <div class="header-top">
                <div class="header-left">
                    <button class="menu-toggle" aria-label="Menu">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="header-logo">
                         <?php 
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                        ?>
                    </div>
                </div>

                <div class="header-icons">
                    <a href="#" class="icon-btn"><i class="fa-regular fa-heart"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-globe"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="#" class="login-btn">Se connecter</a>
                </div>
            </div>
        </header>