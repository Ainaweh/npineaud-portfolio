<?php
  define( 'SERVER_DEV', 'localhost' );    // local
  define( 'SERVER_PROD', 'npineaud.mmi-angouleme.fr' );   // en ligne
  define( 'LANGS', 'fr, en' );    // Liste langues dispo
  define( 'LANG_DEFAULT', 'fr' );   // Langue par défaut

  $env = $_SERVER[ 'SERVER_NAME' ];

  switch ( $env ) {

    // dev
    case SERVER_DEV:
      include 'config.dev.php';
      break;

    // prod
    case SERVER_PROD:
      include 'config.prod.php';
      break;

  }
?>
