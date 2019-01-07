<?php
  class userManager extends User{
    public function userExist($email){
      $existe = self::findOneByEmail($email);
      return $existe;
    }

    public static function inscription(){
      $sql = 'INSERT INTO users (prenom, nom, email, mdp) VALUES (:prenom, :nom, :email, :mdp)';
      $add = array(
        'prenom' => $this->prenom,
        'nom' => $this->nom,
        'email' => $this->email,
        'mdp' => $this->mdp
      );

      $_SESSION['prenom'] = $this->prenom;
      $_SESSION['nom'] = $this->nom;
      $_SESSION['email'] = $this->email;
      $_SESSION['mdp'] = $this->mdp;

      header('location: ./view/compte.php');

      return BDD::insert($sql, $add);
    }

    public function findOneByEmail($email){
      $sql = 'SELECT * FROM users WHERE email = :email';
      $arr = array(
        'email' => $email
      );

      return current(BDD::select($sql, $arr, 'userManager'));
    }

    public function findOneById($id){
      $sql = 'SELECT * FROM users WHERE id = :id';
      $arr = array(
        'id' => $id
      );

      return current(BDD::select($sql, $arr, 'userManager'));
    }
  }
?>
