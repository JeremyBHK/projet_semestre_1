<?php 
    class TravailController extends DefaultController{
        public function setTravail($post){
            $taff = new travailManager();
            $taff->setAdresse($post['adresse']);
            $taff->addTravail();
        }
    }
?>