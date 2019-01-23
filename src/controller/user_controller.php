<?php
  class UserController extends DefaultController{
    public function appelRender($vue, $variables){
      parent::render($vue, $variables);
    }

    public function launchInscription($post){
      $user = new userManager();
      $mail_exist = $user->userExist($post['email']);

      if (empty($mail_exist)) {
        if(Util::verifEmail($post['email']) == true ){
          $user = new userManager();
          $user->setPrenom($post['prenom']);
          $user->setNom($post['nom']);
          $user->setEmail($post['email']);
          $user->setMdp($post['mdp']);
          $user->inscription();
        }else{
          echo 'Mauvais ma biche';
        }
      }else{
        echo 'Déjà là ma biche';
      }

      // header('location: src/view/home.php');
    }

    public function launchConnexion($post){
      $co = new userManager();
      $co->setEmail($post['email']);
      $co->setMdp($post['mdp']);
      $co->ifAccountExist();
      echo 'good';

      // header('location: src/view/home.php');
    }
  }
?>
