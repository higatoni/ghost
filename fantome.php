<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        spl_autoload_register("monChargeur"); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

        function monChargeur($classe)
        {
          require $classe.".php"; // On inclut la classe correspondante au paramètre passé.
        }
        require_once "bdd.php";
        $ghost = new Ghost(array("nom" => $_GET["nom"], "couleur" => $_GET["couleur"], "velocite" => $_GET["velocite"],"pv" => $_GET["pv"]));
        echo $ghost ->info();
        
        $GhostManager = new GhostManager($db);
        $GhostManager->add($ghost);
        
    ?>
    <a href="index.php">retour à l'accueil</a>
</body>
</html>