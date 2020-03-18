<?php
session_start();
require('connexion.php');

//reception des données
$nomApprenant=$_POST['nom'];
$prenomApprenant=$_POST['prenom'];
$datenaissApprenant=$_POST['age'];
$villeApprenant=$_POST['ville'];
$formationApprenant=$_POST['formation'];
$etabApprenant=$_POST['etablissement'];
$telApprenant=$_POST['telephone'];
$mailApprenant=$_POST['email'];
$genreApprenant=$_POST['genre'];
$photoApprenant=$_POST['photo'];

$nomTuteur=$_POST['nomTuteur'];
$prenomTuteur=$_POST['prenomTuteur'];
$profTuteur=$_POST['profession'];
$telTuteur=$_POST['telephoneTuteur'];

$insert=$connexion->prepare ('INSERT INTO tuteur(nom, prenom,profession, telephone) value(?,?,?,?)');
$insert->execute (array($nomTuteur,$prenomTuteur,$profTuteur,$telTuteur));

$insert=$connexion->prepare ('INSERT INTO apprenants(idTuteur, nom, prenom, dateNaissance, villeDorigine, formation, etablissementPrecedent, telephone, email,genre, photo) value(LAST_INSERT_ID(),?,?,?,?,?,?,?,?,?,?)');
$insert->execute (array($nomApprenant,$prenomApprenant,$datenaissApprenant,$villeApprenant,$formationApprenant,$etabApprenant,$telApprenant,$mailApprenant,$genreApprenant,$photoApprenant));

header('location:enregistrer.php');
?>