<?php
/*
 * Copyright (c) 2009 Logicamp.org - The Outdoor Metaverse
 * index-logicamp-v2.php - PATCH DESIGN 01
 * Encodage: UTF-8
 * Monde virtuel OpenSimulator
 */

error_reporting(E_ALL);
header('Content-Type: text/html; charset=UTF-8');

$OK=1;

/* WAMP DEPENDENCIES - Decommentez sur votre serveur WAMP */
/*
require_once("/wamp/www/settings/config.php");
require_once("/wamp/www/settings/mysql.php");
require_once("/wamp/www/settings/status.php"); 
require_once("/wamp/www/settings/mysqlservices.php");
require_once("/wamp/www/settings/user_code.php");
require_once("/wamp/www/settings/points_code.php");
require_once("/wamp/www/settings/stat_code.php");
require_once("/wamp/www/webassets/inc/asset.php");
require_once "/wamp/www/settings/manager/PointManager.php"; 
require_once "/wamp/www/settings/structweb/Region.php";
require_once "/wamp/www/settings/manager/RegionManager.php";
*/

// Statistiques - Remplacez par vos vraies donnees depuis la base
$usersInWorld = "1";
$totalRegions = "133";
$last30Days = "43"; // PATCH 01: Ajout statistique last 30 days
$totalUsers = "7662";
$gridStatus = "ONLINE";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <link rel="canonical" href="https://logicamp.org/">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="KEYWORDS" content="jeux, jeu, jeu gratuit, jeu gratuit en ligne, jeu gratuit de monde virtuel, jeux online, monde virtuel, monde virtuel 3D, monde virtuel en ligne, monde virtuel en 3D, monde virtuel gratuit, secondlife, opensim, opensimulator, hypergrid">
    <meta name="DESCRIPTION" content="Logicamp est un METAVERSE ou monde virtuel base sur OpenSimulator - The Outdoor Metaverse(OpenSimulator) et compatible avec SecondLife - Inscription gratuite - Terrains virtuels Low-Cost">
    <meta name="msvalidate.01" content="DA91DBE179159CAB5A25AA181C7F85E7" />
    <meta name="alexaVerifyID" content="pMn3JxN19Kx8g_7fa0oqvREwOqY">
    <meta name="google-site-verification" content="QDp-J7bB50FZ8lbcMx0CJPQiZKt3sA01ThAPAQh8d4E" />
    <meta name="google-site-verification" content="5TBPpJgKqY1iRMaVci9Qk_-J4YUilX8eOf9qXglrOfs" />
    <meta name="facebook-domain-verification" content="3llvogkj6hpxm64bsnohndamw8cidx" />
    
    <title>Logicamp.org | The Outdoor Metaverse | Monde Virtuel 3D | OpenSimulator</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Font Awesome pour icones reseaux sociaux -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style-logicamp-v2-PATCH01.css" type="text/css">
    
    <!-- Scripts originaux -->
    <script type="text/javascript" src="https://www.logicamp.org/inscription/ajax.js"></script>
