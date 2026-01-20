<?php
/**
 * Template Name: Page Contact / Aide
 */
get_header('contact'); ?>

<main id="primary" class="site-main contact-page">

    <?php 
    $hero_bg = get_field('bg_image'); 
    $bg_url = $hero_bg ? $hero_bg['url'] : get_template_directory_uri() . '/assets/images/montagne-bg.jpg';
    ?>
    
    <section class="contact-hero" style="background-image: url('<?php echo esc_url($bg_url); ?>');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1><?php echo get_field('title') ?: 'Aide - Contacter Tucana'; ?></h1>
            
            <form class="hero-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="search-inner">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" name="s" placeholder="Trouver les réponses à vos questions ..." />
                    <button type="submit">Recherche</button>
                </div>
            </form>
        </div>
    </section>

    <section class="help-section">
        <div class="container">
            <h2 class="page-subtitle"><?php echo get_field('grid_title'); ?></h2>

            <div class="help-grid">
                <?php 
                // Attention : Le slug ici est 'grid' comme tu l'as demandé
                if(have_rows('grid')): 
                    while(have_rows('grid')): the_row(); 
                        ?>
                        <div class="help-card">
                            <h3><?php echo get_sub_field('subject_name'); ?></h3>
                            
                            <p><?php echo get_sub_field('question_count'); ?></p>
                        </div>
                        <?php 
                    endwhile; 
                else: 
                ?>
                    <p>Aucune catégorie configurée dans le SCF.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="contact-footer">
        <div class="container">
            <h3><?php echo get_field('cta_title'); ?></h3>
            
            <p><?php echo get_field('cta_text'); ?></p>
            
            <a href="#" class="cta-button"><?php echo get_field('cta_btn_label'); ?></a>
        </div>
    </section>

</main>

<?php get_footer(); ?>