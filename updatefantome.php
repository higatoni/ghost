<?php
    spl_autoload_register("monChargeur"); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

    function monChargeur($classe)
    {
      require $classe.".php"; // On inclut la classe correspondante au paramètre passé.
    }
    require_once "bdd.php";
 
    $ghost=new ghost(array("id"=>$_GET["id"],"nom"=>$_GET["nom"],"couleur"=>$_GET["couleur"],"velocite"=>$_GET["velocite"],"pv"=>$_GET["pv"]));
    $ghostManager = new GhostManager($db);
    $ghostManager->update($ghost);
    echo $ghost ->info();
    header("Location: index.php");

?>