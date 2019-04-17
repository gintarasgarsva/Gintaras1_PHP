<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php print 'Kometarai' ; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color: rgb(<?php print rand(000, 255) . ',' . rand(000, 255) . ',' . rand(000, 255) ; ?>)">
        <img style="width: 400px; margin-left: 400px; margin-top: 150px;" src="img_<?php $random = rand(1,6); print $random; ?>.png"/>
    </body>
</html>
