    <!-- ----------------------test de la carte bootstrap--------------------------- -->
    <!-- CONTENU LISTER AVEC INFO PERSO -->
<?php
     require('connexion.php');
     $resultat=$connexion->prepare('SELECT idApprenant, apprenants.nom, apprenants.prenom, dateNaissance, 
     villeDorigine,formation, etablissementPrecedent, apprenants.telephone, email, genre, photo, 
     tuteur.nom as nomtuteur, tuteur.prenom as prenomtuteur
     FROM apprenants
    INNER JOIN tuteur on apprenants.idTuteur=tuteur.idTuteur where apprenants.idApprenant= ?');
    $resultat->execute(array($_GET['id']));
    
    $ligne=$resultat->fetch();
    // ->fetch(); on récupère une ligne à la fois 
?>
    <div class="media">
        <div class="media-body fond feuillebox1">
    <h5 class="mt-0 mb-1"></h5>
    <span class="infoperso">Matricule : </span><?php echo $ligne['idApprenant']; ?><br>
             <span class="infoperso">Nom : </span><?php echo $ligne['nom']; ?><br>
             <span class="infoperso">Prénom : </span><?php echo $ligne['prenom']; ?><br>
             <span class="infoperso">Date de naissance : </span><?php echo $ligne['dateNaissance']; ?><br>
             <span class="infoperso">Ville d'origine : </span><?php echo $ligne['villeDorigine']; ?><br>
             <span class="infoperso">Formation : </span><?php echo $ligne['formation']; ?><br>
             <span class="infoperso">Etablissement précédent : </span> <?php echo $ligne['etablissementPrecedent']; ?><br>
             <span class="infoperso">Téléphone : </span><?php echo $ligne['telephone']; ?><br>
             <span class="infoperso">Email : </span><?php echo $ligne['email']; ?> <br>
             <span class="infoperso">Genre : </span><?php echo $ligne['genre']; ?> <br>
             <span class="infoperso">Tuteur : </span><?php echo $ligne['nomtuteur']."   ".$ligne['prenomtuteur'];?><br> 
        </div>
        <img src="<?php echo $ligne['photo']; ?>" alt="photo d\'un apprenant" class="ml-3 taille feuillebox1" alt="photo d\'un apprenant">
    </div>