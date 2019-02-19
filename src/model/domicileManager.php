<?php 
    class domicileManager extends Domicile{
        public function findOneById($id){
            $sql = 'SELECT * FROM domicile WHERE id = :id';
            $arr = array(
                'id' => $id
            );

            return current(BDD::select($sql, $arr, 'domicileManager'));
        }

        public function addDomicile(){
            $sql = 'INSERT INTO domicile (adresse) VALUES (:adresse)';
            $add = array(
                'adresse' => $this->adresse
            );
 
            return BDD::insert($sql, $add);
        }
    }
?>