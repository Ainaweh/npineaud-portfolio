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
  <title>Noémie Pineaud - Portfolio - <?php echo $TEXT['home_translated'];?></title>
</head>
<body>

  <div id="menu-burger">
    <span class="menu-icon"></span>
  </div>
  <div id="overlay-menu">
    <nav role='navigation'>
      <ul>
        <li><a href="#home"><?php echo $TEXT['home_translated']; ?></a></li>
        <li><a href="#about"><?php echo $TEXT['about_translated']; ?></a></li>
        <li><a href="#competences"><?php echo $TEXT['skills_translated']; ?></a></li>
        <li><a href="#productions"><?php echo $TEXT['gallery_translated']; ?></a></li>
        <li><a href="#contact"><?php echo $TEXT['contact_translated']; ?></a></li>
      </ul>
      <ul>
      <li><?php echo $TEXT['settingsTxt_translated']; ?>
        <ul>
          <button class="plus">+</button>
          <button class="moins">-</button>
        </ul>
      </li>
      <li><button class="dys"><?php echo $TEXT['dys_translated']; ?></button></li>
    </ul>
    </nav>
  </div>

  <section id="home">
    <img src="./assets/img/<?php echo $TEXT['img-home_translated'];?>.png" alt="ban" class="img-responsive">
    <a href="#about"><i class="fas fa-chevron-down fa-5x"></i></a>
  </section>

  <section id="about">
    <h2><?php echo $TEXT['about-h2_translated']; ?></h2>
      <div class="presentation row">
        <figure class="col-lg-3 col-sm-8 row">
          <img src="./assets/img/photo-id.jpg" alt="photo_id" class="img-responsive col-12">
          <figcaption>
            <p>Noémie Pineaud</p>
            <p><?php echo $TEXT['age_translated']; ?></p>
          </figcaption>
        </figure>
        <div class="col-lg-9 col-sm-12">
          <h5><?php echo $TEXT['presentation-title_translated']; ?></h5>
          <p><?php echo $TEXT['presentation-txt_translated']; ?></p>
        </div>
      </div>
      <div class="about-bottom row">
        <div class="cv col-lg-3">
          <a href="./docs/pineaud_noemie_<?php echo $TEXT['linkCV_translated']; ?>.pdf" target="_blank"><img src="./assets/img/cv-mini.png" alt="cv_mini"></a>
          <a href="./docs/pineaud_noemie_<?php echo $TEXT['linkCV_translated']; ?>.pdf" download="pineaud_noemie_cv"><?php echo $TEXT['downloadCV_translated']; ?></a>
        </div>
        <div class="parcours col-lg-7 offset-lg-1 row">
          <h5><?php echo $TEXT['parcours-title_translated']; ?></h5>
          <div class="event col-12 offset-lg-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <?php echo $TEXT['event1-date_translated']; ?>
            </div>
            <div class="col-lg-8 col-sm-12">
              <?php echo $TEXT['event1-description_translated']; ?>
            </div>
          </div>
          <div class="event col-12 offset-lg-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <?php echo $TEXT['event2-date_translated']; ?>
            </div>
            <div class="col-lg-8 col-sm-12">
              <?php echo $TEXT['event2-description_translated']; ?>
            </div>
          </div>
          <div class="event col-12 offset-lg-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <?php echo $TEXT['event3-date_translated']; ?>
            </div>
            <div class="col-lg-8 col-sm-12">
              <?php echo $TEXT['event3-description_translated']; ?>
            </div>
          </div>
          </hr>
          <div class="event col-12 offset-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <?php echo $TEXT['event4-date_translated']; ?>
            </div>
            <div class="col-lg-8 col-sm-12">
              <?php echo $TEXT['event4-description_translated']; ?>
            </div>
          </div>
          <div class="event col-12 offset-lg-1 row">
            <div class="event__date col-lg-3 col-sm-12">
              <?php echo $TEXT['event5-date_translated']; ?>
            </div>
            <div class="col-lg-8 col-sm-12">
              <?php echo $TEXT['event5-description_translated']; ?>
            </div>
          </div>
        </div>
      </div>
    <div class="hobbys">
      <h3><?php echo $TEXT['hobbys-title_translated']; ?></h3>
      <div class="row">
        <div class="col-lg-1"></div>
        <?php
          foreach ($hobbys as $hobby) {?>
            <nav class=" navbar navbar-inverse navbar-static-top col-lg-2 col-md-5 col-sm-10" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#<?php echo $hobby['idHobby']; ?>">
                    <img src="./assets/img/<?php echo $hobby['hobbyImg'];?>" alt="$hobby['idHobby']">
                    <h4><?php echo $hobby['hobbyName']; ?></h4>
                  </a>
                </div>
                <div class="collapse navbar-collapse" id="<?php echo $hobby['idHobby'];?>">
                  <ul class="nav navbar-nav">
                    <?php echo $hobby['description']; ?>
                  </ul>
                </div>
              </div>
            </nav>
          <?php }?>
      </div>
    </div>
  </section>

  <section id="competences">
    <h2><?php echo $TEXT['skills-title_translated']; ?></h2>
    <div class="infog">
      <h3><?php echo $TEXT['infog-title_translated']; ?></h3>
      <p><?php echo $TEXT['infog-presentation_translated']; ?></p>
      <div class="icones">
        <img src="./assets/img/ps.png" alt="ps">
        <img src="./assets/img/ai.png" alt="ai">
        <img src="./assets/img/id.png" alt="id">
      </div>
    </div>
    <div class="web">
      <h3><?php echo $TEXT['web-title_translated']; ?></h3>
      <p><?php echo $TEXT['web-presentation_translated']; ?></p>
      <div class="icones">
        <img src="./assets/img/html.png" alt="html">
        <img src="./assets/img/css.png" alt="css">
        <img src="./assets/img/js.png" alt="js">
        <img src="./assets/img/php.png" alt="php">
        <img src="./assets/img/wp.png" alt="wp">
      </div>
    </div>
    <div class="langues">
      <h3><?php echo $TEXT['langues-title_translated']; ?></h3>
      <p><?php echo $TEXT['langues-presentation_translated']; ?></p>
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
