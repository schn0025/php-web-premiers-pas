<?php

declare(strict_types = 1);

$valeur = 42;

if(isset($_GET['n']) && !empty($valeur)) {
    $valeur = $_GET['n'];
}

$tableCalculer = '';
for ($i = 0; $i < 11; $i++) {
    $result = $i * $valeur;
    $tableCalculer .= <<<HTML
    <tr> 
        <td >$i</td> 
        <td> &times; {$valeur} = </td>
        <td>{$result}</td>
    </tr>
HTML;
}

$titre = 'Table de multiplication de '.$valeur;

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
    <table>
    {$tableCalculer}
    </table>
    </body>
</html>
HTML;