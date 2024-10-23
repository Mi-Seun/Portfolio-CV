<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description du concept du site web</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-rmI4EfT2U1OJXXKuMKPH6s84TaQp2LXgjzhpBVT5fryCn1xAshdv7T/LnVzzp+5qkGRnhLeYABuphMBrBnQgHQ=="
          crossorigin="anonymous"/>
</head>

<body>
    <?php include("../header.html"); ?>
<main>
    <div class="btn-codes">
        <a href="#code-section-concept" class="common-btn" id="openPdfBtn">Concept du site web</a>
        <a href="codes.php" target="_blank" class="common-btn" id="openPdfBtn">Explication du Code</a>
    </div>

    <div class="code-container">

        <!-- Concept Section -->
        <section id="skills-section" class="skill-section white-bg position-relative overflow-hidden">
        <h2 class="title text-center">Concept du site web</h2>
        <section id="code-section-concept">
            <h2>1. Présentation du concept</h2>
            <p>Ce site web est une véritable démonstration de mes compétences en conception et en développement. 
               Inspiré par le <strong>système de transport en commun de Lyon (TCL)</strong>, il incarne clarté, 
               fluidité et efficacité, avec une navigation intuitive qui reflète un parcours sans effort à travers mes 
               compétences et réalisations. Ce design élégant, conçu comme un voyage, permet aux utilisateurs de naviguer 
               naturellement tout en découvrant mon parcours professionnel.</p>
            <p>Mon approche est de transformer la visite en une expérience engageante, où chaque section révèle mes 
               capacités avec une clarté immédiate. Ce site guide l'utilisateur avec une logique simple mais puissante, 
               permettant une immersion totale dans mes compétences techniques.</p><br>
        </section>

        <section id="code-section-design">
            <h2>2. Design et expérience utilisateur (UX)</h2>
            <ul>
                <li><strong>Design inspiré des lignes de métro</strong> :
                    <ul>
                        <li>Chaque section du site est pensée comme une ligne de métro distincte, assurant une navigation 
                            claire et cohérente pour les utilisateurs.</li>
                        <li>Mon logo, créé avec Illustrator et conçu pour évoquer un symbole de métro, renforce l'identité 
                            visuelle du site et devient un guide intuitif pour les utilisateurs tout au long de leur parcours.
                        </li>
                        <li>Des animations SVG, représentant les lignes de métro, apportent une dynamique visuelle, reliant 
                            harmonieusement les sections du site pour une expérience fluide et agréable.</li>
                    </ul>
                </li>
                <li><strong>Cartes et éléments interactifs</strong> :
                    <ul>
                        <li>Une carte interactive, intégrée avec <a href="codes.php" target="_blank">Leaflet.js et geojson</a>, 
                            permet d'explorer des points d'intérêt clés, offrant une expérience d'exploration approfondie et engageante.</li>
                    </ul>
                </li>
                <li><strong>Éléments visuels et multimédias</strong> :
                    <ul>
                        <li>Des images captivantes de métros et de paysages urbains enrichissent l'expérience utilisateur, 
                            renforçant l'atmosphère immersive et ajoutant une dimension visuelle forte à l'ensemble du site.</li>
                    </ul>
                </li><br>
            </ul>
        </section>

        <section id="code-section-functionalities">
            <h2>3. Fonctionnalités et commodités pour l'utilisateur</h2>
            <ul>
                <li><strong>Navigation claire</strong> : La structure intuitive, inspirée par les lignes de métro, 
                    garantit que les utilisateurs trouvent facilement les informations essentielles en un clin d'œil.</li>
                <li><strong>Optimisation mobile</strong> : Le design réactif assure une expérience homogène et efficace 
                    sur tous les types d'appareils.</li>
                <li><strong>Vitesse de chargement rapide</strong> : Les performances du site sont optimisées pour offrir 
                    une expérience rapide et fluide, minimisant les temps d'attente.</li><br>
            </ul>
        </section>

        <section id="code-section-technical">
            <h2>4. Technologie et aspects de développement</h2>
            <ul>
                <li>Le site est construit sur des technologies robustes et modernes telles que HTML, CSS, et 
                    <a href="codes.php" target="_blank">JavaScript</a>, garantissant des performances optimales et une 
                    expérience utilisateur sans faille.
                </li>
                <li><a href="codes.php" target="_blank">PHP</a> assure une gestion efficace des éléments structurels du site, 
                    facilitant sa maintenance future et permettant une évolutivité harmonieuse.
                </li><br>
            </ul>
        </section>

        <section id="code-section-conclusion">
            <h2>5. Conclusion</h2>
            <p>Ce site est plus qu'une simple vitrine : c'est une expérience interactive qui combine une navigation intuitive 
               et des performances techniques optimisées. Chaque détail a été soigneusement pensé pour refléter mon expertise, 
               et chaque interaction permet aux utilisateurs de découvrir mes compétences de manière fluide et efficace. 
               En explorant ce site, vous parcourez non seulement mon parcours professionnel, mais vous ressentez aussi 
               l'engagement et la passion que j'apporte dans chaque projet.</p>
        </section>
        </section>
    </div>

    <!-- Scroll up -->
    <div onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa-solid fa-circle-chevron-up"></i>
    </div>
</main>

<?php include("../footer.html"); ?>
</body>
<script src="https://kit.fontawesome.com/74d3ecc422.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="../script/main.js"></script>
</html>
