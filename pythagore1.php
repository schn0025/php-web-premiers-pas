<?php

declare(strict_types = 1);

const IDMAX = 20;
$table = '';
$ligne1 = <<<HTML
<tr>
    <td>&times;</td>
HTML;

for($col=0; $col <= IDMAX; $col++){
    $ligne1 .= "<td>$col</td>";
    $table .= "<tr><td>$col</td>";
    for($ligne=0; $ligne <= IDMAX; $ligne++){
        $calc = $col*$ligne;
        $table .= "<td>$calc</td>";
    }
    $table .= '</td>';
}
$ligne1 .= '</tr>' . $table;


$titre = 'Table de Pytagore';
echo <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
    <style>
        td{
            border: 2px;
            text-align: right;
            border-style: solid;
            border-top: 0;
            border-left: 0;
            padding: 5px;
        }
        table{
            border-collapse: collapse;
        }
    </style>
  </head>
  <body>
    <h1>{$titre}</h1>
        <table>
            {$ligne1}
        </table>
    </body>
</html>
HTML;