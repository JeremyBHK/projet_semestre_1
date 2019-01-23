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
  if (isset($_POST['inscription'])) {
    $user = new UserController();
    $insc_user = $user->launchInscription($_POST);
  }

  // $user = new userManager(); 

// CONNEXION
  if (isset($_REQUEST['connexion'])) {
    $user = new UserController();
    $co_user = $user->launchConnexion($_POST);
  }

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
