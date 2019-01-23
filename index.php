<?php
  require_once "src/class/bdd.php";
  require_once "src/class/util.php";
  require_once "src/orm/user.php";
  require_once "src/model/userManager.php";
  require_once 'src/controller/default_controller.php';
  require_once 'src/controller/user_controller.php';

  $page = ''; // Page par défaut
  if (isset($_GET['p'])) { // Si on reçois un paramètre "p"
    $page = $_GET['p']; // On considère que c'est la page à afficher
  }

  switch ($page) {
    case 'home':
      $ctrl = new UserController();
      $ctrl->appelRender('home', array());
      break;
    // case 'index':
    //   $ctrl = new UserController();
    //   $ctrl->appelRender('home', array());
    //     echo "mabite2";
    //     break;
    default:
      // Page d'accueil -> aucun paramètre "p" reçu
      $ctrl = new UserController();
      $ctrl->appelRender('connexion_inscription', array());
      echo "ma";
      break;
  }
?>
