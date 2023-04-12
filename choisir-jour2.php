<?php

declare(strict_types = 1);

$forme = '';
$jours = [1 => 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
foreach($jours AS $id => $jour){
    $forme.= <<<HTML
    <label>
        <input name="jour" type="radio" value="{$id}">
        {$jour}
    </label>
    <br>
 HTML;
}

$titre = "Les jours de la semaine";
echo <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
    <style>
        td{
            text-align: right;
        }
    </style>
  </head>
  <body>
    <h1>{$titre}</h1>
    <form name="jour" method="POST" action="jour.php"   
        {$forme}
        <button type="submit">Choisir ce jour</button>
    </form>
    </body>
</html>
HTML;