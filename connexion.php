<?php
    try{
        $connexion = new PDO('mysql:host=localhost;dbname=commence', 'root','');
        //echo "Connexion réussir";
    }catch(PDOException $e){
        die('Erreur : '. $e->getMessage());
    }
?>