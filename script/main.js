/* ///////////////////////////////////// */
/* ////// En-tête : navigation //////// */
/* ///////////////////////////////////// */

// Écouteur d'événement DOMContentLoaded pour exécuter le script lorsque la page est chargée
document.addEventListener('DOMContentLoaded', function () {
    // Sélection des éléments DOM liés au menu
    const menuIcon = document.querySelector('.menu-icon');
    const menuCheckbox = document.querySelector('.menu-btn');
    const menu = document.querySelector('.ligne-metro');

    // Gestionnaire d'événements pour le clic sur l'icône du menu
    menuIcon.addEventListener('click', function () {
        console.log("Clic détecté");
        menuCheckbox.checked = !menuCheckbox.checked; // Inversion de l'état de la case à cocher
        menu.classList.toggle('menu-open'); // Basculement de la classe pour ouvrir ou fermer le menu
        
        // Changement de l'icône du burger à l'icône de fermeture
        if (menuCheckbox.checked) {
            menuIcon.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        } else {
            menuIcon.innerHTML = '<i class="fa-solid fa-bars"></i>';
        }

        console.log(menu.classList);
    });

    // Gestion de l'événement de clic sur les liens de navigation pour un défilement fluide
    document.querySelectorAll('.nav a').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            // Si le lien commence par '#' (indiquant une ancre interne), empêcher la redirection
            if (href.startsWith('#')) {
                e.preventDefault(); // Empêche le comportement par défaut uniquement pour les sections internes
                const targetSection = document.querySelector(href); // Sélection de la section cible
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: 'smooth' }); // Défilement fluide vers la section cible
                }
            }
        });
    });
});



/* ///////////////////////////////////////////// */
/* ////////// Partie des compétences /////////// */
/* ///////////////////////////////////////////// */


// JavaScript pour gérer les clics sur les éléments de compétence
document.addEventListener("DOMContentLoaded", function() {
    const partSkills = document.querySelectorAll('.part-skill');

    partSkills.forEach(partSkill => {
        partSkill.addEventListener('click', function() {
            const index = Array.from(partSkill.parentNode.children).indexOf(partSkill);
            
            const popUps = document.querySelectorAll('.popUp-skill .text-skill');
            
            popUps.forEach(popUp => {
                popUp.style.display = 'none';
            });

            popUps[index].style.display = 'block';
        });
    });
});



/* ///////////////////////////////////// */
/* /////// Part of Expériences ///////// */
/* ///////////////////////////////////// */

