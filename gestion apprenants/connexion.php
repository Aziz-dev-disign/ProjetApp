<?php
    try{
        $connexion = new PDO ('mysql:host=localhost; dbname=gestion','root','');
    }
    catch(Exception $e){
        die('Erreur'.$e->getMessage());
    }
?>