<?php
/**
 * ============================================
 * ANNUAIRE-FENETRES.FR - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-fenetre.fr');
define('SITE_DOMAIN', 'trouver-devis-fenetre.fr');
define('SITE_URL', 'https://trouver-devis-fenetre.fr');
define('SITE_EMAIL', 'contact@trouver-devis-fenetre.fr');
define('SITE_TAGLINE', "Remplacement de Fenêtres Partout en France");
define('SITE_DESCRIPTION', "Trouvez un menuisier pour l\'installation de vos fenêtres PVC, alu ou double vitrage.");

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-FENETRE');
define('SITE_LOGO_TLD', '.FR');

define('METIER', "installateur de fenêtres");
define('METIER_PLURAL', "installateurs de fenêtres");
define('METIER_TITLE', "Artisan Fenêtrier");
define('METIER_ICON', "maximize");

define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '72');
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

define('SCRAPE_QUERY', "menuisier installateur fenetre pvc alu");
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

define('MODELES', [
    ['slug' => 'fenetre-pvc', 'nom' => 'Fenêtre PVC', 'emoji' => "🖼️", 'vud_cat' => '72'],
    ['slug' => 'fenetre-aluminium', 'nom' => 'Fenêtre Aluminium', 'emoji' => "🏙️", 'vud_cat' => '72'],
    ['slug' => 'fenetre-bois', 'nom' => 'Fenêtre Bois', 'emoji' => "🪵", 'vud_cat' => '72'],
    ['slug' => 'fenetre-mixte', 'nom' => 'Fenêtre Mixte', 'emoji' => "🔄", 'vud_cat' => '72'],
    ['slug' => 'double-vitrage', 'nom' => 'Double Vitrage', 'emoji' => "🪟", 'vud_cat' => '72'],
    ['slug' => 'triple-vitrage', 'nom' => 'Triple Vitrage', 'emoji' => "🛡️", 'vud_cat' => '72'],
    ['slug' => 'porte-fenetre', 'nom' => 'Porte-Fenêtre', 'emoji' => "🚪", 'vud_cat' => '72'],
    ['slug' => 'baie-vitree', 'nom' => 'Baie Vitrée', 'emoji' => "🌅", 'vud_cat' => '72'],
    ['slug' => 'fenetre-sur-mesure', 'nom' => 'Fenêtre sur Mesure', 'emoji' => "📏", 'vud_cat' => '72'],
    ['slug' => 'remplacement-fenetre', 'nom' => 'Remplacement Fenêtre', 'emoji' => "🔄", 'vud_cat' => '72'],
    ['slug' => 'pose-renovation', 'nom' => 'Pose en Rénovation', 'emoji' => "🔨", 'vud_cat' => '72'],
    ['slug' => 'pose-neuf', 'nom' => 'Pose à Neuf', 'emoji' => "🏗️", 'vud_cat' => '72'],
    ['slug' => 'fenetre-toit', 'nom' => 'Fenêtre de Toit', 'emoji' => "🏠", 'vud_cat' => '72'],
    ['slug' => 'velux', 'nom' => 'Velux', 'emoji' => "☀️", 'vud_cat' => '72'],
    ['slug' => 'volet-roulant-integre', 'nom' => 'Volet Roulant Intégré', 'emoji' => "⏬", 'vud_cat' => '72'],
    ['slug' => 'moustiquaire', 'nom' => 'Moustiquaire', 'emoji' => "🦟", 'vud_cat' => '72'],
    ['slug' => 'vitrage-anti-effraction', 'nom' => 'Vitrage Anti-Effraction', 'emoji' => "🚨", 'vud_cat' => '72'],
    ['slug' => 'fenetre-panoramique', 'nom' => 'Fenêtre Panoramique', 'emoji' => "🖼️", 'vud_cat' => '72'],
    ['slug' => 'fenetre-coulissante', 'nom' => 'Fenêtre Coulissante', 'emoji' => "🔛", 'vud_cat' => '72'],
    ['slug' => 'baie-coulissante', 'nom' => 'Baie Coulissante', 'emoji' => "🔛", 'vud_cat' => '72'],
    ['slug' => 'isolation-thermique-fenetre', 'nom' => 'Isolation Thermique', 'emoji' => "🌡️", 'vud_cat' => '72'],
    ['slug' => 'isolation-phonique-fenetre', 'nom' => 'Isolation Phonique', 'emoji' => "🔇", 'vud_cat' => '72'],
    ['slug' => 'menuiserie-exterieure', 'nom' => 'Menuiserie Extérieure', 'emoji' => "🛠️", 'vud_cat' => '72'],
    ['slug' => 'fenetre-oscillo-battante', 'nom' => 'Oscillo-Battante', 'emoji' => "🪟", 'vud_cat' => '72'],
    ['slug' => 'fenetre-cintree', 'nom' => 'Fenêtre Cintrée', 'emoji' => "🏛️", 'vud_cat' => '72'],
    ['slug' => 'vitrage-depoli', 'nom' => 'Vitrage Dépoli', 'emoji' => "🌫️", 'vud_cat' => '72'],
    ['slug' => 'chassis-fixe', 'nom' => 'Châssis Fixe', 'emoji' => "📌", 'vud_cat' => '72'],
    ['slug' => 'reparation-fenetre', 'nom' => 'Réparation Fenêtre', 'emoji' => "🔧", 'vud_cat' => '72'],
    ['slug' => 'entretien-menuiserie', 'nom' => 'Entretien Menuiserie', 'emoji' => "🧽", 'vud_cat' => '72'],
    ['slug' => 'artisan-vitrier', 'nom' => 'Artisan Vitrier', 'emoji' => "👷", 'vud_cat' => '72'],
]);

define('STYLES', [
    ['slug' => 'fenetre-pvc', 'nom' => 'Fenêtre PVC', 'emoji' => "🖼️", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-aluminium', 'nom' => 'Fenêtre Aluminium', 'emoji' => "🏙️", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-bois', 'nom' => 'Fenêtre Bois', 'emoji' => "🪵", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-mixte', 'nom' => 'Fenêtre Mixte', 'emoji' => "🔄", 'desc' => 'Détails et installation'],
    ['slug' => 'double-vitrage', 'nom' => 'Double Vitrage', 'emoji' => "🪟", 'desc' => 'Détails et installation'],
    ['slug' => 'triple-vitrage', 'nom' => 'Triple Vitrage', 'emoji' => "🛡️", 'desc' => 'Détails et installation'],
    ['slug' => 'porte-fenetre', 'nom' => 'Porte-Fenêtre', 'emoji' => "🚪", 'desc' => 'Détails et installation'],
    ['slug' => 'baie-vitree', 'nom' => 'Baie Vitrée', 'emoji' => "🌅", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-sur-mesure', 'nom' => 'Fenêtre sur Mesure', 'emoji' => "📏", 'desc' => 'Détails et installation'],
    ['slug' => 'remplacement-fenetre', 'nom' => 'Remplacement Fenêtre', 'emoji' => "🔄", 'desc' => 'Détails et installation'],
    ['slug' => 'pose-renovation', 'nom' => 'Pose en Rénovation', 'emoji' => "🔨", 'desc' => 'Détails et installation'],
    ['slug' => 'pose-neuf', 'nom' => 'Pose à Neuf', 'emoji' => "🏗️", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-toit', 'nom' => 'Fenêtre de Toit', 'emoji' => "🏠", 'desc' => 'Détails et installation'],
    ['slug' => 'velux', 'nom' => 'Velux', 'emoji' => "☀️", 'desc' => 'Détails et installation'],
    ['slug' => 'volet-roulant-integre', 'nom' => 'Volet Roulant Intégré', 'emoji' => "⏬", 'desc' => 'Détails et installation'],
    ['slug' => 'moustiquaire', 'nom' => 'Moustiquaire', 'emoji' => "🦟", 'desc' => 'Détails et installation'],
    ['slug' => 'vitrage-anti-effraction', 'nom' => 'Vitrage Anti-Effraction', 'emoji' => "🚨", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-panoramique', 'nom' => 'Fenêtre Panoramique', 'emoji' => "🖼️", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-coulissante', 'nom' => 'Fenêtre Coulissante', 'emoji' => "🔛", 'desc' => 'Détails et installation'],
    ['slug' => 'baie-coulissante', 'nom' => 'Baie Coulissante', 'emoji' => "🔛", 'desc' => 'Détails et installation'],
    ['slug' => 'isolation-thermique-fenetre', 'nom' => 'Isolation Thermique', 'emoji' => "🌡️", 'desc' => 'Détails et installation'],
    ['slug' => 'isolation-phonique-fenetre', 'nom' => 'Isolation Phonique', 'emoji' => "🔇", 'desc' => 'Détails et installation'],
    ['slug' => 'menuiserie-exterieure', 'nom' => 'Menuiserie Extérieure', 'emoji' => "🛠️", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-oscillo-battante', 'nom' => 'Oscillo-Battante', 'emoji' => "🪟", 'desc' => 'Détails et installation'],
    ['slug' => 'fenetre-cintree', 'nom' => 'Fenêtre Cintrée', 'emoji' => "🏛️", 'desc' => 'Détails et installation'],
    ['slug' => 'vitrage-depoli', 'nom' => 'Vitrage Dépoli', 'emoji' => "🌫️", 'desc' => 'Détails et installation'],
    ['slug' => 'chassis-fixe', 'nom' => 'Châssis Fixe', 'emoji' => "📌", 'desc' => 'Détails et installation'],
    ['slug' => 'reparation-fenetre', 'nom' => 'Réparation Fenêtre', 'emoji' => "🔧", 'desc' => 'Détails et installation'],
    ['slug' => 'entretien-menuiserie', 'nom' => 'Entretien Menuiserie', 'emoji' => "🧽", 'desc' => 'Détails et installation'],
    ['slug' => 'artisan-vitrier', 'nom' => 'Artisan Vitrier', 'emoji' => "👷", 'desc' => 'Détails et installation'],
]);

define('SERVICES', [
    [
        'titre' => "Fourniture & Pose Réussie",
        'icon' => "🪟",
        'desc' => "Pose en neuf ou dans le cadre de la rénovation, nous installons toutes les gammes de fenêtres, baies et portes-fenêtres.",
        'points' => ["Artisans qualifiés RGE", "Pose conforme au DTU", "Différents matériaux (Bois, PVC, Alu)"]
    ],
    [
        'titre' => "Sur Mesure & Performances",
        'icon' => "📏",
        'desc' => "Chaque ouverture est différente. Prestation sur-mesure pour allier esthétique, haute isolation thermique et clarté.",
        'points' => ["Double et triple vitrage", "Excellente isolation acoustique", "Économies sur facture d'énergie"]
    ],
    [
        'titre' => "Réparation & Dépannage",
        'icon' => "🔧",
        'desc' => "Une fenêtre bloquée ou un vitrage brisé ? Intervention en urgence pour la mise en sécurité et remplacement.",
        'points' => ["Remplacement de vitrage de sécurité", "Réparation serrure et crémone", "Volets et fermetures"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Pourquoi remplacer ses vieilles fenêtres ?",
        'reponse' => "Les anciennes menuiseries à simple vitrage ou très abîmées sont responsables jusqu'à 15% des pertes de chaleur d'un logement. Les remplacer permet de réduire de manière significative votre facture de chauffage, d'améliorer le confort acoustique et d'apporter davantage de lumière naturelle."
    ],
    [
        'question' => "Plutôt choisir du PVC, de l'Aluminium ou du Bois ?",
        'reponse' => "Le PVC est le meilleur rapport qualité/prix de base, offrant une excellente isolation thermique sans entretien spécifique. L'Aluminium est très solide, idéal pour les grandes ouvertures (baies vitrées) avec d'élégants profilés très fins. Le bois reste noble et très isolant mais réclame davantage d'entretien."
    ],
    [
        'question' => "Ai-je droit à des aides de l'État pour changer mes fenêtres ?",
        'reponse' => "Oui, le remplacement de fenêtres simple vitrage par du double vitrage fait partie des travaux de rénovation énergétique éligibles à MaPrimeRénov', aux primes CEE, et à la TVA à 5,5%. Pour y prétendre, il faut obligatoirement faire appel à une entreprise certifiée RGE."
    ],
    [
        'question' => "Faut-il refaire toute la décoration après une pose en rénovation ?",
        'reponse' => "Pas forcément. Lors d'une \"pose en rénovation\", le nouvel encadrement vient se fixer sur le dormant existant conservé (s'il est en bon état). À l'inverse, lors d'une dépose totale (ou pose à neuf), il faut parfois reprendre les finitions sur l'isolant ou le papier peint."
    ],
    [
        'question' => "Qu'est-ce qu'une fenêtre avec oscillo-battant ?",
        'reponse' => "Contrairement à une simple ouverture battante (à la française), un vantail oscillo-battant peut également basculer délicatement sur le haut pour aérer la pièce en toute sécurité, même sans surveillance totale."
    ]
]);

define('TOP_VILLES', [
    ['nom' => 'Paris', 'slug' => 'paris', 'cp' => '75000', 'region' => 'ile-de-france', 'dept' => 'paris'],
    ['nom' => 'Marseille', 'slug' => 'marseille', 'cp' => '13000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'bouches-du-rhone'],
    ['nom' => 'Lyon', 'slug' => 'lyon', 'cp' => '69000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'rhone'],
    ['nom' => 'Toulouse', 'slug' => 'toulouse', 'cp' => '31100', 'region' => 'occitanie', 'dept' => 'haute-garonne'],
    ['nom' => 'Nice', 'slug' => 'nice', 'cp' => '06000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'alpes-maritimes'],
    ['nom' => 'Nantes', 'slug' => 'nantes', 'cp' => '44200', 'region' => 'pays-de-la-loire', 'dept' => 'loire-atlantique'],
    ['nom' => 'Montpellier', 'slug' => 'montpellier', 'cp' => '34080', 'region' => 'occitanie', 'dept' => 'herault'],
    ['nom' => 'Bordeaux', 'slug' => 'bordeaux', 'cp' => '33300', 'region' => 'nouvelle-aquitaine', 'dept' => 'gironde'],
    ['nom' => 'Lille', 'slug' => 'lille', 'cp' => '59260', 'region' => 'hauts-de-france', 'dept' => 'nord'],
    ['nom' => 'Strasbourg', 'slug' => 'strasbourg', 'cp' => '67000', 'region' => 'grand-est', 'dept' => 'bas-rhin'],
    ['nom' => 'Rennes', 'slug' => 'rennes', 'cp' => '35700', 'region' => 'bretagne', 'dept' => 'ille-et-vilaine'],
    ['nom' => 'Toulon', 'slug' => 'toulon', 'cp' => '83000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'var'],
    ['nom' => 'Grenoble', 'slug' => 'grenoble', 'cp' => '38000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'isere'],
    ['nom' => 'Dijon', 'slug' => 'dijon', 'cp' => '21000', 'region' => 'bourgogne-franche-comte', 'dept' => 'cote-d-or'],
    ['nom' => 'Angers', 'slug' => 'angers', 'cp' => '49000', 'region' => 'pays-de-la-loire', 'dept' => 'maine-et-loire'],
    ['nom' => 'Nimes', 'slug' => 'nimes', 'cp' => '30000', 'region' => 'occitanie', 'dept' => 'gard'],
    ['nom' => 'Clermont-Ferrand', 'slug' => 'clermont-ferrand', 'cp' => '63000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'puy-de-dome'],
    ['nom' => 'Le Havre', 'slug' => 'le-havre', 'cp' => '76600', 'region' => 'normandie', 'dept' => 'seine-maritime'],
]);

define('AVANTAGES', [
    ['titre' => 'Réseau National', 'desc' => 'Des milliers de professionnels référencés dans toute la France.', 'icon' => "🗺️"],
    ['titre' => 'Partenaires Expérimentés', 'desc' => 'Trouvez le bon interlocuteur pour la réussite de votre projet', 'icon' => "✅"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptés à vos besoins.', 'icon' => "💰"],
]);

define('HERO_IMAGE', 'https://images.unsplash.com/photo-1549488344-1f9b8d2bd1f3?w=1920&q=80&auto=format&fit=crop');
define('MODELE_IMAGE', 'https://images.unsplash.com/photo-1579361904128-4daea6bfd739?w=1920&q=80&auto=format&fit=crop');


function getModeleBySlug($slug)
{
    foreach (MODELES as $modele) {
        if ($modele['slug'] === $slug) {
            return $modele;
        }
    }
    return null;
}

function getAllModeles()
{
    return MODELES;
}

function getVudUrl($modele = null)
{
    $catId = VUD_CATEGORIE_ID;
    if ($modele && isset($modele['vud_cat'])) {
        $catId = $modele['vud_cat'];
    }
    return 'https://www.viteundevis.com/in/?pid=' . VUD_PARTENAIRE_ID . '&c=' . $catId;
}

function getVudCatForModele($modele = null)
{
    if ($modele && isset($modele['vud_cat'])) {
        return $modele['vud_cat'];
    }
    return VUD_CATEGORIE_ID;
}
