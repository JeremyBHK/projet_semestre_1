<?php 
    class travailManager extends Travail{
        public function findOneById($id){
            $sql = 'SELECT * FROM travail WHERE id = :id';
            $arr = array(
              'id' => $id
            );
            
            return current(BDD::select($sql, $arr, 'voitureManager'));
        }

        public function addTravail(){
            $sql = 'INSERT INTO travail (adresse) VALUES (:adresse)';
            $add = array(
                'adresse' => $this->adresse
            );

            return BDD::insert($sql, $add);
        }
    }  
?>