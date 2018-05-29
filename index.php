<?php
  include('./config/config.php');
  include('./functions/functions.php');
  include('./pages/hobbys.php');
  session_start();

  // Traduction
    // lire le code de langue
  $the_lang = get_lang();
    // charger les messages de langue
  get_lang_messages( $the_lang );
?>
<!DOCTYPE html>
<html lang="<?php echo $the_lang; ?>">
<head>
  <meta name="google-site-verification" content="vtUc13S7xQUKLamhiZil_iMHEqSXW1XGfRj1_Udk0_8" />
  <meta charset="UTF-8">
  <link  href="assets/css/style.min.css" rel="stylesheet" type='text/css'>
  <link  href="assets/css/about.css" rel="stylesheet" type='text/css'>
  <link  href="assets/css/animations.scss" rel="stylesheet" type='text/css'>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <title>Noémie Pineaud - Portfolio - Accueil</title>
</head>
<body>

  <div id="menu-burger">
    <span class="menu-icon"></span>
  </div>
  <div id="overlay-menu">
    <nav role='navigation'>
      <ul>
        <li><a href="#home">Accueil</a></li>
        <li><a href="#about">A propos</a></li>
        <li><a href="#competences">Compétences</a></li>
        <li><a href="#productions">Productions</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <ul>
      <li>Taille du texte
        <ul>
          <button class="plus">+</button>
          <button class="moins">-</button>
        </ul>
      </li>
    </ul>
    </nav>
  </div>

  <section id="home">
    <img src="./assets/img/banniere.png" alt="ban" class="img-responsive">
    <a href="#about"><i class="fas fa-chevron-down fa-5x"></i></a>
  </section>

  <section id="about">
    <h2>A propos</h2>
      <div class="presentation row">
        <figure class="col-lg-3 col-sm-8 row">
          <img src="./assets/img/photo-id.jpg" alt="photo_id" class="img-responsive col-12">
          <figcaption>
            <p>Noémie Pineaud</p>
            <p>18 ans</p>
          </figcaption>
        </figure>
        <div class="col-lg-9 col-sm-12">
          <h5>Qui suis-je ?</h5>
          <p>Je suis une étudiante en deuxième année de DUT Métiers du Multimédia et de l'Internet (MMI). Passionnée depuis longtemps par le dessin et, plus récemment, par l'infographie 2D, je suis attirée par les métiers du jeu vidéo en lien avec la création graphique, notamment ceux de concept artist et de character designer. Mes études en MMI m'ont permis d'élargir mon champ de création et d'acquérir de nouvelles compétences dans différents domaines liés à la communication.</p>
        </div>
      </div>
      <div class="about-bottom row">
        <div class="cv col-lg-3">
          <a href="./docs/pineaud_noemie_cv.pdf" target="_blank"><img src="./assets/img/cv-mini.png" alt="cv_mini"></a>
          <a href="./docs/pineaud_noemie_cv.pdf" download="pineaud_noemie_cv">Télécharger mon CV</a>
        </div>
        <div class="parcours col-lg-7 offset-lg-1 row">
          <h5>Parcours</h5>
          <div class="event col-12 offset-lg-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <p>9 avril 2018</p>
              <p>8 juin 2018</p>
            </div>
            <div class="col-lg-8 col-sm-12">
              <p><a href="https://www.16h33.fr/" target="_blank"></a>16h33</p>
              <p>Agence de communication</p>
              <p>Stage de 2 mois (infographie, intégration web, web-design)</p>
            </div>
          </div>
          <div class="event col-12 offset-lg-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <p>2016-2018</p>
            </div>
            <div class="col-lg-8 col-sm-12">
              <p>DUT Métiers du Multimédia et de l'Internet</p>
              <p>IUT Angoulême (16)</p>
            </div>
          </div>
          <div class="event col-12 offset-lg-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <p>Février 2017</p>
            </div>
            <div class="col-lg-8 col-sm-12">
              <p><a href="https://www.comtown.info/" target="_blank">Comtown Productions</a></p>
              <p>Agence de communication</p>
              <p>Stage de 3 semaines (infographie, web-design, intégration web)</p>
            </div>
          </div>
          </hr>
          <div class="event col-12 offset-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <p>2013-2016</p>
            </div>
            <div class="col-lg-8 col-sm-12">
              <p>Bac S Mention Très Bien</p>
              <p>Spécialité ISN, option Musique</p>
              <p>Lycée d'Arsonval (19)</p>
            </div>
          </div>
          <div class="event col-12 offset-lg-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <p>Juin 2014</p>
            </div>
            <div class="col-lg-8 col-sm-12">
              <p>Journal <a href="http://www.brivemag.fr/" target="_blank">Brive Mag</a></p>
              <p>Rédaction d'articles, observation</p>
            </div>
          </div>
        </div>
      </div>
    <div class="hobbys">
      <h3>Centres d'intérêt</h3>
      <div class="row">
        <nav class=" navbar navbar-inverse navbar-static-top col-lg-2 offset-lg-1 col-md-6 col-sm-10" role="navigation">
          <div class="container">
            <!--Bouton fermé-->
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#theatre" ><img src="./assets/img/drama.svg" alt=""><h4>Théâtre</h4>
                </a>
            </div>
            <!-- Menu déroulant -->
            <div class="collapse navbar-collapse" id="theatre">
                <ul class="nav navbar-nav">
                    Je pratique le théâtre depuis maintenant 4 ans. Jouer est pour moi une véritable passion, mais je m'intéresse aussi beaucoup à la mise en scène. L'univers du théâtre m'inspire d'ailleurs particulièrement.
                </ul>
            </div>
        </div>
        </nav>
        <nav class=" navbar navbar-inverse navbar-static-top col-lg-2 col-md-6 col-sm-10" role="navigation">
          <div class="container">
            <!--Bouton fermé-->
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#musique"><img src="./assets/img/music.svg" alt=""><h4>Musique</h4>
                </a>
            </div>

            <!-- Menu déroulant -->
            <div class="collapse navbar-collapse" id="musique">
                <ul class="nav navbar-nav">
                  Je joue de l'alto depuis plus de 13 ans. Jouer au sein d'un orchestre m'a appris à écouter les autres, ainsi qu'à faire preuve de rigueur et de patience.
                </ul>
            </div>
        </div>
        </nav>
        <nav class=" navbar navbar-inverse navbar-static-top col-lg-2 col-md-6 col-sm-10" role="navigation">
          <div class="container">
            <!--Bouton fermé-->
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dessin"><img src="./assets/img/draw.svg" alt=""><h4>Dessin</h4>
                </a>
            </div>
            <!-- Menu déroulant -->
            <div class="collapse navbar-collapse" id="dessin">
                <ul class="nav navbar-nav">
                    Le dessin, traditionnel ou digital, est une de mes passions depuis de nombreuses années. J'adore inventer de nouveaux univers et personnages pour des bandes dessinées, des jeux de rôle, etc. Bien que la fantasy soit mon style de prédilection, j'essaie de m'ouvrir à de nouvelles sources d'inspiration.
                </ul>
            </div>
        </div>
        </nav>
        <nav class=" navbar navbar-inverse navbar-static-top col-lg-2 col-md-6 col-sm-10" role="navigation">
          <div class="container">
            <!--Bouton fermé-->
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#langues"><img src="./assets/img/languages.svg" alt=""><h4>Langues</h4>
                </a>
            </div>
            <!-- Menu déroulant -->
            <div class="collapse navbar-collapse" id="langues">
                <ul class="nav navbar-nav">
                    Pour moi, les langues dont d'une grande importance. J'apprécie beaucoup lire des romans en anglais. J'adore également les voyages à l'étranger, qui me permettent de découvrir de nouvelles cultures.
                </ul>
            </div>
        </div>
        </nav>
        <nav class=" navbar navbar-inverse navbar-static-top col-lg-2 col-md-6 col-sm-10" role="navigation">
          <div class="container">
            <!--Bouton fermé-->
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#jv"><img src="./assets/img/games.svg" alt=""><h4>Jeux-vidéo</h4>
                </a>
            </div>
            <!-- Menu déroulant -->
            <div class="collapse navbar-collapse" id="jv">
                <ul class="nav navbar-nav">
                    Amatrice de jeux-vidéos, j'envisage depuis longtemps d'en faire mon métier. Je m'intéresse particulièrement aux jeux narratifs ainsi qu'aux RPG avec un monde ouvert.
                </ul>
            </div>
        </div>
        </nav>
      </div>
    </div>
  </section>

  <section id="competences">
    <h2>Compétences</h2>
    <div class="infog">
      <h3>Infographie</h3>
      <p>L'infographie m'intéresse depuis mon adolescence. Grâce à ma formation, ainsi qu''à mon expérience personnelle, j'ai appris à bien maîtriser Photoshop et Illustrator. Si le dessin est ma discipline de prédilection, j'ai également pu réaliser, dans le cadre de projets, d'autres créations telles que des affiches, des logos ou encore des cisuels destinés à des sites web. Mon stage dans une agence de communication m'a également permis d'apprendre les bases de la mise en page avec InDesign.</p>
      <div class="icones">
        <img src="./assets/img/ps.png" alt="ps">
        <img src="./assets/img/ai.png" alt="ai">
        <img src="./assets/img/id.png" alt="id">
      </div>
    </div>
    <div class="web">
      <h3>Web</h3>
      <p>L'intégration et le développement web occupent une part importante des enseignements en MMI. À travers différents projets, j'ai appris à maîtriser plusieurs langages informatiques. Je maîtrise également le CMS WordPress. </p>
      <div class="icones">
        <img src="./assets/img/html.png" alt="html">
        <img src="./assets/img/css.png" alt="css">
        <img src="./assets/img/js.png" alt="js">
        <img src="./assets/img/php.png" alt="php">
        <img src="./assets/img/wp.png" alt="wp">
      </div>
    </div>
    <div class="langues">
      <h3>Langues</h3>
      <p>Je pratique l'anglais et l'allemand depuis le collège. Titulaire du CLES2Anglais et de la certification B1 en allemand, j'aime approfondir mes connaissances en langues, notamment grâce à la lecture. Au cours de ma scolarité, j'ai également pu réaliser 2 échanges à Scheinfeld (Allemagne), et je n'exclus pas la possibilité de poursuivre mes études dans ce pays.</p>
        <figure>
          <img src="./assets/img/uk.svg" alt="en">
          <figcaption>
            <p>Anglais</p>
            <p>CLES 2</p>
          </figcaption>
        </figure>
        <figure>
          <img src="./assets/img/de.svg" alt="de">
          <figcaption>
            <p>Allemand</p>
            <p>Niveau B2</p>
            <p>Certification B1 (2013)</p>
          </figcaption>
        </figure>
      </div>
  </section>

   <section id="productions">
      <h2>Productions</h2>
      <div class="container" id="bootstrap-gallery">
        <div id="content" class="row">
          <div class="col-lg-2 col-md-6 col-sm-10 offset-lg-1">
            <a href="./assets/img/alfred.png" class="thumbnail" target="_blank">
              <img src="./assets/img/alfred-thumb.png" alt="alfred">
            </a>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-10 offset-lg-1">
            <a href="./assets/img/artp.png" class="thumbnail" target="_blank">
              <img src="./assets/img/artp-thumb.png" alt="alfred">
            </a>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-10 offset-lg-1">
            <a href="./assets/img/blaster.png" class="thumbnail" target="_blank">
              <img src="./assets/img/blaster-thumb.png" alt="alfred">
            </a>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-10 offset-lg-1">
            <a href="./assets/img/cosplay.png" class="thumbnail" target="_blank">
              <img src="./assets/img/cosplay-thumb.png" alt="alfred">
            </a>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-10 offset-lg-1">
            <a href="./assets/img/daemon.png" class="thumbnail" target="_blank">
              <img src="./assets/img/daemon-thumb.png" alt="alfred">
            </a>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-10 offset-lg-1">
            <a href="./assets/img/de_carabas.png" class="thumbnail" target="_blank">
              <img src="./assets/img/de_carabas-thumb.png" alt="alfred">
            </a>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-10 offset-lg-1">
            <a href="./assets/img/elfette.png" class="thumbnail" target="_blank">
              <img src="./assets/img/elfette-thumb.png" alt="alfred">
            </a>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-10 offset-lg-1">
            <a href="./assets/img/vecto.png" class="thumbnail" target="_blank">
              <img src="./assets/img/vecto-thumb.png" alt="alfred">
            </a>
          </div>
        </div>
      </div>
    </section>

  <section id="contact">
    <h2>Contact</h2>
    <div>
      <h3>N'hésitez pas à me contacter !</h3>
      <div class="social">
        <a href="mailto:noemie.pineaud@gmail.com"><i class="far fa-envelope"></i></a>
        <a href="https://www.linkedin.com/in/no%C3%A9mie-p-2417a2136/"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <footer>
    <ul>
      <li>© Noémie Pineaud - 2018 - Droits réservés</li>
      <li><a href="#">Mentions légales</a></li>
    </ul>
  </footer>

  <!-- Scripts bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./assets/js/script.js" type="text/javascript"></script>
</body>
</html>
