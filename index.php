<?php
    spl_autoload_register("monChargeur"); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

    function monChargeur($classe)
    {
      require $classe.".php"; // On inclut la classe correspondante au paramètre passé.
    }
    require_once "bdd.php";
    
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
        <a href="creerfantome.php">Creer un fantome</a>
        <?php
        foreach ($lesFantomes as $key => $value) {
            echo "<tr><td>".$value->getNom()."</td><td>".$value->getCouleur()."</td><td>".$value->getVelocite()."</td><td>".$value->getPv()."</td><td><a href=\"formupdatefantome.php?id=".$value->getId()."\">modifier</a></td><td><a href=\"deletefantome.php?id=".$value->getId()."\">supprimer</a></td></tr>";
        }
        ?>
        </table>
    </body>
</html>