window.onload = async function funLoad() {

//     const map = new maplibregl.Map({
//     container: 'map',
//     style: 'https://<url_vers_votre_style_de_carte>',
//     center: [longitude, latitude], 
//     zoom: 1
// });


    // Création d'une nouvelle carte Leaflet : https://leafletjs.com/examples/quick-start/
    let map = L.map('map', {
        center: [34.508378, 69.70685], // Coordonnées pour Lyon [lat, long]
        zoom: 1
    });

    // Ajout des couches de fond de carte pour Lyon
    let fonds = {
        CartoDB: L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png'),
        OSM: L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png'),
        Esri: L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'),
        osmhot: L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png'),
    };
    fonds.CartoDB.addTo(map);
    let baselayers = {
        '<span class="coucheLeafLetBase">Carto DB</span>': fonds['CartoDB'],
        '<span class="coucheLeafLetBase">Open Street Map</span>': fonds['OSM'],
        '<span class="coucheLeafLetBase">Esri</span>': fonds['Esri'],
        '<span class="coucheLeafLetBase">OSM HOT</span>': fonds['osmhot'],
    };

    // Ajout de l'échelle à la carte
    L.control.scale({maxWidth: 100}).addTo(map);

    // Fonction pour créer des icônes personnalisées
    function createCustomIcon(iconUrl) {
        return L.icon({
            iconUrl: iconUrl,
            iconSize: [32, 52], // Taille de l'icône
            iconAnchor: [16, 32], // Point d'ancrage de l'icône
            popupAnchor: [0, -32] // Position de la popup par rapport à l'icône
        });
    }

    function onMapClick(e) {
        alert("Vous avez cliqué sur la carte à " + e.latlng);
    }

    map.on('click', onMapClick);

    let icones = {
        developpeurIcon: createCustomIcon('asset/images/icon/icon_dev.png'),
        restaurantIcon: createCustomIcon('asset/images/icon/icon_restaurant.png'),
        ongIcon: createCustomIcon('asset/images/icon/icon_ong.png'),
        ademistrationIcon: createCustomIcon('asset/images/icon/icon_home.png'),
        managementIcon: createCustomIcon('asset/images/icon/icon_event.png'),
        globalIcon: createCustomIcon('asset/images/icon/icon_global.png'),
        consultingIcon: createCustomIcon('asset/images/icon/icon_consulting.png'),
        associationIcon: createCustomIcon('asset/images/icon/icon_association.png'),
        designIcon: createCustomIcon('asset/images/icon/icon_design.png'),
    }

    let traitementFeature = function (feature, latlng) {
        let bulle = "";
        bulle += `<div class="popup-content">`;
        bulle += `<span class="bulle_type_nom"><br><strong>${feature.properties.type_nom}</span></strong><br>`;
        bulle += `<span class="bulle_nom"> ${feature.properties.nom}</span>`;
        bulle += `<span class="bulle_date"> ${feature.properties.date}</span>`;
        bulle += `<span class="bulle_lieu"> ${feature.properties.lieu}</span>`;

        // Les activités à la popup
        if (feature.properties.activites && feature.properties.activites.length > 0) {
            bulle += "<div class='activites'><br><strong>Activités:</strong><ul>";
            feature.properties.activites.forEach(activite => {
                bulle += `<li>${activite}</li>`;
            });
            bulle += "</ul></div>";
        }

        bulle += `</div>`;

        let icone = icones[feature.properties.type_id + 'Icon'];
        let marqueur = L.marker(latlng, { icon: icone }).bindPopup(bulle, {
            className: "popupleaflet"
        });

        marqueur.on('click', function() {
            map.setView(latlng, 11);
        });

        return marqueur;
}

    responseHttp = await fetch('asset/data/experiences.geojson', 
    {method: 'GET', headers: {'Accept': 'application/json'}});
    console.log(responseHttp);
    let textereponse = await responseHttp.text();
    console.log(textereponse);
    experiences = JSON.parse(textereponse);
    console.log(experiences);

    zones = {
        'Europe': null,
        'Afrique': null,
        'Asie': null,
        'Oceanie': null,
    }

    for(zoneNom in zones){
        let coucheZone = L.geoJSON(experiences, {
            pointToLayer: function (feature, latlng) {
                return traitementFeature(feature, latlng);
            },
            filter: function (feature) {
                return feature.properties['zone'] === zoneNom;
            }
        });
        coucheZone.addTo(map);
        zones[zoneNom] = coucheZone;
    }
    console.log(zones);

    let overlayMaps = {
        '<span class="coucheLeafLet">Europe</span>': zones['Europe'],
        '<span class="coucheLeafLet">Afrique</span>': zones['Afrique'],
        '<span class="coucheLeafLet">Asie</span>': zones['Asie'],
        '<span class="coucheLeafLet">Océanie</span>': zones['Oceanie'],
    };

    // Création des contrôles de couches pour chaque type de couche
    let baseLayersControl = L.control.layers(baselayers, null, {collapsed: false, position: 'bottomright'});
    let overlayLayersControl = L.control.layers(null, overlayMaps, {collapsed: false, position: 'topright'});

    // Ajout des contrôles de couches à la carte
    baseLayersControl.addTo(map);
    overlayLayersControl.addTo(map);

    // Ajouter des styles CSS uniquement aux cases à cocher
    document.querySelectorAll('.leaflet-control-layers-selector').forEach(checkbox => {
        checkbox.style.backgroundColor = '#e6b01c'; 
        checkbox.style.color = 'white'; 
    });


    // Popup autonome pour afficher "Voir mes expériences"
    let standalonePopup = L.popup()
    .setLatLng([57.891497, 61.171875])
    .setContent("Cliquez le pionteur")
    .openOn(map);

// fin dom onload
}





/* /////////////////////////////////// */
/* /////// Part of Motivation //////// */
/* /////////////////////////////////// */


// Handling click events to open PDF documents
const openPdfBtn1 = document.getElementById('openPdfBtn1');
const openPdfBtn2 = document.getElementById('openPdfBtn2');

openPdfBtn1.addEventListener('click', function() {
    const pdfURL1 = 'asset/images/pdf/recommandation_cogether.pdf';
    window.open(pdfURL1, '_blank');
});

openPdfBtn2.addEventListener('click', function() {
    const pdfURL2 = 'asset/images/pdf/recommandation_ jpfa.pdf';
    window.open(pdfURL2, '_blank');
});



/* /////////////////////////// */
/* ///// Button scroll up //// */
/* /////////////////////////// */


let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
	document.body.scrollTop = 0; // Safari
	document.documentElement.scrollTop = 0; // Chrome, Firefox, IE, Opera
}
