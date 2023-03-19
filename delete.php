<?php
    require 'connexion.php';
    $id=$_GET['id'];
    $requete="DELETE FROM `vente` WHERE `vente`.`id` = '$id'";
    $delete=$connexion->query($requete);
    header('Location:affichestock.php');
    //require 'affichestock.php';
?>