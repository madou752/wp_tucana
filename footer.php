<?php 
?>

	<footer id="colophon" class="site-footer">
		<div class="footer-container">
			<div class="footer-brand">
				<h2 class="footer-title">Tucana</h2>
				<p class="footer-tagline">Explore the world with us.</p>
			</div>

			<div class="footer-links">
				<h3 class="footer-links-title">Liens utile</h3>
				<ul class="footer-links-list">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">About Us</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Services</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Contact</a></li>
				</ul>
			</div>

			<div class="footer-socials">
				<ul class="footer-socials-list">
					<li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i>   Facebook</a></li>
					<li><a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i>   Twitter</a></li>
					<li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i>   Instagram</a></li>
				</ul>
			</div>

			<div class="footer-bottom">
				<p>@<?php echo date('Y');?> Tucana -Tout drois réservés</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
