<?php
  class BDD{
    CONST host = 'localhost';
    CONST user = 'root';
    CONST pwd = 'root';
    CONST dbname = 'projet_semestre_1';

    public static $bdd = false;

    public function __construct(){
      try {
        if (self::$bdd == false) {
          echo "initialisation";
          self::$bdd = new PDO('mysql:host='.self::host.";dbname=".self::dbname, self::user, self::pwd);
          echo 'ok';
        }else{
          echo "connexion existante";
        }
      } catch (\Exception $e) {
        die($e->getMessage());
      }
    }

    public static function prepareExecute($sql, $params){
      $req = self::$bdd->prepare($sql);
      $req->execute($params);

      return $req->rowCount();
    }

    public static function select($sql, $params, $manager){
      $select = self::$bdd->prepare($sql);
      $select->execute($params);

      return $select->fetchAll(PDO::FETCH_CLASS, $manager);
    }

    public static function insert($sql, $params){
      return self::prepareExecute($sql, $params);
    }

    public static function up($sql, $params){
      return self::prepareExecute($sql, $params);
    }

    public static function del($sql, $params){
      return self::prepareExecute($sql, $params);
    }
  }
?>
