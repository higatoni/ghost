<?php
    require_once "ghostv2.php";
    require_once "bdd.php";
    require_once "ghostmanager.php";
    $ghostManager = new GhostManager($db);
    $lesFantomes=$ghostManager->getAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <table>
        <a href="formfantome.php">Creer un fantome</a>
        <?php
        foreach ($lesFantomes as $key => $value) {
            echo "<tr><td>".$value->getNom()."</td><td>".$value->getCouleur()."</td><td>".$value->getVelocite()."</td><td>".$value->getPv()."</td><td><a href=\"formupdatefantome.php?id=".$value->getId()."\">modifier</a></td><td><a href=\"deletefantome.php?id=".$value->getId()."\">supprimer</a></td></tr>";
        }
        ?>
        </table>
    </body>
</html>