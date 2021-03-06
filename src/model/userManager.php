<?php
  class userManager extends User{
    public function userExist($email){
      $existe = self::findOneByEmail($email);
      return $existe;
    }

    public function inscription(){
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

      header('location: ?p=onboarding');

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

    public function delete(){
      $sql = 'DELETE FROM users WHERE id = :id';
      $arr = array(
        'id' => $this->id
      );

      return BDD::del($sql, $arr);
    }

    public function update(){
      $sql = 'UPDATE users SET prenom = :prenom, nom = :nom, email = :email, mdp = :mdp WHERE id = :id';
      $arr = array(
        'id' => $this->id,
        'prenom' => $this->prenom,
        'nom' => $this->nom,
        'email' => $this->email,
        'mdp' => $this->mdp
      );

      return BDD::up($sql, $arr);
    }

    public function connexion(){
      $sql = 'SELECT * FROM users WHERE email = :email AND mdp = :mdp';
      $arr = array(
        'email' => $this->email,
        'mdp' => $this->mdp
      );

      return BDD::select($sql, $arr, 'userManager');
    }

    public function ifAccountExist(){
      $account_exist = self::connexion();

      if (!empty($account_exist)) {
        $_SESSION['email'] = $this->email;
        $_SESSION['mdp'] = $this->mdp;

        header('location: ?p=home');
      }else{
        echo 'wrong mdp or email';
      }
    }
  }
?>
