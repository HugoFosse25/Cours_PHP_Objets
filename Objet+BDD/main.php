<html>
    <head>
    <title>Objet</title>
    </head>
    <body>
        <?php
            include 'Personnage.php';
            include 'Magicien.php';
            $pdo = new PDO('mysql:host=localhost;dbname=Personnages', 'root', 'root');
            $Perso1 = new Personnage(1 ,$pdo);
            $Mage1 = new Magicien(2 ,$pdo);
            $Mage2 = new Magicien(3 ,$pdo);
            echo $Perso1->presenteToi();
        ?>
        <p></p>
        <?php
            echo $Mage1->presenteToi();
            echo $Mage1->lancerSort();
        ?>
        <p></p>
        <?php
            echo $Mage2->presenteToi();
            echo $Mage2->lancerSort();
        ?>
    </body>
</html>