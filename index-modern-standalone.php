<?php
//$$\                          $$\                                            
//$$ |                         \__|                                           
//$$ |      $$$$$$\   $$$$$$\  $$\  $$$$$$$\ $$$$$$\  $$$$$$\$$$$\   $$$$$$\  
//$$ |     $$  __$$\ $$  __$$\ $$ |$$  _____|\____$$\ $$  _$$  _$$\ $$  __$$\ 
//$$ |     $$ /  $$ |$$ /  $$ |$$ |$$ /      $$$$$$$ |$$ / $$ / $$ |$$ /  $$ |
//$$ |     $$ |  $$ |$$ |  $$ |$$ |$$ |     $$  __$$ |$$ | $$ | $$ |$$ |  $$ |
//$$$$$$$$\\$$$$$$  |\$$$$$$$ |$$ |\$$$$$$$\\$$$$$$$ |$$ | $$ | $$ |$$$$$$$  |
//\________\\______/  \____$$ |\__| \_______|\_______|\__| \__| \__|$$  ____/ 
//                   $$\   $$ |                                     $$ |      
//                   \$$$$$$  |                                     $$ |      
//                    \______/                                      \__|   

/*
 * Copyright (c) 2009 //logicamp.org/ - The Outdoor Metaverse
 * index-modern-standalone.php - ver 4.0.0 MODERN DESIGN - STANDALONE VERSION
 * last modification " . date('d/m/Y') . "
 * monde virtuel opensim
 * 
 * VERSION STANDALONE pour test et preview
 * Les dépendances WAMP sont commentées pour permettre le test du design
 */

error_reporting(E_ALL);

$OK=1;

