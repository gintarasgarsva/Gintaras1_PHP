<?php

$grizai_velai = rand(0, 1) ;
$grizai_isgeres = rand(0, 1) ;

if ($grizai_velai && $grizai_isgeres) {
    $zinute = 'Miegosi ant sofos, nes grizai velai ir isgeres.';
} elseif (!$grizai_velai && !$grizai_isgeres) {
    $zinute = 'Nemiegosi ant sofos, nes nieko nepadarei.';
} elseif ($grizai_velai && !$grizai_isgeres) {
    $zinute = 'Nemiegosi ant sofos nes negryzai isgeres.';
} elseif (!$grizai_velai && $grizai_isgeres) {
    $zinute = 'Nemiegosi ant sofos nes negryzai velai.';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Uþduotis</title>
    </head>
    <body>
        <h1>
            <?php print $zinute ;?>
        </h1>
    </body>
</html>
