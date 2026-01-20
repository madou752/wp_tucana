<?php 
// footer.php
?>

    <footer id="colophon" class="site-footer">
    <div class="footer-container">

        <div class="footer-column">
            <h3 class="footer-heading">Entreprise</h3>
            <ul class="footer-list">
                <li><a href="<?php echo home_url('/about'); ?>">À propos</a></li>
                <li><a href="#">Offre d'emploi</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Mentions légales</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3 class="footer-heading">Contact</h3>
            <ul class="footer-list">
                <li><a href="<?php echo home_url('/contact'); ?>">Aide & Contact</a></li>
                <li><a href="#">Presse</a></li>
                <li><a href="#">Professionnels</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Publicité</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3 class="footer-heading">Plus</h3>
            <ul class="footer-list">
                <li><a href="#">Écrire un avis</a></li>
                <li><a href="#">Ajouter un lieu</a></li>
                <li><a href="#">S'inscrire</a></li>
                <li><a href="#">Assistance</a></li>
                <li><a href="#">Notifications</a></li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        <ul class="footer-bottom-links">
            <li><a href="#">Paramètres de cookies</a></li>
            <li><a href="#">Confidentialité utilisateur</a></li>
            <li><a href="#">Conditions générales</a></li>
            <li><a href="<?php echo home_url('/contact'); ?>">Contactez-nous</a></li>
        </ul>
        <p class="footer-copyright">@<?php echo date('Y');?> Tucana — Tous droits réservés</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>