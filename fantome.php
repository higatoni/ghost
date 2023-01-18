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
        require_once "ghostv2.php";
        require_once "bdd.php";
        require_once "ghostmanager.php";
        $ghost = new Ghost(array("nom" => $_GET["nom"], "couleur" => $_GET["couleur"], "velocite" => $_GET["velocite"],"pv" => $_GET["pv"]));
        echo $ghost ->info();
        
        $GhostManager = new GhostManager($db);
        $GhostManager->add($ghost);
    ?>
</body>
</html>