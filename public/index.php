<!--

	8888888b.                                  d8b
	888   Y8b
	888   d88   .d88b.  88888b.d88b.   8888b.  888 88888b.
	8888888P'  d88""88b 888 "888 "88b     "88b 888 888 "88b
	888 T88b   888  888 888  888  888 .d888888 888 888  888
	888  T88b  Y88..88P 888  888  888 888  888 888 888  888
	888   T88b  "Y88P"  888  888  888 "Y888888 888 888  888

	Auteur : Romain Marbaix
	Date de création : août 2015
	Refonte du design : août 2016

	Interessé par mes projets ?
	Vous aimez mon code source ?

	Contactez-moi! ;)
	Email: contact@romainmarbaix.be
	Skype: romain.marbaix

-->
<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- meta -->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="CV de Romain Marbaix, Développeur Web Freelance et Technicien en Informatique. HTML5, CSS3, Javascript, PHP, Nodejs." />
	<meta name="keywords" content="developpeur web,belgique,freelance,creation site internet,developpement,developpeur site web,developpeur php,informatique,informaticien" />
	<meta name="author" content="Romain Marbaix" />
	<meta name="robots" content="index, follow" />
	<!-- title -->
	<title>Romain MARBAIX - Developpeur Web Freelance Belge et Technicien en informatique</title>
	<!-- favicon -->
	<link rel="icon" type="image/png" href="static/assets/img/favicon.png" />
	<!-- css -->
	<link rel="stylesheet" href="static/assets/css/style.css"/>
	<link rel="stylesheet" href="static/assets/css/style-responsive-tablet.css" media="screen and (min-width: 741px) and (max-width: 960px)"/>
	<link rel="stylesheet" href="static/assets/css/style-responsive-mobile.css" media="screen and (max-width: 740px)"/>
