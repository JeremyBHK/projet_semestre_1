<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <main>
      <fieldset>
      <legend>Inscription</legend>

      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="">
        <br>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="">
        <br>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="">
        <br>
        <input type="submit" name="inscription" value="Inscription">
      </form> 
    </fieldset>

    <fieldset>
      <legend>Connexion</legend>

      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="">
        <br>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="">
        <br>
        <input type="submit" name="connexion" value="Connexion">
      </form>
    </fieldset>
    </main>
    <?php
      require_once "./src/class/bdd.php";
      require_once "./src/class/util.php";
      require_once "./src/orm/user.php";
      require_once "./src/model/userManager.php";

      if (isset($_POST['inscription'])) {
        $user = new userManager();
        $mail_exist = $user->userExist($_POST['email']);

        if (empty($mail_exist)) {
          if(Util::verifEmail($_POST['email']) == true ){
            $user = new userManager();
            $user->setPrenom($_POST['prenom']);
            $user->setNom($_POST['nom']);
            $user->setEmail($_POST['email']);
            $user->setMdp($_POST['mdp']);
            // echo $_SESSION['email'];
            // problème ici ^
            $user->inscription();
          }else{
            echo 'Mauvais ma biche';
          }
        }else{
          echo 'Déjà là ma biche';
        }
      }

      $user = new userManager();

// CONNEXION
      // if (isset($_REQUEST['connexion'])) {
      //   $co = new userManager();
      //   $co->setEmail($_POST['email']);
      //   $co->setMdp($_POST['mdp']);
      //   $co->ifAccountExist();
      //   echo 'good';
      // }else{
      //   echo 'wrong';
      // }

// DELETE
      // $user_delete = $user->findOneById(6);
      // $user_delete->delete();

// UPDATE
      // $update_user = $user->findOneById(2);
      // echo "<br>";
      // echo "<br>";
      // var_dump($update_user);
      // echo "<br>";
      // echo "<br>";
      // echo $update_user->getPrenom();
      // echo "<br>";
      // $update_user->setPrenom('obiwan');
      // echo $update_user->getPrenom();
      // echo "<br>";
      // echo "<br>";
      // echo $update_user->getNom();
      // echo "<br>";
      // $update_user->setNom('kenobi');
      // echo $update_user->getNom();
      // echo "<br>";
      // echo "<br>";
      // echo $update_user->getEmail();
      // echo "<br>";
      // $update_user->setEmail('obiwan@gmail.com');
      // echo $update_user->getEmail();
      // echo "<br>";
      // echo "<br>";
      // echo $update_user->getMdp();
      // echo "<br>";
      // $update_user->setMdp('obidecoruscant');
      // echo $update_user->getMdp();
      // $update_user->update();
    ?>
  </body>
</html>
