<?php 
    class DomicileController extends DefaultController{
        public function setDomicile($post){
            $domicile = new domicileManager();
            $domicile->setAdresse($post['adresse']);
            $domicile->addDomicile();
        }
    }
?>