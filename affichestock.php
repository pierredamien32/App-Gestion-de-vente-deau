<?php
    require 'connexion.php';
    $requete="SELECT * FROM `vente` ORDER BY id DESC ";
    $recupere=$connexion->query($requete);
    $tab=$recupere->fetchAll();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
        <title>Stock</title>
    </head>
    <body >
        <a href="index.php" id="lien-stock">Ajouter un produit</a>
        <table class="tableau-style">
            <thead>
                <tr>
                    <th>Vente numéro</th>
                    <th>Nom du vendeur</th>
                    <th>Description du client</th>
                    <th>Nombre de tour effectuer</th>
                    <th>Le prix unitaire</th>
                    <th>Date de vente</th>
                    <th>Prix payer par le client</th>
                    <th colspan="3">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($tab as $element){
                    ?>
                    <tr>
                        <td><?=$element['id'];?></td>
                        <td><?=$element['nom'];?></td>
                        <td><?=$element['description'];?></td>
                        <td><?=$element['nombre'];?></td>
                        <td><?=$element['pu'];?></td>
                        <td><?=$element['date'];?></td>
                        <td><?=$element['prix'];?></td>
                        <td><a href="modification.php?id=<?=$element['id'];?>">Modifier</a></td>
                        <td><a href="delete.php?id=<?=$element['id'];?>" onClick="return confirmation();" id="supprimer">Supprimer</a></td>
                        <td><a href="voirplus.php?id=<?=$element['id'];?>" >Voir plus</a></td>
                    </tr>
                    <?php
                }
                
                ?>
            </tbody>
        </table>
        <script src="app.js"></script>
    </body>
    </html>
    <?php
    

?>