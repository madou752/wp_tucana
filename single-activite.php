<?php get_header(); ?>

<main class="single-activity-page">

    <?php while (have_posts()):
        the_post();
        
        // 1. RÉCUPÉRATION DES CHAMPS
        $location = get_field('activity_location');
        $price = get_field('activity_price');
        $ages = get_field('activity_ages');
        $duration = get_field('activity_duration');
        $start_time = get_field('activity_start');
        $ticket_type = get_field('activity_ticket');
        $language = get_field('activity_language');
        
        // 2. SÉCURISATION DES IMAGES (Gère Array OU URL pour éviter l'erreur fatale)
        $raw_img1 = get_field('activity_gallery_1');
        $img1 = is_array($raw_img1) ? $raw_img1['url'] : $raw_img1;

        $raw_img2 = get_field('activity_gallery_2');
        $img2 = is_array($raw_img2) ? $raw_img2['url'] : $raw_img2;

        $raw_img3 = get_field('activity_gallery_3');
        $img3 = is_array($raw_img3) ? $raw_img3['url'] : $raw_img3;
        ?>

        <div class="container">

            <div class="activity-header">
                <div class="top-meta">
                    <span class="location-pin"><i class="fa-solid fa-location-dot"></i>
                        <?php echo esc_html($location); ?></span>
                    <nav class="breadcrumb-links">
                        <a href="#">Hôtels</a>
                        <a href="#" class="active">Activités</a>
                        <a href="#">Restaurants</a>
                        <a href="#">Croisières</a>
                    </nav>
                </div>

                <div class="title-row">
                    <h1><?php the_title(); ?></h1>
                    <a href="#" class="share-link"><i class="fa-solid fa-share-nodes"></i> Partager</a>
                </div>
            </div>

            <div class="gallery-wrapper">
                <div class="gallery-col-left">
                    <?php if ($img1): ?>
                        <img src="<?php echo esc_url($img1); ?>" alt="Galerie 1">
                    <?php endif; ?>
                </div>

                <div class="gallery-col-right">
                    <div class="gallery-item-top">
                        <?php if ($img2): ?>
                            <img src="<?php echo esc_url($img2); ?>" alt="Galerie 2">
                        <?php endif; ?>
                    </div>
                    
                    <div class="gallery-item-bottom">
                        <?php if ($img3): ?>
                            <img src="<?php echo esc_url($img3); ?>" alt="Galerie 3">
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="activity-content-wrapper">

                <div class="left-content">
                    
                    <div class="section-header-row">
                        <h2 class="section-title">A PROPOS</h2>
                        <div class="header-line"></div>
                    </div>

                    <div class="description-text">
                        <?php the_content(); ?>
                    </div>
                    
                    <div class="divider-thin"></div>

                    <ul class="activity-features">
                        <li>
                            <i class="fa-solid fa-user-group"></i>
                            <span>Âges : <?php echo esc_html($ages); ?></span>
                        </li>
                        <li>
                            <i class="fa-solid fa-hourglass-start"></i>
                            <span>Durée : <?php echo esc_html($duration); ?></span>
                        </li>
                        <li>
                            <i class="fa-regular fa-clock"></i>
                            <span>Horaire de début : <?php echo esc_html($start_time); ?></span>
                        </li>
                        <li>
                            <i class="fa-solid fa-ticket"></i>
                            <span>Billet : <?php echo esc_html($ticket_type); ?></span>
                        </li>
                        <li>
                            <i class="fa-solid fa-language"></i>
                            <span>Guide : <?php echo esc_html($language); ?></span>
                        </li>
                    </ul>
                </div>

                <div class="right-sidebar">
                    <div class="booking-card">
                        <h3>Sélectionner vos informations</h3>

                        <div class="booking-action-row">
                            <div class="booking-inputs">
                                <div class="fake-input date-input">
                                    <i class="fa-regular fa-calendar"></i> Entrée une date
                                </div>
                                <div class="fake-input pax-input">
                                    <i class="fa-solid fa-user-group"></i> 3
                                </div>
                            </div>
                            <button class="check-btn">Vérifier les disponibilités</button>
                        </div>
                        <div class="price-display">
                            <span class="price-label">A partir de</span>
                            <span class="price-amount"><?php echo esc_html($price); ?> €</span>
                            <span class="price-note">par adulte (prix variable en fonction de la taille du groupe)</span>
                        </div>
                    </div>
                </div>

            </div>

            <?php if (have_rows('steps')): ?>
            <div class="section-header-row mb-large">
                 <h2 class="section-title">Expériences similaires</h2>
                 <div class="header-line"></div>
            </div>
            
            <div class="trip-grid">
                <?php
                    while (have_rows('steps')):
                        the_row();
                        $raw_sub = get_sub_field('picture');
                        // Sécurisation image repeater aussi
                        $sub_img = is_array($raw_sub) ? $raw_sub['url'] : $raw_sub;
                        ?>
                        <div class="trip-card">
                            <?php if($sub_img): ?>
                                <img src="<?php echo esc_url($sub_img); ?>" alt="" />
                            <?php endif; ?>
                            
                            <p class="trip-city"><?php echo get_sub_field('city'); ?></p>
                            <p class="trip-area"><?php echo get_sub_field('area'); ?></p>
                        </div>
                    <?php endwhile; ?>
            </div>
            <?php endif; ?>

        </div>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>