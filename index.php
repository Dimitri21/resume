
<?php 
    include 'php/inc.php';
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Développeur web fullstack junior à Strasbourg" />
        <title>CV - Dimitri HERTZ</title>
        
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
        <!-- CSS-->
        
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen"/>
        <link href="css/style.css" rel="stylesheet" />
        
        <!-- Material icon-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>

        <header>
             <!-- Fixed Desktop SideNav-->
            <div id="sideNav">
                <ul class="sidenav sidenav-fixed">
                    <li class="logo"><img class=" brand-logo" id="logo" src="assets/img/dimitri_hertz.jpg" alt="Image de Dimitri Hertz" /></li>
                    <li><a href="#about">Dimitri HERTZ</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#experience">Expériences</a></li>
                    <li><a href="#education">Formations</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
           </div>


          <!-- Tablet/mobile header -->
           <div class="navbar-fixed" id="topNav">
            <nav>
              <div class="nav-wrapper">
                <p class="brand-logo">Dimitri HERTZ</p>
                <ul class="right">
                    <li>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </li>   
                </ul>
              </div>
            </nav>
          </div>

          <!-- Mobile SideNav-->
          <div>
            <ul id="slide-out" class="sidenav">
                <li class="logo"><img class=" brand-logo" src="assets/img/dimitri_hertz.jpg" alt="Image de Dimitri Hertz" /></li>
                <li><a class="sidenav-close js-scroll-trigger" href="#about">Dimitri HERTZ</a></li>
                <li><a class="sidenav-close js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li><a class="sidenav-close js-scroll-trigger" href="#experience">Expériences</a></li>
                <li><a class="sidenav-close js-scroll-trigger" href="#education">Formations</a></li>
                <li><a class="sidenav-close js-scroll-trigger" href="#skills">Compétences</a></li>
                <li><a class="sidenav-close js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
       </div>

        </header>

    <!-- Right Desktop Dot SideNav-->
    <div id="cd-vertical-nav">
        <ul>
            <li>
                <a href="#about" data-number="1">
                    <span class="cd-dot"></span>
                    <span class="cd-label">A propos de moi</span>
                </a>
            </li>
            <li>
                <a href="#portfolio" data-number="2">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Portfolio</span>
                </a>
            </li>
            <li>
                <a href="#experience" data-number="3">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Expériences</span>
                </a>
            </li>
            <li>
                <a href="#education" data-number="4">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Formations</span>
                </a>
            </li>
            <li>
                <a href="#skills" data-number="5">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Compétences</span>
                </a>
            </li>
            <li>
                <a href="#contact" data-number="6">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Contact</span>
                </a>
            </li>
        </ul>
    </div>
    

    <!-- Page Content-->
    <main class="row">
    <div class="col s12 m10 l10 xl8" id="mainContainer">

        <!-- About-->
        <section class="section scrollspy" id="about">

                <div class="mobile-image">
                    <img src="assets/img/dimitri_hertz.jpg" alt="Image de Dimitri Hertz" />
                </div>
        
                <h1>DIMITRI <span class="color-main">HERTZ</span> </h1>
                <h2>Développeur web fullstack junior · <span class="color-main">Strasbourg</span> </h2>

                <p>Je suis à la recheche d'un stage dans le cadre de ma formation Développeur Intégrateur Symfony Wordpress en tant que développeur full stack junior, avec une spécialisation back-end en PHP/Symfony pour la période du 15 avril au 9 juillet 2021.</p>
                <div>

                <a class="social-icon" href="https://www.linkedin.com/in/dimitri-hertz/" rel="noreferrer noopener nofollow" target="_blank">
                        <div class="circle social-block">
                            <img src="assets/img/linkedin.svg" alt="LinkedIn Logo">
                        </div>
                    </a>

                    <a class="social-icon" href="https://github.com/Dimitri21/" rel="noreferrer noopener nofollow" target="_blank">
                        <div class="circle social-block">
                             <img src="assets/img/github.svg" alt="Github Logo">
                        </div>
                    </a>
                </div>
           
        </section>
        <hr>

        <!-- Portfolio-->
        <section class="section scrollspy" id="portfolio">
        
            <h2>Portfolio</h2>

            <div class="carousel" id="carousel">
                <a class="carousel-item" href="https://get-mails.com"  target="_blank" rel="noreferrer noopener nofollow"><img src="assets/img/carousel/get-mails-website.jpg" alt="Logo site Get Mails"></a>
                <a class="carousel-item" href="https://galeriepiazzo.com" target="_blank" rel="noreferrer noopener nofollow"><img src="assets/img/carousel/Galerie-piazzo-website.jpg" alt="Logo site Galerie Piazzo"></a>
                <a class="carousel-item" href="https://babayigit-orthodontie.fr" target="_blank" rel="noreferrer noopener nofollow"><img src="assets/img/carousel/Babayigit-orthodontie-website.jpg" alt="Logo site cabinet orthodontiste Docteur Babayigit"></a>
                <a class="carousel-item" href="https://galerierenovation.fr" target="_blank" rel="noreferrer noopener nofollow"><img src="assets/img/carousel/Galerie-renovation-website.jpg" alt="Logo site Galerie Renovation"></a>
            
            </div>
            
            <div class="row" id="mobile-portfolio">
                <div class="col"><a href="https://get-mails.com" target="_blank" rel="noreferrer noopener nofollow"><img src="assets/img/Logo-Get-mail-3.png" alt="Logo site Get Mails"></a></div>
                <div class="col"><a href="https://galeriepiazzo.com" target="_blank" rel="noreferrer noopener nofollow"><img src="assets/img/Logo-Galerie-Piazzo.jpg" alt="Logo site Galerie Piazzo"></a></div>
                <div class="col"><a href="https://babayigit-orthodontie.fr" target="_blank" rel="noreferrer noopener nofollow"><img src="assets/img/LOGO_babayigit.png" alt="Logo site cabinet orthodontiste Docteur Babayigit"></a></div>
                <div class="col"><a href="https://galerierenovation.fr" target="_blank" rel="noreferrer noopener nofollow"><img src="assets/img/Logo-galerie-renovation.png" alt="Logo site Galerie Renovation"></a></div>
            </div>

            
            <p>Le design, l'ergonomie, et l'efficience sont au centre de la conception de mes sites web. Je serai heureux de mettre mes compétences à votre service pour vous offrir une application web efficace et personnalisée.</p>
            <p>Je veillerai également à assurer la conformité juridique de votre site internet en matière de droit des protections des données à caractère personnel, aux diverses règlementation e-commerce, et en droit de la propriété intellectuelle.</p>

        </section>
        <hr>
        
        <!-- Experience-->
        <section class="section scrollspy" id="experience">
        
            <h2 class="mb-title">Experiences professionnelles</h2>

            <article>
                <h3>Juriste en droit des affaires et du numérique</h3>
                <div class="subheading">Crédit Mutuel</div>
                <div class="subheading-year">Avril 2018 - Janvier 2020</div>
                <p>Droit des données à caractère personnel (RGPD) - Analyse juridique et négociation de contrats - Droit de la propriété intellectuelle (marque, droit d'auteur) - Rédaction de CGV/CGU - Droit de la consommation - Baux commerciaux - Droit des sociétés (tenu de conseils d'administration et d'assemblées générales, opérations de haut de bilan) - Droit de la presse - Gestion et négociation de contentieux</p>
                <p>Gestion de projet - Design graphique - Analyse et travail sur l'automatisation de la vie sociale de sociétés (IA)</p>
            </article>

            <article>
                <h3>Co-fondateur</h3>
                <div class="subheading">Aparly</div>
                <div class="subheading-year">Septembre 2016 - Novembre 2017</div>
                <p>Growth marketing - Gestion de projet en mode agile - Droit des affaires et des nouvelles technologies - Création de site web - UI/UX design - Gestion financière - Gestion de projet
                </p>
            </article>
            
            <article>
                <h3 >Co-fondateur</h3>
                <div class="subheading">DropArts</div>
                <div class="subheading-year">Octobre 2014 - Novembre 2016</div>
                <p>Marketing Digital df- Droit des affaires et des nouvelles technologies - UI/UX design - Gestion financière - Gestion de projet</p>
            </article>

        </section>
        <hr>

        <!-- Education-->
        <section class="section scrollspy" id="education">
          
            <h2 class="mb-title">Formations</h2>
            
            <article>
                <h3>Développeur Intégrateur PHP Symfony Wordpress</h3>
                <div class="subheading">CCI Strasbourg</div>
                <div class="subheading-year">Octobre 2020 - Aujourd'hui</div>
                <p>HTML, CSS, JS, PHP, Wordpress, Prestashop, Symfony</p>
            </article>
        
            <article>
                <h3>Master 2 Entrepreneuriat - Management de l'innovation</h3>
                <div class="subheading">EM Strasbourg Business School</div>
                <div class="subheading-year">2016 - 2017</div>
                <p>Mention Bien</p>
            </article>
        
            <article>
                <h3>Certificat d'Etudes Spécialisées en Droit de la Propriété Intellectuelle et des Nouvelles Technologies</h3>
                <div class="subheading">Université de Montpellier</div>
                <div class="subheading-year">2016</div>
                <p>Mention Assez Bien (15/20)</p>
            </article>
        
            <article>
                <h3>Master 2 DJCE - Juriste et conseil d'entreprise</h3>
                <div class="subheading">Faculté de Droit de Strasbourg</div>
                <div class="subheading-year">2015 - 2016</div>
                <p>Mention Bien</p>
            </article>
            
            <article>
                <h3>Licence - Master 1 - Droit des affaires</h3>
                <div class="subheading">Faculté de Droit de Strasbourg</div>
                <div class="subheading-year">2011 - 2015</div>
                <p>Mention Assez Bien</p>
            </article>
          
        </section>
        <hr>

        <!-- Skills-->
        <section class="section scrollspy" id="skills">
        
            <h2 class="mb-title">Compétences</h2>

            <!--Langage de programmation-->
            <div id="langage-prog">

                <div class="subheading mb-subtitle">Langages de programmation & Framework</div>
                <div class="row">
                    <div class="col ">
                        <img src="assets/img/html-5.svg" alt="Logo HTML">
                    </div>
                    <div class="col ">
                        <img src="assets/img/css-5.svg" alt="Logo CSS">
                    </div>
                    <div class="col ">
                        <img src="assets/img/javascript-4.svg" alt="Logo JavaScript">
                    </div>
                    <div class="col ">
                        <img src="assets/img/jquery-1.svg" alt="Logo Jquery">
                    </div>
                    <div class="col ">
                        <img src="assets/img/php.svg" alt="Logo PHP">
                    </div>
                    <div class="col ">
                        <img src="assets/img/symfony.svg" alt="Logo Symfony">
                    </div>
                </div>
            </div>

                <!--skills-other-->
            <div id="skills-other">
                <div class="subheading mb-subtitle" >Custom Management System</div>
                <div class="row center-align">
                    <div class="col ">
                        <img src="assets/img/wordpress.svg" alt="Logo Wordpress">
                        <h5>Wordpress</h5>
                    </div>
                    <div class="col">
                        <img src="assets/img/prestashop.svg" alt="Logo Prestashop">
                        <h5>Prestashop</h5>
                    </div>

                </div>
            </div>
            
            <!--Certifications-->
            <div id="certifications">
                <div class="subheading mb-subtitle" >Certifications Google Adwords</div>
                <div class="row center-align">
                    <div class="col ">
                        <img src="assets/img/Google_G_Logo.svg_.png" alt="Logo Google">
                        <h5>Réseau de recherche</h5>
                        
                    </div>
                    <div class="col">
                        <img src="assets/img/youtube.png" alt="Logo Google">
                        <h5>Publicité vidéo</h5>
                        
                    </div>
                    <div class="col">
                        <img src="assets/img/google-product.png" alt="Logo Google">
                        <h5>Réseau display</h5>
                    
                    </div>
                    <div class="col">
                        <img src="assets/img/google-shopping.png" alt="Logo Google">
                        <h5>Annonces shopping</h5>
                    </div>

                </div>
            </div>

          
        </section>
        <hr>

        <!-- Contact -->
        <section class="section scrollspy" id="contact">

            <!-- Sizing Div -->
            <div>
                <h2>Contact</h2>

                <?php if(array_key_exists('errors', $_SESSION)):?>

                    <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                    
                    </div>

                <?php endif; ?>

                <?php if(array_key_exists('success', $_SESSION)):?>

                    <div class="message-success">
                        Merci, votre message a bien été envoyé
                    </div>

                    <script>
                        location.href = "#contact";
                    </script>
                
                <?php endif; ?>

                <form action="php/contactform.php" method="POST">

                    <?php $form = new Form();?>
                  
                        <?= $form->text('name', 'Votre nom');?>
                  
                        <?= $form->email('email', 'Votre email');?>
                  
                        <?= $form->textarea('message', 'Votre message');?>

                    <div id="container">

                        <button class="button-arrow learn-more" type="submit">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Envoyer</span>
                        </button>

                    </div>
                </form>
            </div>
            
        </section>

    <!-- End of mainContainer -->
    </div>
    </main>

    <footer class="col s12">
         <a href="mentions-legales.html">Mentions légales</a>
    </footer>
    
    <!-- Javascript -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script> 
    <script src="js/modernizr.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>


<?php 

unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>



