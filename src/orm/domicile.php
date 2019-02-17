<?php
    class Domicile extends BDD{
        protected $id;
        protected $adresse;
        
        public function setId($id){
            $this->id = $id;
        }

        public function setAdresse($adresse){
            $this->adresse = $adresse;
        }

        public function getId(){
            return $this->id;
        }

        public function getAdresse(){
            return $this->adresse;
        }
    }
    
?>