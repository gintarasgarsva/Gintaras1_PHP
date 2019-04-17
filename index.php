<?php

$siukslines_turis = 80;
$siukslines_turis_avg_per_day = 15;
$max_kaupo_turis = rand(1, 100);
$dienu = $siukslines_turis % $siukslines_turis_avg_per_day;


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Uþduotis</title>
    </head>
    <body>
        <h1>Po <?php print "$dienu"; ?> dienu <?php print date('Y-m-d', strtotime("+$dienu days")); ?> pirk geliu ir sampano, jeigu nori, kad zmona pati isnestu siuksles.</h1>
    </body>
</html>
