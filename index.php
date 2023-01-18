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
                <th> Ville</th>
                <th class=th2> Code Postaux </th>
            </tr>    
        </thead>
        <tbody>
            <?php
                foreach($tab as $info){
            ?>
                    <tr>
                        <td>
                            <?php echo $info["ville_nom"];?>
                        </td>
                        <td>
                        <?php echo $info["ville_code_postal"];?>
                        </td>
                        <td>
                            <a href="formtp3.php?ville_id=<?php echo $info["ville_id"];?>" title="aller à update.php"> <image src="../modifier.png" width="20" height="20"></a>  
                        </td>
                        <td>
                            <a href="tp4.php?ville_id=<?php echo $info["ville_id"];?>" title="aller à delete.php"> <image src="../delete.jfif" width="20" height="20"></a>  
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>