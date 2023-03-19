<?php
    require 'connexion.php';
    $id=$_GET['id'];
    $requete="SELECT * FROM `vente` WHERE id=$id";
    $recupere=$connexion->query($requete);
    $tab=$recupere->fetch();
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" >
            <title>Modification</title>
        </head>
        <body>
            <!-- <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
                <source src="istockphoto-1167165524-640_adpp_is.mp4" type="video/mp4">
            </video> -->
            
            <div class="contenu">
                <div class="sous-contenu">
                    <h1>Enregistrement Numéro:<?php echo $id;?></h1>
                    <form action="edit.php" method="post" >

                        <input type="hidden" name="id" value="<?php echo $tab['id'];?>">
                        
                        <input type="text" name="nom"  value="<?php echo htmlspecialchars($tab['nom']);?>"  required="required">
        
                        <input type="text" name="description" placeholder="Entrez une description du client" value="<?php echo htmlspecialchars($tab['description']);?>" id="description" required="required">
        
                        <input type="number" name="nombre" placeholder="Entrez le nombre de bassine" value="<?php echo htmlspecialchars($tab['nombre']);?>" id="nombre" required="required">

                        <input type="number" name="pu" placeholder="Entrez le prix unitaire" value="<?php echo htmlspecialchars($tab['pu']);?>" id="prix" required="required">
        
                        <input type="date" name="date" placeholder="Entrez la date du jour" value="<?php echo htmlspecialchars($tab['date']);?>" id="date" required="required">

                        <input type="number" name="prix" placeholder="Entrez le prix du client" value="<?php echo htmlspecialchars($tab['prix']);?>" id="prix" required="required">

                        <input type="submit" value="Modifier" id="ajouter" name="modifier" class="bouton">

                        <a href="affichestock.php" id="lien-index">Voir le stock</a>
                        
                    </form>
                </div>
            </div>
            
            <footer>
                        &copy; 2022 Copyright Mr-Top. All Rights Reseved
                        Designed by <a href="https://web.facebook.com/pierre.tohou.35"> MrTop </a>
            </footer>
        </body>
        </html>
    <?php
?>