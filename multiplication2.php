<?php

declare(strict_types = 1);

$table12 = '';
for($i = 0; $i<11; $i++) {
    $result = $i * 12;
    $table12 .= <<<HTML
    <tr> 
        <td >$i</td> 
        <td> &times; 12 = </td>
        <td>$result</td>
    </tr>
HTML;
}

$titre = 'Table de multiplication de 12';

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
    {$table12}
    </table>
    </body>
</html>
HTML;

