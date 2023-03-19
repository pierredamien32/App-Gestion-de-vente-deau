<?php
    require 'connexion.php';
    $id=$_GET['id'];
    $requete="SELECT * FROM `vente` WHERE id='$id'";
    $recupere=$connexion->query($requete);
    $tab=$recupere->fetch();
    // echo '<pre>';
    // print_r($tab);
    // echo '</pre>';
    $result=$tab['nombre'] * $tab['pu'];
    $reste=$tab['prix']-$result;
    ?>

        <link rel="stylesheet" href="style.css">
        <body class="body-facture">
            <div class="carte">
                            <div class="entete">
                                Reliquat du client Numéro: <b><?php echo $tab['id'];?></b>
                            </div>
                            <hr>
                            <div class="corp">
                                
                                <div class="info">
                                    <p>Nom du vendeur: <b><?php echo $tab['nom'];?></b></p>
                                    <p>Description du client: <b><?php echo $tab['description'];?></b></p>
                                    <p>Prix remis par le client: <b><?php echo $tab['prix'].' FCFA';?></b></p>
                                    <p>Nombre de bassine pris par le cilent: <b><?php echo $tab['nombre'];?></b></p>
                                    <p>Net a payer: <b><?php echo $result.' FCFA';?></b></p>
                                    <?php if($reste >= 0){ echo "<p>Monnaie à remettre au client: <b> ".$reste." FCFA</b></p>";}else{echo "<p>Ce que le client nous doit: <b> ".((-1)*$reste)." FCFA</b></p>";} ?>
                                </div>
                            </div>
                            <hr>
                            <div class="footer">
                                <p>&copy; Copyright <span>Mr-Top.</span> All Rights Reseved</p>
                            </div>
            </div>
                <div class="lien-carte">
                    <a href="index.php">Ajouter une nouvelle vente</a> ou <a href="affichestock.php">Revenir sur les enregistrements</a>
                </div>
        </body>
    <?php

?>