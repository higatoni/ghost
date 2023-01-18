<?php
    require_once "ghostv2.php";
    require_once "bdd.php";
    require_once "ghostmanager.php";
 
    $ghost=new ghost(array("id"=>$_GET["id"],"nom"=>$_GET["nom"],"id"=>$_GET["couleur"],"id"=>$_GET["velocite"],"id"=>$_GET["pv"]));
    $ghostManager = new GhostManager($db);
    $ghostManager->update($ghost);
    echo $ghost ->info();
    

?>