<?php
    require 'connexion.php';
    
    if(isset($_POST['modifier'])){
        if(!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['nombre']) && !empty($_POST['pu']) && !empty($_POST['date']) && !empty($_POST['prix'])){
            $id= htmlspecialchars($_POST['id']);
            $nom=htmlspecialchars($_POST['nom']);
            $description=htmlspecialchars($_POST['description']);
            $nombre=htmlspecialchars($_POST['nombre']);
            $pu=htmlspecialchars($_POST['pu']);
            $date=htmlspecialchars($_POST['date']);
            $prix=htmlspecialchars($_POST['prix']);
            $requete= "UPDATE `vente` SET `nom` = '$nom', `description` = '$description', 
            `nombre` = '$nombre', `pu` = '$pu', `date` = '$date', `prix` = '$prix' 
            WHERE `vente`.`id` = '$id'";
            $edit=$connexion->query($requete);
            $edit->execute();
            require 'affichestock.php';
        }
        
    }
?>