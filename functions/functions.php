<?php
//Traduction
  // Récupère la langue
  function get_lang() {
    // si valeur choisie
    if(!empty($_GET)){
      $_SESSION['lang']=$_GET['lang'];
    }
    //valeur par défaut (fr)
    if ( !isset( $_SESSION[ 'lang' ] ) ) {
      $_SESSION[ 'lang' ] = LANG_DEFAULT;
    }
    return $_SESSION[ 'lang' ];
  }

  // Récupère messages langue
  function get_lang_messages( $lang ) {
    global $TEXT;
    include './langs/'. $lang . '.php';
  }

  // Vérifie que la langue existe
  function is_lang_exist( $lang2check ) {
    $langs = explode(',', LANGS);
    foreach($langs as $lang) {    // lis toutes langues de la var.
      if ( $lang2check == trim($lang) ) {
        return true;
      }
    }
    return false;
  }
?>
