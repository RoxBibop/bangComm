			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<p>
					Au service de la communication (et des super-héros) depuis 2009, nous sommes implantés sur
					la Côte d’Opale, mais nous volons à votre secours sur toute la
					France
				</p>

				<div class="footer_under">

					<div class="desc">
						<p>
							<span class="big"><?php bloginfo('name'); ?></span>
							<br>
							31 bd des Alliés
							<br>
							62100 Calais, FRANCE
							<br>
						</p>

						<p class="big">03 21 35 56 91</p>

						<p>
							Sur RDV du lundi au vendredi : <br>
							9h à 12h - 14h à 17h
						</p>

					</div>

					<nav class="footnav">
						<?php html5blank_nav(); ?>
					</nav>

					<form action="" class="contact">
						<p>Contactez-nous !</p>
						<span>(On ne mord pas, enfin pas encore...)</span>
						<input type="text" placeholder="Prénom / Nom">
						<input type="email" name="email" id="email" placeholder="Adresse mail">
						<textarea name="message" id="message" cols="30" rows="10"></textarea>
						<button type="submit">Envoyer</button>
					</form>
				</div>
			</footer>
			<!-- /footer -->

			</div>
			<!-- /wrapper -->

			<?php wp_footer(); ?>

			<!-- analytics -->
			<script>
				(function(f, i, r, e, s, h, l) {
					i['GoogleAnalyticsObject'] = s;
					f[s] = f[s] || function() {
						(f[s].q = f[s].q || []).push(arguments)
					}, f[s].l = 1 * new Date();
					h = i.createElement(r),
						l = i.getElementsByTagName(r)[0];
					h.async = 1;
					h.src = e;
					l.parentNode.insertBefore(h, l)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
				ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
				ga('send', 'pageview');
			</script>

			</body>

			</html>