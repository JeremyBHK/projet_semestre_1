<?php

CONST host    = 'localhost';
CONST user    = 'root';
CONST pwd     = 'root';
CONST dbname  = 'projet_semestre_1';

$database = new PDO('mysql:host='.host.';dbname='.dbname, user, pwd);

$jsonSource = file_get_contents('https://opendata.paris.fr/api/records/1.0/search/?dataset=bornes-de-recharge-pour-vehicules-electriques&rows=1397&facet=adresse_cp&facet=adresse_ville&facet=reseau&facet=tarif_general&facet=tarif_autopartage&facet=paiement&facet=puissance_pdc_kw&facet=type_connecteur_pdc&facet=type_courant_pdc');
$jsonData = json_decode($jsonSource);

foreach ($jsonData->records as $record)
{
   if (isset($record->geometry))
   {
      $x = $record->geometry->coordinates[0]; // Latitude
      $y = $record->geometry->coordinates[1]; // Longitude

      $coordinates = $x.','.$y;

      if (isset($record->fields))
      {
         $adresse    = $record->fields->adresse;
         $codePostal = $record->fields->cp;
         $ville      = $record->fields->ville;
         $total      = $adresse.', '.$codePostal.', '.$ville;

         $query = $database->prepare("INSERT INTO bornes (position, adresse) VALUES (:position, :adresse)");
         $query->bindParam(':position', $coordinates);
         $query->bindParam(':adresse', $total);
         $query->execute();
      }
   }
}

?>