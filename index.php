<?php include "Pokemon.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charget="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="PumpkinSpiceNyan.gif" type="image/x-icon">
    <title>Poo Exo</title>
</head>
<body>
    <p>
        <?php 
            // $pokemon=new Pokemon("nom",((atk+atksp+spd/2)),"type",hp+def+defsp)

            // GEN1
            $salameche= new Pokemon("Salamèche",(52+60)/2,"Feu",39+43+50); 
            $carapuce= new Pokemon("Carapuce",(48+50)/2,"Eau",44+65+64);
            $bulbizarre= new Pokemon("Bulbizarre",(49+65)/2,"Plante",45+49+65);

            // GEN5
            $gruikui = new Pokemon("Gruikui",(63+45)/2,"Feu",65+45+45);
            $moustillon = new Pokemon("Moustillon",(55+63)/2,"Eau",55+45+45);
            $vipelierre =new Pokemon("Vipélierre",(45+45)/2,"Plante",45+55+55);

            echo $salameche->Pokedex();
            echo $carapuce->Pokedex();
            echo $bulbizarre->Pokedex();
            echo $gruikui->Pokedex();
            echo $moustillon->Pokedex();
            echo $vipelierre->Pokedex();

            $vipelierre->battle($carapuce);


        ?>
    </p>











    
<!-- 
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░░░░░░░░
░░░░░░░░▄▀░░░░░░░░░░░░▄░░░░░░░▀▄░░░░░░░
░░░░░░░░█░░▄░░░░▄░░░░░░░░░░░░░░█░░░░░░░
░░░░░░░░█░░░░░░░░░░░░▄█▄▄░░▄░░░█░▄▄▄░░░
░▄▄▄▄▄░░█░░░░░░▀░░░░▀█░░▀▄░░░░░█▀▀░██░░
░██▄▀██▄█░░░▄░░░░░░░██░░░░▀▀▀▀▀░░░░██░░
░░▀██▄▀██░░░░░░░░▀░██▀░░░░░░░░░░░░░▀██░
░░░░▀████░▀░░░░▄░░░██░░░▄█░░░░▄░▄█░░██░
░░░░░░░▀█░░░░▄░░░░░██░░░░▄░░░▄░░▄░░░██░
░░░░░░░▄█▄░░░░░░░░░░░▀▄░░▀▀▀▀▀▀▀▀░░▄▀░░
░░░░░░█▀▀█████████▀▀▀▀████████████▀░░░░
░░░░░░████▀░░███▀░░░░░░▀███░░▀██▀░░░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 -->
</body>
</html>