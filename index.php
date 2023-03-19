<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Enregistrement D'une vente d'eau</title>
</head>
<body>
    <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="istockphoto-1167165524-640_adpp_is.mp4" type="video/mp4">
    </video>
    <div class="contenu">
        <div class="sous-contenu">
            <h1>Ajout d'une vente</h1>
            <form action="insertion.php" method="post" >

                <input type="hidden" name="id">
                
                <input type="text" name="nom" placeholder="Entrez votre nom et prenom" id="nom" required="required">
  
                <input type="text" name="description" placeholder="Entrez une description du client" id="description" required="required">
   
                <input type="number" name="nombre" placeholder="Entrez le nombre de bassine" id="nombre" required="required">

                <input type="number" name="pu" placeholder="Entrez le prix unitaire" id="prix" required="required">
 
                <input type="date" name="date" placeholder="Entrez la date du jour" id="date" required="required">

                <input type="number" name="prix" placeholder="Entrez le prix du client" id="prix" required="required">

                <input type="submit" value="Ajouter" id="ajouter" name="ajouter" class="bouton">

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