</head>
<body>
	<nav class="navbar">
		<div class="container">
			<div class="navbar-logo"></div>
			<div class="navbar-list">
				<a href="#home" class="navbar-list-item">Accueil</a>
				<a href="#skills" class="navbar-list-item">Compétences</a>
				<a href="#portfolio" class="navbar-list-item">Portfolio</a>
				<a href="#contact" class="navbar-list-item">Contact</a>
			</div>
		</div>
	</nav>

	<header class="header" id="home">
		<!--
		<video autoplay loop preload=auto class="header-overlay">
			<source src="static/assets/video/overlay.mp4" type="video/mp4" />
		</video>
		-->

		<div class="container header-content">
			<h1 class="header-title">Romain Marbaix</h1>
			<div class="header-description">
				<p>Bonjour, je suis Romain et j'ai 21 ans. Je suis passionné par le développement web et la création d'application web.<br>J'aime tester, expérimenter, découvrir et apprendre en autodidacte sur mes projets perso et pro.</p>
			</div>
			<div class="header-links">
				<a href="static/download/romain-marbaix-cv.pdf" class="header-links-cv">Télécharger mon C.V.</a>
			</div>
		</div>
	</header>

	<section class="section" id="skills">
		<div class="container">
			<h2 class="section-title"><span>Mes compétences et outils</span></h2>
			<div class="section-content skills-content">
				<div class="skills-row">
					<div class="skills-item">
						<div class="skills-item-icon"><img src="static/assets/img/skills-icons/html-5.png" /></div>
						<div class="skills-item-title">HTML 5</div>
					</div>
					<div class="skills-item">
						<div class="skills-item-icon"><img src="static/assets/img/skills-icons/css-3.png" /></div>
						<div class="skills-item-title">CSS 3</div>
					</div>
					<div class="skills-item">
						<div class="skills-item-icon"><img src="static/assets/img/skills-icons/javascript.png" /></div>
						<div class="skills-item-title">Javascript</div>
					</div>
					<div class="skills-item">
						<div class="skills-item-icon"><img src="static/assets/img/skills-icons/php.png" /></div>
						<div class="skills-item-title">PHP</div>
					</div>
					<div class="skills-item">
						<div class="skills-item-icon"><img src="static/assets/img/skills-icons/nodejs.png" /></div>
						<div class="skills-item-title">NodeJS</div>
					</div>
				</div>

				<div class="skills-row">
					<div class="skills-item">
						<div class="skills-item-icon"><img src="static/assets/img/skills-icons/git.png" /></div>
						<div class="skills-item-title">Git</div>
					</div>
					<div class="skills-item">
						<div class="skills-item-icon"><img src="static/assets/img/skills-icons/nginx.png" /></div>
						<div class="skills-item-title">Nginx</div>
					</div>
					<div class="skills-item">
						<div class="skills-item-icon"><img src="static/assets/img/skills-icons/docker.png" /></div>
						<div class="skills-item-title">Docker</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section" id="portfolio">
		<div class="container">
			<h2 class="section-title"><span>Mon portfolio</span></h2>
			<div class="section-content portfolio-content">
				<div class="portfolio-item">
					<div class="portfolio-item-left">
						<img src="static/assets/img/portfolio/thumbnail_pokeath.jpg" />
					</div>
					<div class="portfolio-item-right">
						<h3 class="portfolio-item-title">Poke-Ath <span class="portfolio-item-subtitle">Scanner PokemonGo en live pour Ath</span></h3>
						<p class="portfolio-item-description">
							Poke-Ath dévoile tous les pokémons sur Ath en temps réel.
							Le site permet aussi d'être notifié quand des pokémons rares apparaissent.
						</p>
						<!--
						<a href="#" class="portfolio-item-link">En savoir plus...</a>
						-->
					</div>
				</div>
			</div>

			<div class="section-content portfolio-content">
				<div class="portfolio-item">
					<div class="portfolio-item-left">
						<img src="static/assets/img/portfolio/thumbnail_pokegoextwp.jpg" />
					</div>
					<div class="portfolio-item-right">
						<h3 class="portfolio-item-title">Pokemon Go Map <span class="portfolio-item-subtitle">Extension wordpress</span></h3>
						<p class="portfolio-item-description">
							Plugin wordpress créé pour <a href="http://lesplayersdudimanche.com/">Les players du dimanche</a>.
							Ce plugin affiche une carte interactive. L'utilisateur peut consulter et rajouter des pokemons, des arènes ou des pokestops sur celle-cie.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section" id="contact">
		<div class="container">
			<h2 class="section-title"><span>Me contacter</span></h2>
			<div class="section-content">
				<p>Interessé par mon profil pour travailler sur un projet? </p>
				<form action="" method="post" id="contact-form" class="contact-form">
					<div class="form-group">
						<div class="form-group-label">
							<label for="contact-name" class="form-label">Votre nom :</label>
						</div>
						<div class="form-group-input">
							<input type="text" id="contact-name" name="contact-name" class="form-input" placeholder="Nom" required />
						</div>
					</div>
					<div class="form-group">
						<div class="form-group-label">
							<label for="contact-email" class="form-label">Votre adresse email :</label>
						</div>
						<div class="form-group-input">
							<input type="email" id="contact-email" name="contact-email" class="form-input" placeholder="Adresse email" required />
						</div>
					</div>
					<div class="form-group">
						<div class="form-group-label">
							<label for="contact-subject" class="form-label">Sujet :</label>
						</div>
						<div class="form-group-input">
							<input type="text" id="contact-subject" name="contact-subject" class="form-input" placeholder="Sujet" required />
						</div>
					</div>
					<div class="form-group">
						<label for="contact-message" class="form-label">Message :</label>
						<textarea id="contact-message" name="contact-message" class="form-textarea" placeholder="Message" required></textarea>
					</div>
					<div class="form-group">
						<button class="form-button">Envoyer</button>
					</div>
				</form>

			</div>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<div class="footer-col left">
				<a class="footer-right-links" href="https://www.facebook.com/romain.marbaix" target="_blank"><img src="static/assets/img/social-icons/facebook_circle_gray.png"/></a>
				<a class="footer-right-links" href="https://twitter.com/Befire602" target="_blank"><img src="static/assets/img/social-icons/twitter_circle_gray.png"/></a>
				<a class="footer-right-links" href="https://www.linkedin.com/in/romain-marbaix-2a033b84" target="_blank"><img src="static/assets/img/social-icons/linkedin_circle_gray.png"/></a>
				<a class="footer-right-links" href="https://github.com/Becold" target="_blank"><img src="static/assets/img/social-icons/github_circle_gray.png"/></a>
			</div>
			<div class="footer-col right">
				Design by Romain Marbaix. &copy; Copyright 2016. Tous droits réservés.
			</div>
		</div>
	</footer>

	<div class="loader" id="loader">
		<div class="loader-container">
			<div class="loader-icon1"></div>
			<div class="loader-icon2"></div>
			<div class="loader-icon3"></div>
		</div>
	</div>

	<!-- javascripts -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="static/assets/js/app.js"></script>
	<!--
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-74152152-2', 'auto');
		ga('send', 'pageview');

	</script>
	-->
</body>
</html>