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
        $bubu = new Ghost(array("nom" => "bubu", "couleur" => "bleu", "velocite" => 2,"pv" => 10));
        echo $bubu ->info();
        
        $GhostManager = new GhostManager($db);
        $GhostManager->add($bubu);
    ?>
</body>
</html>