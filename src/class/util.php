<?php
  class Util{
    public static function verifEmail($email){
      if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        return true;
      }else{
        return false;
      }
    }
  }
?>
