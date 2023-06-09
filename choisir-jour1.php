<?php

declare(strict_types = 1);

$forme = '';
$jours = [1 => 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
foreach($jours AS $id => $jour){
    $forme.= "<option value=\"$id\">$jour</option>";
}

$titre = "Les jours de la semaine";
echo <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
  </head>
  <body>
    <h1>{$titre}</h1>
        <form name="jour" method="POST" action="jour.php">
            <label>
            <select name="jour" required>
            <option value="choi" selected>Choisissez...</option>
                {$forme}
            </select>
            </label>
            <button type="submit">Choisir ce jour</button>
        </form>
    </body>
</html>
HTML;