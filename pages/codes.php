<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Explication du Code</title>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
		<link rel="stylesheet" href="../asset/style/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-rmI4EfT2U1OJXXKuMKPH6s84TaQp2LXgjzhpBVT5fryCn1xAshdv7T/LnVzzp+5qkGRnhLeYABuphMBrBnQgHQ=="
		crossorigin="anonymous" />
	</head>

	<body>
			<?php
				include("../header.html");
			?>
		<main>
			<div class= "btn-codes">
				<a href="concept.php" target="_blank" class="common-btn" id="openPdfBtn">Concept du site web</a> 
				<a href="#code-section-geojson" class="common-btn" id="openPdfBtn">Geojson</a> 
				<a href="#code-section-js" class="common-btn" id="openPdfBtn">JavaScript</a> 
				<a href="#code-section-php" class="common-btn" id="openPdfBtn">Php</a> 
			</div>

			<div class="code-container">

			<!-- GeoJSON Data Section -->
			<section id="skills-section" class="skill-section white-bg position-relative overflow-hidden">
				<h2 class="title text-center">Explication des Données GeoJSON</h2>

				<section id="code-section-geojson">
					<h2>1. Données GeoJSON : expériences.geojson</h2>
					<p>Ce fichier présente une <code>FeatureCollection</code> illustrant vos expériences professionnelles, 
					mettant en valeur vos compétences et contributions. Chaque <code>Feature</code> fournit des informations clés 
					sur des rôles significatifs dans le développement web et la gestion de projets.</p><br>

					<h3>Structure des Données :</h3>
					<ul>
						<li><strong>type :</strong> FeatureCollection</li>
						<li><strong>features :</strong> Liste d'objets <code>Feature</code> 
						contenant des données critiques sur vos expériences.</li><br>
					</ul>

					<h4>Détails de Chaque <code>Feature</code> :</h4>
					<ul>
						<li><strong>geometry :</strong> Localisation précise via des points géographiques.</li>
						<li><strong>properties :</strong> Détails riches, y compris :</li>
						<ul>
							<li><strong>nom :</strong> Titre du projet ou de l'organisation.</li>
							<li><strong>date :</strong> Période d'engagement.</li>
							<li><strong>lieu :</strong> Localisation géographique.</li>
							<li><strong>type_id :</strong> Identifiant de rôle (ex: développeur).</li>
							<li><strong>activites :</strong> Liste d'activités illustrant 
							les compétences techniques.</li><br>
						</ul>
					</ul>

					<h3>Exemples de Données :</h3>
					<ul>
						<li><strong>42 Lyon</strong> :
							<ul>
								<li><strong>lieu :</strong> Charbonnières-les-Bains</li>
								<li><strong>type :</strong> Développeur informatique</li>
								<li><strong>activités :</strong> Programmation d'algorithmes, Shell Unix & C</li>
							</ul>
						</li>
						<li><strong>Ice Development</strong> :
							<ul>
								<li><strong>lieu :</strong> Lyon</li>
								<li><strong>type :</strong> Développeur Web</li>
								<li><strong>activités :</strong> Création de sites web, développement avec WordPress, PHP, JavaScript</li>
							</ul>
						</li>
					</ul>
					<pre><code>
					{
	"type": "FeatureCollection", 
	"features": [
		{
			"type": "Feature", 
			"geometry": {
                "type": "Point", 
                "coordinates": [4.747607, 45.781202]
            }, 
			"properties": {
                "nom": "42 Lyon",
                "date": "sept-oct 2024",
                "lieu": "Charbonnières-les-Bains",
                "type_id": "developpeur",
                "type_nom": "Développeur informatique",
                "zone": "Europe",
                "activites": [
                    "Prog algorithme<br>",
                    "Shell Unix & C"
                ]
            }
		},
		{
			"type": "Feature", 
			"geometry": {
                "type": "Point", 
                "coordinates": [4.8331, 45.7381]
            }, 
			"properties": {
                "nom": "Ice Developement",
                "date": "2023",
                "lieu": "Lyon",
                "type_id": "developpeur",
                "type_nom": "Développeur Web",
                "zone": "Europe",
                "activites": [
                    "Création de sites web<br>",
                    "WordPress, php, JavaScript, mysql, CSS"
                ]
            }
		},
					</code></pre>
				</section>

				<section class="code-section">
					<h2>2. Données GeoJSON : geojson.bak</h2>
					<p>Ce fichier fournit des évaluations de propriétés commerciales 
						sous forme de <code>FeatureCollection</code>, crucial 
						pour les décisions stratégiques d'implantation.</p><br>

					<h3>Structure des Données :</h3>
					<ul>
						<li><strong>type :</strong> FeatureCollection</li>
						<li><strong>features :</strong> Contient des objets <code>Feature</code> 
						avec des attributs d'évaluation importants.</li><br>
					</ul>

					<h4>Détails de Chaque <code>Feature</code> :</h4>
					<ul>
						<li><strong>geometry :</strong> Type de point et coordonnées géographiques.</li>
						<li><strong>properties :</strong> Détails essentiels sur l'espace, y compris :</li>
						<ul>
							<li><strong>adresse :</strong> Localisation précise.</li>
							<li><strong>activite :</strong> Type d'activité (ex: restauration).</li>
							<li><strong>loyer annuel :</strong> Coût de location.</li>
							<li><strong>etat :</strong> Condition générale de l'espace.</li><br>
						</ul>
					</ul>

					<h3>Exemple de Données :</h3>
					<ul>
						<li><strong>Adresse :</strong> angle quai Pêcherie – rue Longue</li>
						<li><strong>Activité :</strong> Restauration</li>
						<li><strong>Loyer annuel :</strong> 30,000 EUR</li>
						<li><strong>État :</strong> Très bon</li>
					</ul>
					<pre><code>
					{
	"type": "FeatureCollection", 
	"features": [
		{
			"type": "Feature", 
			"geometry": {"type": "Point", "coordinates": [4.831634, 45.765173]}, 
			"properties": {"origine": "local", "similarites_differences_l": "le local évalué^", "source": "", "AJDI_observatoire": "", "AJDI_detail": "", "rg": "", "numero": "", "adresse": "angle quai Pêcherie – rue Longue", "activite": "restauration^", "date_jugement": "30/12/1899", "date_d_effet": "1/9/2022", "loyer_annuel_HTHC_date_effet": "30000", "loyer_HTHC_eur-m2p-an": "0", "surface_brute_m2": "NC", "surface_ponderee_m2": "0", "coeff_actu_sept2022_ILC": "1", "loyer_eur-m2p-an_actu_sept2022_ILC": "0", "simdif": "n", "cuisson_possible_(gaine)": "oui^", "destination_similaire": "", "visibilite": "grand espace ouvert devant, dégagé, pas masqué par stationnements, grande terrasse, angle^", "angle": "oui^", "terrasse": "76 pl.^", "avantages_quais_et_effet_quai": "oui^", "quartier": "quais Pêcherie-St Antoine^", "vue": "Fourvière^", "etat": "très bon^", "mis_aux_normes(WC_PMR)": "oui^", "elec_haute_puissance": "oui^", "local_en_rdc": "oui", "deplafonnement": "", "TF": "preneur"}
		}
	]
}
					</code></pre>
				</section>
			</section>



			<!-- JavaScript Section -->
			<section id="skills-section" class="skill-section white-bg position-relative overflow-hidden">
			<h2 class="title text-center">Explication du Code JavaScript</h2>
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
			</section>




			<!-- PHP Section -->
			<section id="skills-section" class="skill-section white-bg position-relative overflow-hidden">
			<h2 class="title text-center">Explication du Code PHP</h2>
				<!-- Section sur le code PHP -->
				<section id="code-section-php">
					<h2>1. Structure du code PHP</h2>
					<p>Ce code PHP est conçu pour importer des éléments de structure récurrents, 
						tels que l’en-tête et le pied de page, depuis des fichiers externes. 
						Cela permet de simplifier la gestion et la maintenance du site tout 
						en favorisant une meilleure modularité.</p><br>

					<h3>Modularité et réutilisabilité :</h3>
					<ul>
						<li><strong>La fonction <code>include()</code>:</strong> est utilisée ici 
						pour insérer des fichiers HTML externes dans la page PHP.</li>
						<li>Les fichiers <code>header.html</code> et <code>footer.html</code> sont externalisés, 
						ce qui permet de les réutiliser sur plusieurs pages, améliorant ainsi la cohérence 
						et réduisant la duplication de code.</li><br>
					</ul>

					<h4>Avantages clés :</h4>
					<ul>
						<li><strong>Facilité de maintenance :</strong> En cas de mise à jour de l'en-tête ou du pied de page, 
							il suffit de modifier un seul fichier pour que les changements s'appliquent 
							à toutes les pages du site, ce qui rend la gestion du projet plus fluide.</li>
						<li><strong>Réutilisabilité :</strong> Les mêmes éléments de structure sont utilisés
							sur toutes les pages du site, réduisant ainsi les risques d'incohérence 
							et facilitant le travail d'équipe dans les grands projets.</li>
						<li><strong>Évolutivité :</strong> Cette méthode permet d'ajouter facilement 
							de nouvelles pages ou fonctionnalités sans devoir réécrire les éléments communs 
							du site.</li><br>
					</ul>

					<h3>Description du code PHP :</h3>
					<pre><code>
	&lt;?php include(&quot;../header.html&quot;); ?&gt;
	&lt;?php include(&quot;../footer.html&quot;); ?&gt;
					</code></pre>
					<ul>
						<li><strong>include("header.html"):</strong> Cette ligne importe le contenu du fichier <code>header.html</code>, permettant d'afficher le même en-tête sur toutes les pages.</li>
						<li><strong>include("../footer.html"):</strong> 
						Cette ligne fait appel au fichier <code>footer.html</code> 
						situé dans le répertoire parent, assurant l'uniformité 
						du pied de page sur l'ensemble des pages du site.</li><br>
					</ul>

					<h3>Optimisations possibles :</h3>
					<ul>
						<li><strong>Utilisation d’un moteur de templates :</strong> Pour des projets plus complexes, il peut être judicieux d’envisager un moteur de templates comme Twig ou Blade afin de séparer plus nettement la logique de la présentation, tout en améliorant la lisibilité du code.</li>
						<li><strong>Gestion des erreurs :</strong> Bien que <code>include()</code> génère un simple avertissement en cas d’échec, l’utilisation de <code>require()</code> pour les fichiers critiques, comme l’en-tête, pourrait être envisagée. Cela permet d’arrêter l’exécution du script en cas de problème.</li>
					</ul>
				</section>
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
