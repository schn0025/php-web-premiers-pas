<?php

declare(strict_types = 1);

[1 => 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

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
    <label>
        <select name="jours">
            {$forme}
        </select>
    </label>
    </body>
</html>
HTML;