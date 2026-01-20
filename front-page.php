<?php
/**
 * Template Name: Page d'Accueil
 * The template for displaying the front page.
 */

get_header('home'); // On appelle header-home.php
?>

<main id="primary" class="site-main home-page">

	<section class="home-hero">
		<div class="container">

			<h1 class="home-title">La destination de vos rêves n'a jamais été aussi proche<br>Il est temps de commencer
				votre recherche</h1>
			<p class="home-subtitle">L'endroit de vos rêves est à quelques clics de vous.<br>Laissez-nous transformer
				vos envies en aventures.</p>

			<form class="big-search-bar" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
				<div class="search-inner">
					<i class="fa-solid fa-magnifying-glass"></i>
					<input type="search" name="s" placeholder="Les endroits de vos rêves..." />
					<button type="submit">Recherche</button>
				</div>
			</form>

			<div class="category-icons-grid">
				<a href="#" class="cat-item active">
					<div class="icon-box"><i class="fa-solid fa-house"></i></div>
					<span>Toutes recherches</span>
				</a>
				<a href="#" class="cat-item">
					<div class="icon-box"><i class="fa-solid fa-tag"></i></div>
					<span>Offres Spéciales</span>
				</a>
				<a href="#" class="cat-item">
					<div class="icon-box"><i class="fa-solid fa-plane"></i></div>
					<span>Vols</span>
				</a>
				<a href="#" class="cat-item">
					<div class="icon-box"><i class="fa-solid fa-bed"></i></div>
					<span>Hôtels</span>
				</a>
				<a href="#" class="cat-item">
					<div class="icon-box"><i class="fa-solid fa-car"></i></div>
					<span>Transports</span>
				</a>
				<a href="#" class="cat-item">
					<div class="icon-box"><i class="fa-solid fa-ship"></i></div>
					<span>Croisières</span>
				</a>
				<a href="#" class="cat-item">
					<div class="icon-box"><i class="fa-solid fa-umbrella-beach"></i></div>
					<span>Activités</span>
				</a>
				<a href="#" class="cat-item">
					<div class="icon-box"><i class="fa-solid fa-utensils"></i></div>
					<span>Restaurants</span>
				</a>
			</div>

		</div>
	</section>

	<section class="promo-section">
		<div class="container">
			<div class="promo-box">

				<div class="promo-image">
					<img src="http://toucana.local/wp-content/uploads/2026/01/grotte.jpg" alt="Offres Hiver">
				</div>

				<div class="promo-divider"></div>

				<div class="promo-content">
					<h2>Profitez des offres du moment</h2>
					<p>Plus de 10 000 activités à découvrir pour plus de souvenirs</p>
					<a href="#" class="btn-outline-white">Découvrez les offres</a>
				</div>

			</div>
		</div>
	</section>
	<section class="world-search-section">
		<div class="container">

			<div class="world-hero-box"
				style="background-image: url('http://toucana.local/wp-content/uploads/2026/01/fond-scaled.png');">

				<div class="world-overlay"></div>

				<div class="world-content">
					<h2>Le monde dans toute ses couleurs</h2>
					<p>Nous prenons soin des détails. Vous, de l'émerveillement.</p>

					<form class="main-booking-form" action="#" method="GET">

						<div class="route-wrapper">
							<div class="input-field left-field">
								<input type="text" id="city-from" placeholder="Partir de ..">
							</div>

							<div class="exchange-icon" id="btn-swap">
								<i class="fa-solid fa-right-left"></i>
							</div>

							<div class="input-field right-field">
								<input type="text" id="city-to" placeholder="A ...">
							</div>
						</div>

						<div class="date-group">
							<label for="date-start" class="date-label">
								<i class="fa-solid fa-calendar-days"></i>
								<span class="date-text">Aller <span class="sep">—</span> Retour</span>
							</label>
							<input type="date" id="date-start" class="hidden-date-input">
						</div>

						<div class="people-group">
							<div class="people-info">
								<i class="fa-solid fa-user-group"></i>
								<span class="label-people">Nombre de personnes</span>
							</div>

							<button type="submit" class="search-btn-orange">
								<i class="fa-solid fa-magnifying-glass"></i>
							</button>
						</div>

					</form>

					<div class="search-options">
						<label class="checkbox-item">
							<input type="checkbox"> Annulation gratuite
						</label>
						<label class="checkbox-item">
							<input type="checkbox"> Des bagages
						</label>
						<label class="checkbox-item">
							<input type="checkbox"> Ajouter des vols à ma recherche
						</label>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                
                <div class="stat-card">
                    <div class="circle-group">
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                    </div>
                    <h3>Partenariats</h3>
                    <p>Ceux qui vous accompagnent</p>
                </div>

                <div class="stat-card">
                    <div class="circle-group">
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                    </div>
                    <h3>4 538 995 +</h3>
                    <p>Nombre de recherche cette semaine</p>
                </div>

                <div class="stat-card">
                    <div class="circle-group">
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                    </div>
                    <h3>4 538 995 +</h3>
                    <p>Nombre de recherche cette semaine</p>
                </div>

                <div class="stat-card">
                    <div class="stars-group">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3>Les voyageurs satisfait</h3>
                    <p>Plus de 500 000 avis</p>
                </div>

            </div>
        </div>
    </section>
	<section class="favorite-countries-section">
        <div class="container">
            
            <div class="section-header">
                <h2 class="orange-title">Les Pays coup de cœur</h2>
                <p class="subtitle">Prenez un bain de soleil</p>
            </div>

            <div class="countries-grid">
                
                <a href="<?php echo home_url('/thailande'); ?>" class="country-card">
                    <div class="img-wrapper">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/thailande.jpg" alt="Thaïlande">
                    </div>
                    <span class="country-name">Thaïlande</span>
                </a>

                <a href="<?php echo home_url('/philippines-2'); ?>" class="country-card">
                    <div class="img-wrapper">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/philippines.png" alt="Philippines">
                    </div>
                    <span class="country-name">Philippines</span>
                </a>

                <a href="<?php echo home_url('/martinique-2'); ?>" class="country-card">
                    <div class="img-wrapper">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/martinique.jpg" alt="Martinique">
                    </div>
                    <span class="country-name">Martinique</span>
                </a>

                <a href="<?php echo home_url('/amerique'); ?>" class="country-card">
                    <div class="img-wrapper">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/state.jpg" alt="Etats-Unis">
                    </div>
                    <span class="country-name">Etats - Unis</span>
                </a>

                <a href="<?php echo home_url('/bresil-2'); ?>" class="country-card">
                    <div class="img-wrapper">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/bresil.jpg" alt="Brésil">
                    </div>
                    <span class="country-name">Brésil</span>
                </a>

                <a href="<?php echo home_url('/portugal'); ?>" class="country-card">
                    <div class="img-wrapper">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/cr7.jpg" alt="Portugal">
                    </div>
                    <span class="country-name">Portugal</span>
                </a>

                <a href="<?php echo home_url('/norvege-2'); ?>" class="country-card">
                    <div class="img-wrapper">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/norvege.jpg" alt="Norvège">
                    </div>
                    <span class="country-name">Norvège</span>
                </a>

                <a href="#" class="arrow-card">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>
        </div>
    </section>
	<section class="activities-section">
        <div class="container">
            
            <div class="section-header">
                <h2 class="orange-title">Activités que vous pourriez aimer</h2>
                <p class="subtitle">Le top du mois</p>
            </div>

            <div class="activities-grid">
                
                <div class="activity-card">
                    <div class="act-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/act1.jpg" alt="Chiens de traîneau">
                    </div>
                    <div class="act-content">
                        <h3>Norvège : Traîneau à chiens avec le husky Isogaisa</h3>
                        <div class="act-infos">
                            <span>Repas inclus</span>
                            <span class="dot">•</span>
                            <span>3.5 heures</span>
                        </div>
                        <div class="act-price">A partir de <strong>212 €</strong></div>
                        
                        <div class="act-rating">
                            <span class="score">4.7</span>
                            <div class="circles">
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle-half-stroke"></i>
                            </div>
                        </div>

                        <div class="act-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="act-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/croco.jpg" alt="Costa Rica">
                    </div>
                    <div class="act-content">
                        <h3>Costa Rica : Nature et sensations fortes</h3>
                        <div class="act-infos">
                            <span>En groupe</span>
                            <span class="dot">•</span>
                            <span>14 jours</span>
                        </div>
                        <div class="act-price">A partir de <strong>399 €</strong></div>
                        
                        <div class="act-rating">
                            <span class="score">4.4</span>
                            <div class="circles">
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-regular fa-circle"></i>
                            </div>
                        </div>

                        <div class="act-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="act-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/act3.png" alt="Lanzarote">
                    </div>
                    <div class="act-content">
                        <h3>Lanzarote : visite guidée en buggy tout-terrain</h3>
                        <div class="act-infos">
                            <span>Petit groupe</span>
                            <span class="dot">•</span>
                            <span>2-3 heures</span>
                        </div>
                        <div class="act-price">A partir de <strong>130 €</strong></div>
                        
                        <div class="act-rating">
                            <span class="score">4.8</span>
                            <div class="circles">
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                            </div>
                        </div>

                        <div class="act-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="act-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/tante.jpg" alt="Canada">
                    </div>
                    <div class="act-content">
                        <h3>Canada : Sur la piste des coureurs des bois</h3>
                        <div class="act-infos">
                            <span>Multi-activités</span>
                            <span class="dot">•</span>
                            <span>10 jours</span>
                        </div>
                        <div class="act-price">A partir de <strong>349 €</strong></div>
                        
                        <div class="act-rating">
                            <span class="score">4.7</span>
                            <div class="circles">
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle-half-stroke"></i>
                            </div>
                        </div>

                        <div class="act-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

                 <div class="activity-card">
                    <div class="act-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/act5.jpg" alt="Dubai">
                    </div>
                    <div class="act-content">
                        <h3>Dubaï : Tyrolienne au-dessus de la marina</h3>
                        <div class="act-infos">
                            <span>1 heure</span>
                        </div>
                        <div class="act-price">A partir de <strong>164 €</strong></div>
                        
                        <div class="act-rating">
                            <span class="score">4.9</span>
                            <div class="circles">
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                                <i class="fa-solid fa-circle"></i>
                            </div>
                        </div>

                        <div class="act-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
	<section class="top-cities-section">
        <div class="container">
            
            <div class="section-header">
                <h2 class="orange-title">Les villes les plus visitées</h2>
            </div>

            <div class="cities-wrapper">
                
                <div class="cities-grid">
                    
                    <a href="#" class="city-card">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/bangkok.png" alt="Bangkok">
                        <span class="city-name">Bangkok</span>
                    </a>
                    <a href="#" class="city-card">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/barca.jpg" alt="Barcelone">
                        <span class="city-name">Barcelone</span>
                    </a>
                    <a href="#" class="city-card">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/paris.jpg" alt="Paris">
                        <span class="city-name">Paris</span>
                    </a>
                    <a href="#" class="city-card">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/grece.png" alt="Grèce">
                        <span class="city-name">Grèce</span>
                    </a>

                    <a href="#" class="city-card">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/egypte.jpg" alt="Le Caire">
                        <span class="city-name">Le Caire</span>
                    </a>
                    <a href="#" class="city-card">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/amsterdam.jpg" alt="Amsterdam">
                        <span class="city-name">Amsterdam</span>
                    </a>
                    <a href="#" class="city-card">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/tokyo.jpg" alt="Tokyo">
                        <span class="city-name">Tokyo</span>
                    </a>
                    <a href="#" class="city-card">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/jakarta.jpg" alt="Jakarta">
                        <span class="city-name">Jakarta</span>
                    </a>

                </div>

                <a href="#" class="arrow-card-tall">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>
        </div>
    </section>
	<section class="cruises-section">
        <div class="container">
            
            <div class="section-header">
                <h2 class="orange-title">Les offres de croisières</h2>
            </div>

            <div class="cruises-grid">
                
                <div class="cruise-card">
                    <div class="cruise-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/asie.png" alt="Asie">
                    </div>
                    <div class="cruise-content">
                        <h3>Asie</h3>
                        <p class="cruise-route">Départ : Keelung, Taïwan <span class="dot">•</span> 4 nuits</p>
                        
                        <div class="cruise-ship">
                            <i class="fa-solid fa-ship"></i>
                            <span>MSC Bellissima</span>
                        </div>

                        <div class="cruise-price-block">
                            <span class="price-label">A partir de <strong>1 251 €</strong></span>
                            <span class="cruise-date">Jeudi 11 Décembre 2025</span>
                        </div>

                        <div class="cruise-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

                <div class="cruise-card">
                    <div class="cruise-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/doha.png" alt="Dubaï">
                    </div>
                    <div class="cruise-content">
                        <h3>Dubaï et Qatar</h3>
                        <p class="cruise-route">Départ : Doha, Qatar <span class="dot">•</span> 7 nuits</p>
                        
                        <div class="cruise-ship">
                            <i class="fa-solid fa-ship"></i>
                            <span>MSC Euribia</span>
                        </div>

                        <div class="cruise-price-block">
                            <span class="price-label">A partir de <strong>885 €</strong></span>
                            <span class="cruise-date">Dimanche 14 Décembre 2025</span>
                        </div>

                        <div class="cruise-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

                <div class="cruise-card">
                    <div class="cruise-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/canarie.png" alt="Canaries">
                    </div>
                    <div class="cruise-content">
                        <h3>Îles Canaries et Madère</h3>
                        <p class="cruise-route">Départ : Santa Cruz de Tenerife <span class="dot">•</span> 7 nuits</p>
                        
                        <div class="cruise-ship">
                            <i class="fa-solid fa-ship"></i>
                            <span>MSC Poesia</span>
                        </div>

                        <div class="cruise-price-block">
                            <span class="price-label">A partir de <strong>405 €</strong></span>
                            <span class="cruise-date">Dimanche 11 Janvier 2026</span>
                        </div>

                        <div class="cruise-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

                <div class="cruise-card">
                    <div class="cruise-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/alaska.png" alt="Alaska">
                    </div>
                    <div class="cruise-content">
                        <h3>Alaska</h3>
                        <p class="cruise-route">Départ : Seattle, United States <span class="dot">•</span> 7 nuits</p>
                        
                        <div class="cruise-ship">
                            <i class="fa-solid fa-ship"></i>
                            <span>MSC Poesia</span>
                        </div>

                        <div class="cruise-price-block">
                            <span class="price-label">A partir de <strong>936 €</strong></span>
                            <span class="cruise-date">Lundi 21 Septembre 2026</span>
                        </div>

                        <div class="cruise-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

                <div class="cruise-card">
                    <div class="cruise-image">
                        <img src="http://toucana.local/wp-content/uploads/2026/01/caraibe-scaled.png" alt="Caraïbes">
                    </div>
                    <div class="cruise-content">
                        <h3>Caraïbes et Antilles</h3>
                        <p class="cruise-route">Départ : Miami, Etats-Unis <span class="dot">•</span> 5 nuits</p>
                        
                        <div class="cruise-ship">
                            <i class="fa-solid fa-ship"></i>
                            <span>MSC Poesia</span>
                        </div>

                        <div class="cruise-price-block">
                            <span class="price-label">A partir de <strong>416 €</strong></span>
                            <span class="cruise-date">Samedi 17 Octobre 2026</span>
                        </div>

                        <div class="cruise-footer">
                            <button class="heart-btn"><i class="fa-regular fa-heart"></i></button>
                            <a href="#" class="btn-offer">Voir l'offre</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cruises-bottom-btn">
                <a href="#" class="btn-outline-large">Voir les croisières</a>
            </div>

        </div>
    </section>
	<script>
		document.addEventListener('DOMContentLoaded', function () {

			// 1. Fonction pour inverser les villes (Swap)
			const swapBtn = document.getElementById('btn-swap');
			const cityFrom = document.getElementById('city-from');
			const cityTo = document.getElementById('city-to');

			if (swapBtn && cityFrom && cityTo) {
				swapBtn.addEventListener('click', function () {
					// On stocke la valeur A
					let temp = cityFrom.value;
					// A devient B
					cityFrom.value = cityTo.value;
					// B devient la valeur stockée (A)
					cityTo.value = temp;

					// Petite animation de rotation
					this.style.transform = "translate(-50%, -50%) rotate(180deg)";
					setTimeout(() => {
						this.style.transform = "translate(-50%, -50%) rotate(0deg)";
					}, 300);
				});
			}

			// 2. Gestion simple de la date (Ouvrir le calendrier au clic sur le texte)
			const dateInput = document.getElementById('date-start');
    const dateTextSpan = document.querySelector('.date-text');
    
    if(dateInput && dateTextSpan) {
        // Quand l'utilisateur choisit une date
        dateInput.addEventListener('change', function() {
            if(this.value) {
                // On formate la date pour faire joli (ex: 24 Jan)
                const dateObj = new Date(this.value);
                const options = { day: 'numeric', month: 'short' };
                const formattedDate = dateObj.toLocaleDateString('fr-FR', options);
                
                // On remplace "Aller - Retour" par la date choisie
                dateTextSpan.innerHTML = formattedDate + ' <span class="sep">—</span> Retour';
                
                // Change la couleur pour montrer que c'est rempli
                dateTextSpan.style.color = "#1a1446";
					}
				});
			}
		});
	</script>
</main>

<?php get_footer(); ?>