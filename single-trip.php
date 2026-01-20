<?php
/**
 * Template Name: Trip Page
 */
get_header(); ?>

<main id="trip-page">

    <section class="hero-flex">
        <div class="hero-content">
            <h1 class="main-title"><?php echo get_field('title_trip'); ?></h1>
            <div class="hero-intro">
                <?php echo get_field('description'); ?>
            </div>
        </div>
        <div class="hero-image">
            <?php
            $main_img = get_field('main_image');
            if ($main_img): ?>
                <img src="<?php echo esc_url($main_img['url']); ?>" alt="<?php echo esc_attr($main_img['alt']); ?>">
            <?php endif; ?>
        </div>
    </section>

    <div class="section-title-wrapper">
        <h2 class="section-title">A PROPOS</h2>
        <div class="section-title-line"></div>
    </div>

    <section class="about-mosaic">
        <?php if (have_rows('about_image')):
            while (have_rows('about_image')):
                the_row();
                $img_l = get_sub_field('left_image');
                $img_c = get_sub_field('center_image');
                $img_r = get_sub_field('right_image');
                ?>
                <div class="col-side">
                    <img src="<?php echo esc_url($img_l['url']); ?>" class="img-v">
                </div>

                <div class="col-center">
                    <div class="about-text">
                        <?php echo get_field('about_text'); ?>
                    </div>
                    <img src="<?php echo esc_url($img_c['url']); ?>" class="img-h">
                    <div class="arrow-down">
                        <i class="fa-solid fa-arrow-down"></i>
                    </div>
                </div>

                <div class="col-side">
                    <img src="<?php echo esc_url($img_r['url']); ?>" class="img-v">
                </div>
            <?php endwhile; endif; ?>
    </section>

    <div class="section-title-wrapper">
        <h2 class="section-title">Les 4 incontournables</h2>
        <div class="section-title-line"></div>
    </div>

    <div class="must-see-grid">
        <?php
        $i = 1;
        if (have_rows('unavoidable')):
            while (have_rows('unavoidable')):
                the_row();
                $un_img = get_sub_field('image');
                $un_name = get_sub_field('name');
                $un_icon = get_sub_field('icon');
                $un_desc = get_sub_field('desc');
                $card_link = '#';
                if (stripos($un_name, 'Palais') !== false || stripos($un_name, 'Wat Phra') !== false) {
                    $card_link = home_url('/le-grand-palais-wat-phra-kaew');
                }
                ?>
                
                <a href="<?php echo esc_url($card_link); ?>" class="must-see-card">
                    <div class="card-image-top" style="background-image: url('<?php echo esc_url($un_img['url']); ?>');">
                        <span class="count"><?php echo $i; ?></span>
                    </div>

                    <div class="card-hover-content">
                        <div class="card-visible-part">
                            <i class="<?php echo esc_attr($un_icon); ?>"></i>
                            <h3><?php echo esc_html($un_name); ?></h3>
                        </div>

                        <div class="card-hidden-part">
                            <p><?php echo esc_html($un_desc); ?></p>
                        </div>
                    </div>
                </a>
                
                <?php
                $i++;
            endwhile;
        endif;
        ?>
    </div>

    <div class="section-title-wrapper">
        <h2 class="section-title">À découvrir aussi</h2>
        <div class="section-title-line"></div>
    </div>

    <div class="trip-grid">
        <?php
        if (have_rows('steps')):
            while (have_rows('steps')):
                the_row();
                $sub_img = get_sub_field('picture');
                $img_url = is_array($sub_img) ? $sub_img['url'] : $sub_img; 
                ?>
                <div class="trip-card">
                    <?php if($img_url): ?>
                        <img src="<?php echo esc_url($img_url); ?>" alt="" />
                    <?php endif; ?>
                    
                    <p class="trip-city"><?php echo get_sub_field('city'); ?></p>
                    <p class="trip-area"><?php echo get_sub_field('area'); ?></p>
                </div>
            <?php endwhile; endif; ?>
    </div>

</main>

<?php get_footer(); ?>