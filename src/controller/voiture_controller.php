<?php 
    class VoitureController extends DefaultController{
        public function setCar($post){
            $car = new voitureManager();
            $car->setMarque($post['marque']);
            $car->setModele($post['modele']);
            $car->addCar();
        }
    }
?>