</head>
<body>

    <!-- Header avec Logo et Statistiques -->
    <header class="top-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-md-3">
                    <div class="logo-section">
                        <img src="//logicamp.org/img/logicamp_logo.png" alt="Logicamp Logo" class="main-logo" onerror="this.style.display='none'">
                        <div class="logo-text">
                            <h1>Logicamp.org</h1>
                            <p class="tagline">The Outdoor Metaverse</p>
                        </div>
                    </div>
                </div>
                
                <!-- Login Form Center - PATCH 01: Plus compact -->
                <div class="col-md-6">
                    <div class="header-login-form">
                        <form action="https://www.logicamp.org/inscription/formcheck.php" method="POST" class="login-inline">
                            <input type="text" name="username" placeholder="Prenom" class="form-control-sm" required>
                            <input type="text" name="lastname" placeholder="Nom" class="form-control-sm" required>
                            <input type="password" name="password" placeholder="Mot de passe" class="form-control-sm" required>
                            <button type="submit" class="btn btn-sm btn-success">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </button>
                        </form>
                        <div class="header-links">
                            <a href="https://www.logicamp.org/inscription/">Forgot Password</a>
                        </div>
                    </div>
                </div>
                
                <!-- Statistiques Grid - PATCH 01: Ajout last 30 days -->
                <div class="col-md-3">
                    <div class="grid-stats">
                        <div class="stats-box">
                            <div class="stat-item">
                                <span class="stat-label">Users in world :</span>
                                <span class="stat-value"><?php echo $usersInWorld; ?></span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-label">Total Regions :</span>
                                <span class="stat-value"><?php echo $totalRegions; ?></span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-label">last 30 days :</span>
                                <span class="stat-value"><?php echo $last30Days; ?></span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-label">Total Users :</span>
                                <span class="stat-value"><?php echo $totalUsers; ?></span>
                            </div>
                            <div class="stat-item online">
                                <span class="stat-label">Grid is</span>
                                <span class="stat-value"><?php echo $gridStatus; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation Menu - PATCH 01: Ajout menus deroulants -->
    <nav class="main-navigation">
        <div class="container-fluid">
            <ul class="nav-menu">
                <li><a href="#accueil" class="nav-item active"><i class="bi bi-house-door"></i> Accueil</a></li>
                <li><a href="https://logicamp.org/be/login.php" class="nav-item"><i class="bi bi-person"></i> Account</a></li>
                
                <!-- IMMO avec dropdown -->
                <li class="dropdown">
                    <a href="#immo" class="nav-item"><i class="bi bi-building"></i> IMMO <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://logicamp.org/be/location/immo.php">Regions</a></li>
                        <li><a href="https://logicamp.org/be/location/immoland.php">Parcelles</a></li>
                    </ul>
                </li>
                
                <li><a href="https://logicamp.org/be/boutique/market.php" class="nav-item"><i class="bi bi-gift"></i> Freebies</a></li>
                
                <!-- Catalogue avec dropdown -->
                <li class="dropdown">
                    <a href="#catalogue" class="nav-item"><i class="bi bi-shop"></i> Catalogue <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://logicamp.org/test/testvisitor.php">Most Visited Places</a></li>
                        <li><a href="https://logicamp.org/be/catalogue/atomiumplaza.php">Atomium Plaza</a></li>
                        <li><a href="https://logicamp.org/be/catalogue/botplaza.php">Bot Plaza</a></li>
                        <li><a href="https://logicamp.org/be/catalogue/logicampplaza.php">Logicamp Plaza</a></li>
                        <li><a href="https://logicamp.org/be/catalogue/islandplaza.php">Island Plaza</a></li>
                        <li><a href="https://logicamp.org/be/catalogue/user1plaza.php">User1 Plaza</a></li>
                        <li><a href="https://logicamp.org/be/catalogue/user2plaza.php">User2 Plaza</a></li>
                        <li><a href="https://logicamp.org/be/catalogue/spaplaza.php">Spa Plaza</a></li>
                    </ul>
                </li>
                
                <!-- Tutoriaux avec dropdown -->
                <li class="dropdown">
                    <a href="#tutoriaux" class="nav-item"><i class="bi bi-book"></i> Tutoriaux <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://logicamp.org/be/opensim-tutorial/index.php">Index</a></li>
                        <li><a href="http://logicamp.org/be/opensim-tutorial/opensim.php">Debutant</a></li>
                        <li><a href="http://logicamp.org/be/opensim-tutorial/stylisme.php">Stylisme</a></li>
                        <li><a href="http://logicamp.org/be/opensim-tutorial/build.php">Build</a></li>
                        <li><a href="http://logicamp.org/be/opensim-tutorial/lsl.php">LSL</a></li>
                        <li><a href="http://logicamp.org/be/opensim-tutorial/simulateur.php">Simulateur</a></li>
                        <li><a href="http://logicamp.org/be/moodle.php">Moodle</a></li>
                        <li><a href="http://logicamp.org/be/sloodle.php">Sloodle</a></li>
                        <li><a href="http://logicamp.org/be/location/index.php">Mon monde</a></li>
                    </ul>
                </li>
                
                <!-- Support avec dropdown -->
                <li class="dropdown">
                    <a href="#support" class="nav-item"><i class="bi bi-headset"></i> Support <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://logicamp.org/be/contact.php">Contact</a></li>
                        <li><a href="http://logicamp.org/be/presse.php">Presse</a></li>
                        <li><a href="http://logicamp.org/be/calendar.php">Stat1</a></li>
                        <li><a href="http://logicamp.org/test/testvisitor.php">Stat2</a></li>
                        <li><a href="http://logicamp.org/test/stat3.php">Stat3</a></li>
                        <li><a href="http://logicamp.org/test/visitortoday.php">Stat4</a></li>
                        <li><a href="http://logicamp.org/be/members.php">Membres</a></li>
                    </ul>
                </li>
                
                <li><a href="https://logicamp.org/wordpress" target="_blank" class="nav-item"><i class="bi bi-newspaper"></i> Actualités</a></li>
            </ul>
            <!-- Menu burger pour mobile -->
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </nav>

    <!-- Section Hero avec Image et Formulaire -->
    <section id="accueil" class="hero-section">
        <div class="container-fluid">
            <div class="row">
                <!-- Image principale / Slideshow -->
                <div class="col-lg-8">
                    <div class="main-slideshow">
                        <a href="https://www.paypal.com/donate/?token=B-KeVcByJCAvZt8pS4DWepp9JRvRE799BOQFrHnJdX59Ax-VXjp2bFUxTVMMGib4mUv8A42T_vyGQ8yw">
                            <img id="animation" src="//logicamp.org/img/slideshow/img0.png" class="slideshow-image" alt="Logicamp Metaverse" onerror="this.src='https://via.placeholder.com/1200x600/0066cc/ffffff?text=Logicamp+Metaverse'">
                        </a>
                    </div>
                </div>
                
                <!-- Formulaire d'inscription -->
                <div class="col-lg-4">
                    <div class="registration-form">
                        <h3 class="form-title">Inscription GRATUITE</h3>
                        <form name="form" action="https://www.logicamp.org/inscription/formcheck.php" method="POST" onSubmit="return Form(this)">
                            <!-- Sélection Avatar -->
                            <div class="avatar-selection">
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <label class="avatar-choice">
                                            <input type="radio" name="genre" value="paul" checked>
                                            <img src="//logicamp.org/img/pub/leo1.png" alt="Avatar Paul" class="avatar-img" onerror="this.src='https://via.placeholder.com/80/0066cc/ffffff?text=Paul'">
                                            <span>Prénom</span>
                                        </label>
                                    </div>
                                    <div class="col-6 text-center">
                                        <label class="avatar-choice">
                                            <input type="radio" name="genre" value="suki">
                                            <img src="//logicamp.org/img/pub/suki2.png" alt="Avatar Suki" class="avatar-img" onerror="this.src='https://via.placeholder.com/80/cc0066/ffffff?text=Suki'">
                                            <span>Nom</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Champs formulaire -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="accountfirst" name="accountfirst" placeholder="Prénom" maxlength="15" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="accountlast" name="accountlast" placeholder="Nom" maxlength="15" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" id="wordpass" name="wordpass" placeholder="Mot de passe" maxlength="15" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" maxlength="40" required>
                            </div>
                            
                            <!-- Captcha -->
                            <div class="form-group">
                                <label class="captcha-label" id="captcha-question">5 + 3 = ?</label>
                                <input type="text" class="form-control" id="answer" name="answer" placeholder="Votre réponse" required>
                                <input type="hidden" id="correctAnswer" name="correctAnswer">
                            </div>
                            
                            <!-- Conditions -->
                            <div class="form-group">
                                <small class="form-text">
                                    En cliquant sur le bouton ci-dessous, je déclare avoir lu et accepté les 
                                    <a href="//logicamp.org/be/tos.php" target="_blank">Conditions générales</a>. 
                                    Je déclare aussi avoir 18 ans ou plus.
                                </small>
                            </div>
                            
                            <input type="hidden" name="action" value="check">
                            
                            <!-- Bouton inscription -->
                            <button type="submit" class="btn btn-register">
                                <i class="bi bi-play-circle"></i> JE M'INSCRIS !
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Statistiques détaillées -->
    <section id="statistiques" class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <i class="bi bi-people-fill stat-icon"></i>
                        <h3 class="stat-number"><?php echo $totalUsers; ?></h3>
                        <p class="stat-description">Utilisateurs Inscrits</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <i class="bi bi-globe stat-icon"></i>
                        <h3 class="stat-number"><?php echo $totalRegions; ?></h3>
                        <p class="stat-description">Régions Totales</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <i class="bi bi-person-check-fill stat-icon"></i>
                        <h3 class="stat-number"><?php echo $usersInWorld; ?></h3>
                        <p class="stat-description">Utilisateurs Connectés</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card online-status">
                        <i class="bi bi-check-circle-fill stat-icon"></i>
                        <h3 class="stat-number"><?php echo $gridStatus; ?></h3>
                        <p class="stat-description">Statut de la Grid</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À propos / Galerie -->
    <section id="apropos" class="content-section">
        <div class="container">
            <h2 class="section-title">Découvrez Logicamp</h2>
            
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="about-text">
                        <p class="lead">
                            Logicamp n'est pas un site internet, c'est un <strong>METAVERSE</strong>, 
                            un monde virtuel en 3D, un jeu gratuit en ligne ou plutôt un monde numérique 3D en ligne 
                            imaginé et créé par ses résidents.
                        </p>
                        <p>
                            C'est aussi ce que les spécialistes ont qualifié de 
                            <a href="http://fr.wikipedia.org/wiki/M%C3%A9tavers" target="_blank">métavers</a> 
                            (terme inventé par Neal Stephenson dans son roman "Le Samouraï virtuel", qui traite de l'évolution 
                            d'un monde virtuel en une réalité tangible).
                        </p>
                        <p>
                            Logicamp est basé sur le serveur de monde virtuel 
                            <a href="http://opensimulator.org/" target="_blank">OpenSimulator</a>, 
                            The Free Metaverse, dans lequel la quasi-totalité du contenu est créé par les utilisateurs, 
                            des gens comme vous.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Galerie / Explore Sections -->
            <div class="row gallery-section">
                <div class="col-lg-4 mb-4">
                    <div class="gallery-card">
                        <img src="//logicamp.org/img/outdoor.jpg" alt="Outdoor" class="gallery-image" onerror="this.src='https://via.placeholder.com/400x300/0066cc/ffffff?text=Outdoor'">
                        <div class="gallery-content">
                            <h4>Outdoor</h4>
                            <p>The Outdoor Experience</p>
                            <a href="#outdoor" class="btn btn-explore">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="gallery-card">
                        <img src="//logicamp.org/img/logicantiq.jpg" alt="LogicAntiq" class="gallery-image" onerror="this.src='https://via.placeholder.com/400x300/996633/ffffff?text=LogicAntiq'">
                        <div class="gallery-content">
                            <h4>LogicAntiq</h4>
                            <p>Antiquités virtuelles</p>
                            <a href="#logicantiq" class="btn btn-explore">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="gallery-card">
                        <img src="//logicamp.org/img/gizmobds.jpg" alt="GizmoBDS" class="gallery-image" onerror="this.src='https://via.placeholder.com/400x300/cc3366/ffffff?text=GizmoBDS'">
                        <div class="gallery-content">
                            <h4>GizmoBDS</h4>
                            <p>GizmoBDS.com - Love</p>
                            <a href="http://gizmobds.com" target="_blank" class="btn btn-explore">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tutoriaux / Vidéos -->
    <section id="tutoriaux" class="tutorials-section">
        <div class="container">
            <h2 class="section-title">Tutoriels & Vidéos</h2>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="video-card">
                        <h4><i class="bi bi-youtube text-danger"></i> Tutoriel d'inscription</h4>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/PCI3Gozzf78" 
                                    title="YouTube video player" frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="video-card">
                        <h4><i class="bi bi-twitch text-purple"></i> Twitch TV Live</h4>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://player.twitch.tv/?channel=logicampgrid&parent=www.logicamp.org" 
                                    frameborder="0" allowfullscreen="true" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Informations techniques -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="info-box">
                        <h5><i class="bi bi-link-45deg"></i> HyperGrid Link</h5>
                        <code>secondlife://logicamp.org:8002:accueil/</code>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <h5><i class="bi bi-server"></i> LoginURI</h5>
                        <code>http://logicamp.org:8002</code>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Support / Contact -->
    <section id="support" class="support-section">
        <div class="container">
            <h2 class="section-title">Support & Donations</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="lead">
                        Logicamp survit grâce aux donations et à votre générosité. Merci de faire un don pour la 
                        maintenance des serveurs et pour que ce service puisse continuer à exister.
                    </p>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="mt-4">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="JCB5TYVMEWGU4">
                        <button type="submit" class="btn btn-donate">
                            <i class="fab fa-paypal"></i> Faire un don via PayPal
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>LOGICAMP</h5>
                    <p>The Outdoor Metaverse<br>
                       Monde Virtuel 3D basé sur OpenSimulator</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/logicamp" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/logicamp" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/user/logicamp" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.twitch.tv/logicampgrid" target="_blank" title="Twitch"><i class="fab fa-twitch"></i></a>
                        <a href="https://plus.google.com/u/0/109325970510098650191" target="_blank" title="Google+"><i class="fab fa-google-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Liens Rapides</h5>
                    <ul class="footer-links">
                        <li><a href="#accueil">Accueil</a></li>
                        <li><a href="#apropos">À propos</a></li>
                        <li><a href="//logicamp.org/be/tos.php">Conditions générales</a></li>
                        <li><a href="https://logicamp.org/wordpress" target="_blank">Actualités</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Partenaires</h5>
                    <div class="partners-logos">
                        <a href="http://opensimulator.org/" target="_blank">
                            <img src="//logicamp.org/img/opensimlogo.png" alt="OpenSimulator" onerror="this.style.display='none'">
                        </a>
                        <a href="http://www.hypergridbusiness.com/" target="_blank">
                            <img src="//logicamp.org/img/logo-star.png" alt="HyperGrid Business" onerror="this.style.display='none'">
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copyright">
                        Copyright © 2009-<?php echo date('Y'); ?> - Logicamp.org : Monde Virtuel 3D basé sur OpenSim
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script Slideshow -->
    <script>
        function animate(){
            document.getElementById('animation').src="//logicamp.org/img/slideshow/img"+frame+".png";
            frame=((frame+1)%7);
            setTimeout(animate,5000);
        }
        
        var frame=1;
        animate();
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts personnalisés -->
    <script>
        // Générer captcha
        function generateCaptcha() {
            const num1 = Math.floor(Math.random() * 10) + 1;
            const num2 = Math.floor(Math.random() * 10) + 1;
            const operators = ['+', '-', '*'];
            const operator = operators[Math.floor(Math.random() * operators.length)];
            
            let correctAnswer;
            switch(operator) {
                case '+': correctAnswer = num1 + num2; break;
                case '-': correctAnswer = num1 - num2; break;
                case '*': correctAnswer = num1 * num2; break;
            }
            
            document.getElementById('captcha-question').textContent = num1 + ' ' + operator + ' ' + num2 + ' = ?';
            document.getElementById('correctAnswer').value = correctAnswer;
        }
        
        // Générer au chargement
        window.addEventListener('DOMContentLoaded', generateCaptcha);
        
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Mobile menu toggle
        document.getElementById('mobileMenuToggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
    </script>
</body>
</html>