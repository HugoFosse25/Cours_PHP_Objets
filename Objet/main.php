<html>
    <head>
    <title>Objet</title>
    </head>
    <body>
        <?php
            include 'Personnages.php';
            $Perso1 = new Personnages("Hugo");
            $Perso1->PresenteToi();
        ?>
    </body>
</html>