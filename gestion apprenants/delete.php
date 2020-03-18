<?php
require('connexion.php');


foreach ($_POST as $key => $value) {
    $sql='DELETE FROM apprenants WHERE idApprenant = ?';
    $req = $connexion ->prepare($sql);
    $sql = $req->execute([$value]);
    
}
header('location:lister.php');
?>