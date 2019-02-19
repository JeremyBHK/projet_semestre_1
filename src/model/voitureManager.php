<?php 
    class voitureManager extends Voiture{
        public function findOneById($id){
            $sql = 'SELECT * FROM voitures WHERE id = :id';
            $arr = array(
              'id' => $id
            );
      
            return current(BDD::select($sql, $arr, 'voitureManager'));
        }

        public function addCar(){
            $sql = 'INSERT INTO voitures (marque, modele) VALUES (:marque, :modele)';
            $add = array(
                'marque' => $this->marque,
                'modele' => $this->modele
            );

            return BDD::insert($sql, $add);
        }
    }
    
?>