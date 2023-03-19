<?php
    require 'connexion.php';
    if(isset($_POST['ajouter'])){
        if(!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['nombre']) && !empty($_POST['pu']) && !empty($_POST['date']) && !empty($_POST['prix'])){
            $nom=htmlspecialchars($_POST['nom']);
            $description=htmlspecialchars($_POST['description']);
            $nombre=htmlspecialchars($_POST['nombre']);
            $pu=htmlspecialchars($_POST['pu']);
            $date=htmlspecialchars($_POST['date']);
            $prix=htmlspecialchars($_POST['prix']);

            $requete= "INSERT INTO `vente` (nom, description, nombre, pu, date, prix)
            VALUES ('$nom', '$description', '$nombre', '$pu', '$date', '$prix')";
            $insert=$connexion->query($requete);
            require 'affichestock.php';
        }
    }
?>