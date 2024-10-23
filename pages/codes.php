<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mi-Sun's CV</title>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
		<link rel="stylesheet" href="../asset/style/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-rmI4EfT2U1OJXXKuMKPH6s84TaQp2LXgjzhpBVT5fryCn1xAshdv7T/LnVzzp+5qkGRnhLeYABuphMBrBnQgHQ=="
		crossorigin="anonymous" />
	</head>

	<body>
		<main>
			<?php
				include("../header.html");
			?>
			<div class= "btn-codes">
				<a href="#code-section-js" class="common-btn" id="openPdfBtn1">Concept</a> 
				<a href="#code-section-geojson" class="common-btn" id="openPdfBtn1">Geojson</a> 
				<a href="#code-section-js" class="common-btn" id="openPdfBtn1">JavaScript</a> 
				<a href="#code-section-php" class="common-btn" id="openPdfBtn1">Php</a> 
				<a href="#code-section-js" class="common-btn" id="openPdfBtn1">Design</a> 
			</div>

			<div class="code-container">

			<!-- GeoJSON Data Section -->
			<h1>Explication des Données GeoJSON</h1>
				<section id="code-section-geojson">
					<h2>1. Données GeoJSON: expériences.geojson</h2>
					<p>Ce fichier contient une <code>FeatureCollection</code> 
					qui offre un aperçu détaillé des expériences professionnelles, 
					mettant en lumière les compétences techniques et les contributions 
					dans divers domaines. Chaque <code>Feature</code> représente 
					une expérience significative, pertinente pour le développement web 
					et la gestion de projets.</p>
					
					<h3>Structure des Données :</h3>
					<ul>
						<li><strong>type :</strong> FeatureCollection</li>
						<li><strong>features :</strong> Un tableau d'objets de type <code>Feature</code> fournissant des informations critiques sur les expériences passées.</li>
					</ul>
					
					<h4>Détails de Chaque <code>Feature</code> :</h4>
					<ul>
						<li><strong>geometry :</strong> Indique la localisation précise à l'aide de points géographiques, facilitant la visualisation et l'analyse spatiale.</li>
						<li><strong>properties :</strong> Comprend des détails riches et variés, tels que :</li>
						<ul>
							<li><strong>nom :</strong> Titre de l'organisation ou du projet, essentiel pour la reconnaissance des compétences.</li>
							<li><strong>date :</strong> Durée de l'expérience, montrant un engagement à long terme.</li>
							<li><strong>lieu :</strong> Localisation géographique, pertinente pour le ciblage de marché.</li>
							<li><strong>type_id :</strong> Identifiant du type de rôle (développeur, gestion, ONG, etc.), facilitant la catégorisation des compétences.</li>
							<li><strong>type_nom :</strong> Description détaillée du rôle, utile pour les systèmes de filtrage des candidatures.</li>
							<li><strong>zone :</strong> Zone géographique (Europe, Afrique, Asie), importante pour l'analyse des opportunités de marché.</li>
							<li><strong>activites :</strong> Liste d'activités, démontrant des compétences techniques et managériales pertinentes.</li>
						</ul>
					</ul>
					
					<h3>Exemples de Données :</h3>
					<ul>
						<li><strong>42 Lyon</strong> :
							<ul>
								<li><strong>lieu :</strong> Charbonnières-les-Bains</li>
								<li><strong>type :</strong> Développeur informatique</li>
								<li><strong>activités :</strong> Programmation d'algorithmes, Shell Unix & C, montrant des compétences en développement logiciel.</li>
							</ul>
						</li>
						<li><strong>Ice Development</strong> :
							<ul>
								<li><strong>lieu :</strong> Lyon</li>
								<li><strong>type :</strong> Développeur Web</li>
								<li><strong>activités :</strong> Création de sites web, développement avec WordPress, PHP, JavaScript, MySQL, et CSS, prouvant des compétences techniques solides.</li>
							</ul>
						</li>
						<li><strong>Infographiste-Designer</strong> :
							<ul>
								<li><strong>lieu :</strong> Lyon</li>
								<li><strong>type :</strong> Infographie-Design</li>
								<li><strong>activités :</strong> Création de sites web, logos, et cartes de menu, mettant en avant créativité et compétences en design.</li>
							</ul>
						</li>
						<li><strong>ONG de bénévolat caritatif</strong> (Afrique du Sud) :
							<ul>
								<li><strong>type :</strong> Humanitaire</li>
								<li><strong>activités :</strong> Chef d'équipe, aide sociale, cuisinière, illustrant des capacités de leadership et de collaboration.</li>
							</ul>
						</li>
					</ul>
				</section>

				<section class="code-section">
					<h2>2. Données GeoJSON: expériences.geojson.bak</h2>
					<p>Ce fichier fournit des évaluations de propriétés 
						commerciales sous forme de <code>FeatureCollection</code>, 
						permettant une analyse approfondie pour des décisions stratégiques 
						en matière d'implantation. Il est essentiel pour les entreprises 
						souhaitant comprendre le paysage commercial.</p>
					
					<h3>Structure des Données :</h3>
					<ul>
						<li><strong>type :</strong> FeatureCollection</li>
						<li><strong>features :</strong> Inclut des objets de type <code>Feature</code> qui contiennent des attributs d'évaluation critiques :</li>
					</ul>
					
					<h4>Détails de Chaque <code>Feature</code> :</h4>
					<ul>
						<li><strong>geometry :</strong> Définit le type de point et les coordonnées, facilitant la cartographie des opportunités.</li>
						<li><strong>properties :</strong> Donne des détails sur l'évaluation et l'état de l'espace, y compris :</li>
						<ul>
							<li><strong>adresse :</strong> Localisation précise, indispensable pour l'implantation stratégique.</li>
							<li><strong>activite :</strong> Type d'activité (ex: restauration), indiquant le marché ciblé.</li>
							<li><strong>loyer annuel :</strong> Coût de location, essentiel pour les analyses de rentabilité.</li>
							<li><strong>visibilite :</strong> Caractéristiques de visibilité, influençant le trafic client et la rentabilité.</li>
							<li><strong>etat :</strong> État général du local, indiquant son adéquation pour une utilisation immédiate.</li>
						</ul>
					</ul>
					
					<h3>Exemple de Données :</h3>
					<ul>
						<li><strong>Adresse :</strong> angle quai Pêcherie – rue Longue</li>
						<li><strong>Activité :</strong> Restauration</li>
						<li><strong>Loyer annuel :</strong> 30,000 EUR</li>
						<li><strong>État :</strong> Très bon</li>
					</ul>
				</section>


			<!-- JavaScript Section -->
			<h1>Explication du Code JavaScript</h1>
			<!-- Map Rendering Section -->
			<section id="code-section-js">
					<h2>1. Rendu de la Carte</h2>
					<h3>Utilisation de Leaflet.js</h3>
					<p>Utilise Leaflet.js pour intégrer une carte interactive avec des icônes personnalisées, utile pour des applications de localisation.</p>
					<pre><code>
		let map = L.map('map', {
			center: [34.508378, 69.70685],
			zoom: 1
		});

		L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png').addTo(map);

		function createCustomIcon(iconUrl) {
			return L.icon({
				iconUrl: iconUrl,
				iconSize: [32, 52],
				iconAnchor: [16, 32],
				popupAnchor: [0, -32]
			});
		}
					</code></pre>
				</section>



				<!-- Skill Popup Section -->
				<section class="code-section">
					<h2>2. Popup pour Compétences</h2>
					<p>Affiche des détails lorsque l'utilisateur interagit avec des éléments de compétence, améliorant l'engagement utilisateur.</p>
					<pre><code>
		document.addEventListener("DOMContentLoaded", function() {
			const partSkills = document.querySelectorAll('.part-skill');
			partSkills.forEach(partSkill => {
				partSkill.addEventListener('click', function() {
					const index = Array.from(partSkill.parentNode.children).indexOf(partSkill);
					document.querySelectorAll('.popUp-skill .text-skill').forEach(popUp => { popUp.style.display = 'none'; });
					document.querySelectorAll('.popUp-skill .text-skill')[index].style.display = 'block';
				});
			});
		});
					</code></pre>
				</section>



				<!-- Navigation Section -->
				<section class="code-section">
					<h2>3. Navigation</h2>
					<h3>Ouverture/Fermeture du Menu</h3>
					<p>Implémente la fonctionnalité d'ouverture et de fermeture du menu, améliorant l'expérience utilisateur.</p>
					<pre><code>
		document.addEventListener('DOMContentLoaded', function () {
			const menuIcon = document.querySelector('.menu-icon');
			const menuCheckbox = document.querySelector('.menu-btn');
			const menu = document.querySelector('.ligne-metro');

			menuIcon.addEventListener('click', function () {
				menuCheckbox.checked = !menuCheckbox.checked;
				menu.classList.toggle('menu-open');
				menuIcon.innerHTML = menuCheckbox.checked ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
			});
		});
					</code></pre>
				</section>



				<!-- Scrolling Section -->
				<section class="code-section">
					<h2>4. Défilement</h2>
					<h3>Défilement Fluide</h3>
					<p>Facilite le défilement vers des sections spécifiques de la page, améliorant la navigation.</p>
					<pre><code>
		document.querySelectorAll('.nav a').forEach(link => {
			link.addEventListener('click', function(e) {
				const href = this.getAttribute('href');
				if (href.startsWith('#')) {
					e.preventDefault();
					document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
				}
			});
		});
					</code></pre>
				</section>



				<!-- Scroll to Top Button Section -->
				<section class="code-section">
					<h2>5. Bouton de Retour en Haut</h2>
					<p>Implémente un bouton qui permet de remonter rapidement en haut de la page, améliorant la navigation.</p>
					<pre><code>
		let mybutton = document.getElementById("myBtn");
		window.onscroll = function() { scrollFunction() };
		function scrollFunction() {
			mybutton.style.display = (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? "block" : "none";
		}
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
				</code></pre>
			</section>
	
		<h1>Explication du Code PHP</h1>

			<!-- Section sur le code PHP -->
			<section id="code-section-php">
				<h2>1. Structure du code PHP</h2>
				<p>Ce code PHP est conçu pour importer des éléments de structure récurrents, tels que l’en-tête et le pied de page, depuis des fichiers externes. Cela permet de simplifier la gestion et la maintenance du site tout en favorisant une meilleure modularité.</p>

				<h3>Modularité et réutilisabilité :</h3>
				<ul>
					<li><strong>La fonction <code>include()</code>:</strong> est utilisée ici pour insérer des fichiers HTML externes dans la page PHP.</li>
					<li>Les fichiers <code>header.html</code> et <code>footer.html</code> sont externalisés, ce qui permet de les réutiliser sur plusieurs pages, améliorant ainsi la cohérence et réduisant la duplication de code.</li>
				</ul>

				<h4>Avantages clés :</h4>
				<ul>
					<li><strong>Facilité de maintenance :</strong> En cas de mise à jour de l'en-tête ou du pied de page, il suffit de modifier un seul fichier pour que les changements s'appliquent à toutes les pages du site, ce qui rend la gestion du projet plus fluide.</li>
					<li><strong>Réutilisabilité :</strong> Les mêmes éléments de structure sont utilisés sur toutes les pages du site, réduisant ainsi les risques d'incohérence et facilitant le travail d'équipe dans les grands projets.</li>
					<li><strong>Évolutivité :</strong> Cette méthode permet d'ajouter facilement de nouvelles pages ou fonctionnalités sans devoir réécrire les éléments communs du site.</li>
				</ul>

				<h3>Description du code PHP :</h3>
				<pre><code>
	&lt;?php include(&quot;../header.html&quot;); ?&gt;
	&lt;?php include(&quot;../footer.html&quot;); ?&gt;
				</code></pre>
				<ul>
					<li><strong>include("header.html"):</strong> Cette ligne importe le contenu du fichier <code>header.html</code>, permettant d'afficher le même en-tête sur toutes les pages.</li>
					<li><strong>include("../footer.html"):</strong> Cette ligne fait appel au fichier <code>footer.html</code> situé dans le répertoire parent, assurant l'uniformité du pied de page sur l'ensemble des pages du site.</li>
				</ul>

				<h3>Optimisations possibles :</h3>
				<ul>
					<li><strong>Utilisation d’un moteur de templates :</strong> Pour des projets plus complexes, il peut être judicieux d’envisager un moteur de templates comme Twig ou Blade afin de séparer plus nettement la logique de la présentation, tout en améliorant la lisibilité du code.</li>
					<li><strong>Gestion des erreurs :</strong> Bien que <code>include()</code> génère un simple avertissement en cas d’échec, l’utilisation de <code>require()</code> pour les fichiers critiques, comme l’en-tête, pourrait être envisagée. Cela permet d’arrêter l’exécution du script en cas de problème.</li>
				</ul>
			</section>
		</div>


		
		<!-- Scroll up -->
		<div onclick="topFunction()" id="myBtn" title="Go to top">
			<i class="fa-solid fa-circle-chevron-up"></i>
		</div>
	</main>

	<?php
			include("../footer.html");
	?>
</body>
<script src="https://kit.fontawesome.com/74d3ecc422.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="../script/main.js"></script>
</html>
