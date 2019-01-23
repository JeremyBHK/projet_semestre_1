<?php
class DefaultController{
  protected static function render($vue, $variables){
    extract($variables);

    ob_start();
    require_once 'src/view/'.$vue.'.php';
    $contenu = ob_get_clean();

    require_once 'src/view/base.php';
  }
}
?>
