			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="desc">
					<p>
						Au service de la communication (et des super-héros) depuis 2009, nous sommes implantés sur
						la Côte d’Opale, mais nous volons à votre secours sur toute la
						France
					</p>

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

				<nav class="nav">
					<ul>
						<div class="line line-1"></div>
						<li class ="li-1"><a href="#">Nos pouvoirs</a></li>

						<div class="line line-2"></div>
						<li class ="li-2"><a href="#">Le mode d'emploi</a></li>

						<div class="line line-3"></div>
						<li class ="li-3"><a href="#">L'agence</a></li>

						<div class="line line-4"></div>
						<li class ="li-4"><a href="#">Actus</a></li>

						<div class="line line-5"></div>
						<li class ="li-5"><a href="#">Contact</a></li>
					</ul>
				</nav>

				<form action="" class="contact">
					<h3>Contactez-nous !</h3>
					<span>(On ne mord pas, enfin pas encore...)</span>
					<input type="text" placeholder="Prénom / Nom">
					<input type="email" name="email" id="email" placeholder="Adresse mail">
					<textarea name="message" id="message" cols="30" rows="10"></textarea>
					<button type="submit">Envoyer</button>
				</form>


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