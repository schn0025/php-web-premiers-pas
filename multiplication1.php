<?php

declare(strict_types = 1);

$titre = 'Table de multiplication de 12';
$rep = <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
  </head>
  <body>
    <h1>{$titre}</h1>
HTML;

for($i = 0; $i<11; $i++){
    $result = $i*12;
    $rep .= "<div> $i &times; 12 = $result</div>";
}
$rep .= <<<HTML
    </body>
</html>
HTML;

echo $rep;