<?php

declare(strict_types = 1);
$jours = [1 => 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
if(isset($_POST['jour']) &&  ctype_digit($_POST['jour']) && 1 <= $_POST['jour'] && $_POST['jour'] <= 7 && !empty($_POST['jour'])) {
    $jour = $_POST['jour'];
    $msg = "Votre choix s'est porté sur $jours[$jour]";
}
else{
    $msg = " Votre choix n'est pas très clair...";
}
echo <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>jour</title>
    <style>
        td{
            text-align: right;
        }
    </style>
  </head>
  <body>
    <h1>Les joures de la semaine</h1>
    {$msg}
    </body>
</html>
HTML;