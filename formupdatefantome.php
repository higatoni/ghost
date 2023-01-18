<?php
     spl_autoload_register("monChargeur"); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

     function monChargeur($classe)
     {
       require $classe.".php"; // On inclut la classe correspondante au paramètre passé.
     }
     require_once "bdd.php";
    $id = $_GET["id"];
   
    $ghostManager = new GhostManager($db);
    $ghost=$ghostManager->getId($id);
   
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un fantome</title>
</head>
<body>
    <form action="updatefantome.php" method="get">
        <label>id</label>
        <input type="hiden" name="id" value="<?php
        echo $id;
        ?>"><br>
        <label>Nom</label>
        <input type="text" name="nom" value="<?php
        echo $ghost-> getNom();
        ?>"><br>
        <label>Couleur</label>
        <input type="text" name="couleur" value="<?php
        echo $ghost-> getCouleur();
        ?>"><br>
        <label>Velocite</label>
        <input type="text" name="velocite" value="<?php
        echo $ghost-> getVelocite();
        ?>"><br>
        <label>Pv</label>
        <input type="text" name="pv" value="<?php
        echo $ghost-> getPv();
        ?>"><br>
        <input type="submit" value="valider">
    </form>
</body>
</html>