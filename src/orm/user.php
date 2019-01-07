<?php
  class User extends BDD{
    protected $id;
    protected $prenom;
    protected $nom;
    protected $email;
    protected $mdp;

    public function setId($id){
      $this->id = $id;
    }

    public function setPrenom($prenom){
      $this->prenom = $prenom;
    }

    public function setNom($nom){
      $this->nom = $nom;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public function setMdp($mdp){
      $this->mdp = md5($mdp);
    }

    public function getId(){
      return $this->id;
    }

    public function getPrenom(){
      return $this->prenom;
    }

    public function getNom(){
      return $this->nom;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getMdp(){
      return $this->mdp;
    }
  }
?>