/* WAMP DEPENDENCIES - Commentées pour version standalone
require_once("/wamp/www/settings/config.php");
require_once("/wamp/www/settings/mysql.php");
require_once("/wamp/www/settings/status.php"); 
require_once("/wamp/www/settings/mysqlservices.php");
require_once("/wamp/www/settings/user_code.php");
require_once("/wamp/www/settings/points_code.php");
require_once("/wamp/www/settings/stat_code.php");
require_once("/wamp/www/settings/stat_code.php");
require_once("/wamp/www/webassets/inc/asset.php");
require_once "/wamp/www/settings/manager/PointManager.php"; 
require_once "/wamp/www/settings/structweb/Region.php";
require_once "/wamp/www/settings/manager/RegionManager.php";
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <link rel="canonical" href="https://logicamp.org/wordpress/">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="KEYWORDS" content="jeux, jeu, jeu gratuit, jeu gratuit en ligne, jeu gratuit de monde virtuel, jeux online, monde virtuel, monde virtuel 3D, monde virtuel en ligne, monde virtuel en 3D, monde virtuel gratuit, secondlife, opensim, opensimulator, hypergrid">
    <meta name="DESCRIPTION" content="Logicamp est un METAVERSE ou monde virtuel basé sur OpenSimulator - The Outdoor Metaverse(OpenSimulator) et compatible avec SecondLife - Inscription gratuite - Terrains virtuels Low-Cost">
    <meta name="msvalidate.01" content="DA91DBE179159CAB5A25AA181C7F85E7" />
    <meta name="alexaVerifyID" content="pMn3JxN19Kx8g_7fa0oqvREwOqY">
    <meta name="google-site-verification" content="QDp-J7bB50FZ8lbcMx0CJPQiZKt3sA01ThAPAQh8d4E" />
    <meta name="google-site-verification" content="5TBPpJgKqY1iRMaVci9Qk_-J4YUilX8eOf9qXglrOfs" />
    <meta name="facebook-domain-verification" content="3llvogkj6hpxm64bsnohndamw8cidx" />
    
    <title>Logicamp.org | The Outdoor Metaverse | Monde Virtuel 3D | OpenSimulator Metaverse</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom Modern CSS -->
    <link rel="stylesheet" href="style-modern.css" type="text/css">
    
    <!-- Scripts originaux -->
    <script type="text/javascript" src="https://www.logicamp.org/inscription/ajax.js"></script>
    <?php 
    // include("/wamp/www/settings/script.html"); 
    // Commenté pour version standalone
    ?>
</head>
<body>

    <!-- Navigation moderne -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="brand-text">LOGI<span class="brand-highlight">CAMP</span></span>
                <span class="brand-subtitle">The Outdoor Metaverse</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#accueil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#apropos">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#inscription">Inscription</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tutoriels">Tutoriels</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://logicamp.org/wordpress" target="_blank">Actualités</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php 
    // include("/wamp/www/settings/topcss.php"); 
    // Commenté pour version standalone
    ?>

    <!-- Hero Section avec Slideshow -->
    <section id="accueil" class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-slideshow">
            <a href="https://www.paypal.com/donate/?token=B-KeVcByJCAvZt8pS4DWepp9JRvRE799BOQFrHnJdX59Ax-VXjp2bFUxTVMMGib4mUv8A42T_vyGQ8yw">
                <img id="animation" src="//logicamp.org/img/slideshow/img0.png" class="hero-image" alt="Logicamp Metaverse">
            </a>
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="hero-title" data-aos="fade-up">
                            Bienvenue dans le <span class="text-gradient">Métavers</span> du Futur
                        </h1>
                        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                            Préparer le futur • Créer • Explorer • Connecter
                        </p>
                        <div class="hero-cta" data-aos="fade-up" data-aos-delay="200">
                            <a href="#inscription" class="btn btn-primary btn-lg me-3">
                                <i class="bi bi-rocket-takeoff me-2"></i>Commencer Gratuitement
                            </a>
                            <a href="#apropos" class="btn btn-outline-light btn-lg">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Formulaire d'inscription moderne -->
                        <div class="registration-card" id="inscription" data-aos="fade-left">
                            <div class="card-glow"></div>
                            <h3 class="text-center mb-4">
                                <i class="bi bi-person-plus-fill me-2"></i>Inscription GRATUITE
                            </h3>
                            <form name="form" action="https://www.logicamp.org/inscription/formcheck.php" method="POST" onSubmit="return Form(this)">
                                <!-- Sélection Avatar -->
                                <div class="avatar-selection mb-4">
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <label class="avatar-option">
                                                <input type="radio" id="genre" checked name="genre" value="paul">
                                                <img class="avatar-img" src="//logicamp.org/img/pub/leo1.png" alt="Avatar Paul">
                                                <span class="avatar-label">Paul</span>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="avatar-option">
                                                <input type="radio" id="genre" name="genre" value="suki">
                                                <img class="avatar-img" src="//logicamp.org/img/pub/suki2.png" alt="Avatar Suki">
                                                <span class="avatar-label">Suki</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Champs du formulaire -->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" id="accountfirst" name="accountfirst" placeholder="Prénom" maxlength="15" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                        <input type="text" class="form-control" id="accountlast" name="accountlast" placeholder="Nom" maxlength="15" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        <input type="password" class="form-control" id="wordpass" name="wordpass" placeholder="Mot de passe" maxlength="15" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" maxlength="40" required>
                                    </div>
                                </div>
                                
                                <!-- Captcha mathématique -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold" id="captcha-question">
                                        <!-- Captcha généré par JavaScript -->
                                    </label>
                                    <input type="text" class="form-control" id="answer" name="answer" placeholder="Votre réponse" required>
                                    <input type="hidden" id="correctAnswer" name="correctAnswer" value="">
                                </div>
                                
                                <!-- Conditions générales -->
                                <div class="mb-3">
                                    <small class="text-muted">
                                        En cliquant sur le bouton ci-dessous, je déclare avoir lu et accepté les 
                                        <a href="//logicamp.org/be/tos.php" class="link-primary">Conditions générales</a>. 
                                        Je déclare aussi avoir 18 ans ou plus.
                                    </small>
                                </div>
                                
                                <input type="hidden" name="action" value="check">
                                
                                <!-- Bouton d'inscription -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-lg">
                                        <i class="bi bi-check-circle me-2"></i>S'inscrire Gratuitement
                                        <img src="//logicamp.org/img/android.png" height="24" width="24" class="ms-2" alt="Android">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À propos -->
    <section id="apropos" class="section-dark py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <a href="https://logicamp.org/wordpress">
                        <img class="img-fluid mb-4" src="https://logicamp.org/img/pub/logiportail.jpg" alt="Logicamp Portal">
                    </a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-card">
                        <h2 class="section-title">Qu'est-ce que Logicamp ?</h2>
                        <div class="text-content">
                            <p class="lead">
                                Logicamp n'est pas un site internet, c'est un <strong class="text-gradient">METAVERSE</strong>, 
                                un monde virtuel en 3D, un jeu gratuit en ligne ou plutôt un monde numérique 3D en ligne 
                                imaginé et créé par ses résidents.
                            </p>
                            <p>
                                C'est aussi ce que les spécialistes ont qualifié de 
                                <a href="http://fr.wikipedia.org/wiki/M%C3%A9tavers" target="_blank" class="link-primary">métavers</a> 
                                (terme inventé par Neal Stephenson dans son roman "Le Samouraï virtuel", qui traite de l'évolution 
                                d'un monde virtuel en une réalité tangible. Le métavers regroupe à la fois les multivers et tous 
                                les univers passés et présents).
                            </p>
                            <p>
                                Logicamp est basé sur le serveur de monde virtuel 
                                <a href="http://opensimulator.org/" target="_blank" class="link-primary">OpenSimulator</a>, 
                                The Free Metaverse, dans lequel la quasi-totalité du contenu est créé par les utilisateurs, 
                                des gens comme vous.
                            </p>
                            <p>
                                Le metaverse libre, l'Open metaverse ou encore l'internet 3D Libre est composé de plusieurs grilles 
                                OpenSim (ou metaverse ou mondes virtuels ou clônes de SecondLife) connectés entre eux grâce à 
                                l'Hypergrid (qui est un système de téléportation d'une grille à une autre et aussi l'équivalent du 
                                lien Hypertexte grâce auquel l'Internet existe).
                            </p>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-link-45deg info-icon"></i>
                                    <h5>HyperGrid Link</h5>
                                    <code>secondlife://logicamp.org:8002:accueil/</code>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-server info-icon"></i>
                                    <h5>LoginURI</h5>
                                    <code>http://logicamp.org:8002</code>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="http://www.dmca.com/Protection/Status.aspx?ID=logicamp-modern" 
                               title="DMCA.com Protection Status" class="dmca-badge">
                                <img src="//images.dmca.com/Badges/_dmca_premi_badge_1.png?ID=logicamp-modern" 
                                     alt="DMCA.com Protection Status">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Vidéos & Tutoriels -->
    <section id="tutoriels" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Découvrez Logicamp en Direct</h2>
            
            <!-- Twitch TV -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="video-card">
                        <h3 class="mb-3"><i class="bi bi-twitch text-purple me-2"></i>Twitch TV Live</h3>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://player.twitch.tv/?channel=logicampgrid&parent=www.logicamp.org" 
                                    frameborder="0" allowfullscreen="true" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- YouTube Tutorial -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="video-card">
                        <h3 class="mb-3">
                            <i class="bi bi-youtube text-danger me-2"></i>
                            Inscription, téléchargement et configuration du viewer
                        </h3>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/PCI3Gozzf78" 
                                    title="YouTube video player" frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 3D Website -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="video-card">
                        <h3 class="mb-3"><i class="bi bi-box text-info me-2"></i>LOGICAMP 3D WEBSITE</h3>
                        <div class="ratio ratio-16x9">
                            <a href="https://www.cybalounge.de/location.html?locationid=900000133&dl=true" target="_blank">
                                <img src="//logicamp.org/img/cyba1.jpg" class="img-fluid rounded" alt="Logicamp 3D Website">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Recommandations -->
    <section class="section-dark py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">
                <i class="bi bi-star-fill text-warning me-2"></i>Recommandations
            </h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="testimonial-card">
                        <i class="bi bi-quote quote-icon"></i>
                        <p class="testimonial-text">
                            "Logicamp has been an awesome space to create and develop my educational projects."
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="testimonial-card">
                        <i class="bi bi-quote quote-icon"></i>
                        <p class="testimonial-text">
                            "I recommend Logicamp for anyone who wants to start his own region at a very decent price. 
                            The server is hypergrid enabled, the technical support is very friendly and the owner is running 
                            it the best he can. Mainly Logicamp it's very user friendly. Give it a try."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Donations -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4">
                        <i class="bi bi-heart-fill text-danger me-2"></i>Soutenez Logicamp
                    </h2>
                    <div class="donation-card">
                        <p class="lead mb-4">
                            Logicamp survit grâce aux donations et à votre générosité. Merci de faire un don pour la 
                            maintenance des serveurs et pour que ce service puisse continuer à exister.
                        </p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="JCB5TYVMEWGU4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-paypal me-2"></i>Faire un don via PayPal
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Logos Partenaires -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="partners-section">
                        <h4 class="text-center mb-4">Nos Partenaires</h4>
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
                            <a href="http://opensimulator.org/" target="_blank">
                                <img src="//logicamp.org/img/opensimlogo.png" width="100" alt="OpenSimulator" class="partner-logo">
                            </a>
                            <a href="http://www.hypergridbusiness.com/" target="_blank">
                                <img src="//logicamp.org/img/logo-star.png" width="200" alt="HyperGrid Business" class="partner-logo">
                            </a>
                            <a href="https://www.virwox.com?r=5474" target="_blank">
                                <img src="//logicamp.org/logicamp/img/virwox.jpg" width="100" alt="VirWox" class="partner-logo">
                            </a>
                            <a href="http://www.lokazionel.fr/" target="_blank">
                                <img src="//logicamp.org/img/lokazionel.png" width="120" alt="Lokazionel" class="partner-logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer moderne -->
    <footer class="footer-modern">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">LOGICAMP</h5>
                    <p class="footer-text">
                        The Outdoor Metaverse<br>
                        Monde Virtuel 3D basé sur OpenSimulator
                    </p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">Liens Rapides</h5>
                    <ul class="footer-links">
                        <li><a href="#accueil">Accueil</a></li>
                        <li><a href="#apropos">À propos</a></li>
                        <li><a href="//logicamp.org/be/tos.php">Conditions générales</a></li>
                        <li><a href="https://logicamp.org/wordpress">Actualités</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">Suivez-nous</h5>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitch"></i></a>
                        <a href="https://plus.google.com/u/0/109325970510098650191?rel=author" class="social-link">
                            <i class="bi bi-google"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="footer-copyright">
                        Copyright © 2023 - Logicamp.org : Monde Virtuel 3D basé sur OpenSim
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <?php 
    // include("/wamp/www/settings/pied.html"); 
    // Commenté pour version standalone
    ?>

    <!-- Script Slideshow (conservé de l'original) -->
    <script>
        function animate(){
            document.getElementById('animation').src="//logicamp.org/img/slideshow/img"+frame+".png";
            frame=((frame+1)%7);
            setTimeout(animate,5000);
        }
        
        function sleep(milliSeconds){
            var startTime = new Date().getTime();
            while (new Date().getTime() < startTime + milliSeconds);
        }
        
        var frame=1;
        animate();
    </script>

    <?php
    /* LOGIQUE MYSQL - Commentée pour version standalone
    // Cette logique sera active sur votre serveur WAMP avec les vraies connexions DB
    $tomorrow  = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
    $yesterday  = mktime(0, 0, 0, date("m"), date("d"), date("Y"));

    $DbLink = new DB;
    $DbLink->query("SELECT UserID, login, logout from griduser WHERE login > $yesterday ORDER BY login DESC");
    while (list($uuid, $loginTime, $lougoutTime) = $DbLink->next_record())
    {
        if ($uuid!="" && GetFirstName($uuid)!="" && GetLastName($uuid)!="" && GetUserName($uuid) != "-"){
            if (DejaDonne($uuid,"grid")==0 ){ 
                $DbL2 = new DB;
                $DbL2->query("INSERT INTO points (UUID,points,raison,date) VALUES ('$uuid','100','grid','$loginTime')");
                AjusteSolde($uuid);
            }
        }
    }
    */
    ?>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Smooth Scroll -->
    <script>
        // Générer le captcha mathématique
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
            
            document.getElementById('captcha-question').textContent = `${num1} ${operator} ${num2} = ?`;
            document.getElementById('correctAnswer').value = correctAnswer;
        }
        
        // Générer le captcha au chargement de la page
        window.addEventListener('DOMContentLoaded', generateCaptcha);
        
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
        
        // Navbar transparency on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNav');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
