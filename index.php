<?php
    require_once "ghostv2.php";
    require_once "bdd.php";
    require_once "ghostmanager.php";

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
        <thead>
            <tr>
                <th> Nom</th>
                <th> Couleur </th>
                <th> Velocite </th>
                <th> Pv </th>
            </tr>    
        </thead>
        <tbody>
            <?php
                foreach($tab as $info){
            ?>
                    <tr>
                        <td>
                            <?php echo $info["nom"];?>
                        </td>
                        <td>
                        <?php echo $info["couleur"];?>
                        </td>
                        <td>
                        <?php echo $info["velocite"];?>
                        </td>
                        <td>
                        <?php echo $info["pv"];?>
                        </td>
                        <td>
                            <a href="#?id=<?php echo $info["id"];?>" title="aller à update.php"> <image src="../modifier.png" width="20" height="20"></a>  
                        </td>
                        <td>
                            <a href="#?ville_id=<?php echo $info["id"];?>" title="aller à delete.php"> <image src="../delete.jfif" width="20" height="20"></a>  
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>