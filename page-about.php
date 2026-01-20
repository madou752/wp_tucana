<?php
/*
Template Name: Page About
*/

get_header();
?>

<main class="about-page-wrapper">
    <section class="hero-about">
        <div class="container">

            <h1 class="giant-title">
                <span class="d-block line-1">LE</span>
                <span class="d-block line-2">VOYAGE</span>
                <div class="line-3-wrapper">
                    <span class="line-3">COMMENCE</span>
                    <div class="graphic-ici">
                        <span class="bar">|</span>
                        <span class="circle-c">C</span> <span class="bar">|</span>
                    </div>
                </div>
            </h1>

            <div class="sub-hero-keywords">
                <span class="star-icon">
                    &#10036;
                </span>
                <span class="keywords-text">EXPLORER RESSENTIR DÉCOUVRIR</span>
            </div>

            <div class="anchor-nav">
                <a href="#missions" class="dashed-btn">Nos missions</a>
                <a href="#valeurs" class="dashed-btn">Nos valeurs</a>
                <a href="#prevention" class="dashed-btn">Prévention</a>
                <a href="#asso" class="dashed-btn">Les asso</a>
            </div>

        </div>
    </section>
    <section class="adventure-section">
        <div class="container adventure-grid">

            <div class="adventure-visuals">
                <img src="http://toucana.local/wp-content/uploads/2026/01/avion-2.jpg" alt="Avion au décollage" class="img-main">
                <img src="http://toucana.local/wp-content/uploads/2026/01/palmier-2.jpg" alt="Paysage tropical" class="img-overlay">
            </div>

            <div class="adventure-content">
                <h2 class="section-title">Plus qu'un voyage,<br>une aventure</h2>
                <p>
                    Tucana est une plateforme dédiée au voyage responsable. Nous connectons la soif de découverte et
                    l'engagement concret en mettant en avant des initiatives de prévention et des réseaux associatifs
                    locaux pour chaque destination.
                </p>
                <p>
                    Tucana allie la découverte du monde à l'engagement solidaire en connectant vos voyages aux missions
                    des associations locales.
                </p>
            </div>

        </div> <div class="adventure-banner-container">
            <img src="http://toucana.local/wp-content/uploads/2026/01/street-2.jpg" alt="street" class="adventure-full-img">
        </div>

    </section>

    <section class="values-missions-wrapper">
        
        <div id="valeurs" class="container section-spacing">
            <h2 class="centered-title">Nos valeurs</h2>

            <div class="grid-4-cols">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h3>Responsabilité</h3>
                    <p>Encourager des pratiques de voyage respectueuses des cultures locales et de l'environnement</p>
                    <a href="#" class="card-link">Lire plus <span class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>

                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>
                    <h3>Créativité</h3>
                    <p>Imaginer des voyages uniques, originaux et adaptés à chaque personnalité</p>
                    <a href="#" class="card-link">Lire plus <span class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>

                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-universal-access"></i>
                    </div>
                    <h3>Accessibilité</h3>
                    <p>Rendre le voyage possible pour tous avec des offres adaptés aux différents budgets</p>
                    <a href="#" class="card-link">Lire plus <span class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>

                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-hands-praying"></i>
                    </div>
                    <h3>Confiance</h3>
                    <p>Offrir un suivi professionnel, une communication claire et un service client de qualité</p>
                    <a href="#" class="card-link">Lire plus <span class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>

        <div id="missions" class="container section-spacing">
            <h2 class="centered-title">Missions</h2>

            <div class="grid-3-cols">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-regular fa-face-smile"></i>
                    </div>
                    <h3>Inspiration et émotion</h3>
                    <p>Révéler des merveilles du monde à travers des récits visuels et inspirants, en nourrissant la soif davantage pour oser réaliser leurs rêves.</p>
                    <a href="#" class="card-link">Lire plus <span class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>

                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3>Sécurité et organisation</h3>
                    <p>Simplifier la planification de voyages complexes en fournissant des guides pratiques, des outils et conseils. Afin de garantir un voyage sans stress</p>
                    <a href="#" class="card-link">Lire plus <span class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>

                <div class="info-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <h3>Valeur et l’éthique</h3>
                    <p>Promouvoir un tourisme plus responsable et conscient en vous connectant avec des communautés locales pour préserver l'environnement et les cultures.</p>
                    <a href="#" class="card-link">Lire plus <span class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>

    </section>
    <div class="page-content container">
        <?php
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
        ?>
    </div>

</main>

<?php get_footer(); ?>