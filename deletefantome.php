<?php
    require_once "ghostv2.php";
    require_once "bdd.php";
    require_once "ghostmanager.php";
 
    $ghost=new ghost(array("id"=>$_GET["id"],));
    $ghostManager = new GhostManager($db);
    $ghostManager->delete($ghost);
    header("Location: index.php");
?>