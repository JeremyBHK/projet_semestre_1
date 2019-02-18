<?php
  session_start();

  require_once "src/class/bdd.php";
  require_once "src/class/util.php";
  require_once "src/orm/user.php";
  require_once "src/orm/voiture.php";
  require_once "src/orm/domicile.php";
  require_once "src/model/userManager.php";
  require_once "src/model/voitureManager.php";
  require_once "src/model/domicileManager.php";
  require_once 'src/controller/default_controller.php';
  require_once 'src/controller/user_controller.php';
  require_once 'src/controller/voiture_controller.php';
  require_once 'src/controller/domicile_controller.php';

  $page = ''; // Page par défaut
  if (isset($_GET['p'])) { // Si on reçois un paramètre "p"
    $page = $_GET['p']; // On considère que c'est la page à afficher
  }

  switch ($page) {
    case 'home':
      $ctrl = new UserController();
      $ctrl->appelRender('home', array());
      var_dump($_SESSION);
      break;
    case 'onboarding':
      $ctrl = new UserController();
      $ctrl->appelRender('onboarding', array());
      break;
    default:
      // Page d'accueil -> aucun paramètre "p" reçu
      $ctrl = new UserController();
      $ctrl->appelRender('connexion_inscription', array());
      break;
  }
?>
