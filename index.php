<?php

$var1 = rand(1,100);
$var2 = rand(101,200);
$var3 = rand(201,300);
$var4 = rand(301,400);
      
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php print 'Kometarai' ;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="body1">
            <h1>Skolos skaiciuokle</h1>
            <h3>Jei paemei <?php print " $var1 " ;?>jievru</h3>
            <h3>su dviem kabnciais grazinsi<?php print " $var3" ;?></h3>
            <h3>su vienu kabanciu grazinsi<?php print " $var2" ?></h3>
        </div>
    </body>
</html>
