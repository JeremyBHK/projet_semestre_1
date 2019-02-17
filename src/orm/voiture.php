<?php 
    class Voiture extends BDD{
        protected $id;
        protected $marque;
        protected $modele;

        public function setId($id){
            $this->id = $id;
        }

        public function setMarque($marque){
            $this->marque = $marque;
        }

        public function setModele($modele){
            $this->modele = $modele;
        }

        public function getId(){
            return $this->id;
        }

        public function getMarque(){
            return $this->marque;
        }

        public function getModele(){
            return $this->modele;
        }
    }
    
?>