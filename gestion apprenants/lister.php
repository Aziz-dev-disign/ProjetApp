<?php 
    require('connexion.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion des Apprenants</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css"/>
        <link rel="icon" href="../images/logosimplon.png">
        <link rel="stylesheet" href="../font/css/font-awesome.min.css"/>
    </head>
    <body>
        <div>
        <?php include ("menu.php"); ?>
        <div class="col-md-12 mb-12 lister">
            <h4 class="titreliste">LISTE DES APPRENANTS</h4>
            <table class="table table-responsive table-bordered table-hover listetableau feuillebox">                
                <thead>
                    <tr>
                        <th scope="col">Selectionner</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Date de naissance</th>
                        <th scope="col">Ville d'origine</th>
                        <th scope="col">Formation</th>
                        <th scope="col">Etablissement précedent</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>                    
                        <th scope="col">Genre</th>
                        <th scope="col">Tuteur</th>
                    </tr>
                </thead>
                <form action="delete.php" method="POST">
                <tbody>
                    <?php
                    // --------------------------------
                    // La requête (exemple) : tous les "objets", classés par "id".
                    $requete = $connexion->query("SELECT * FROM apprenants ORDER BY idApprenant"); 
                    // --------------------------------
                    // affichage
                    $i=0;
                    while ($ligne=$requete->fetch())
                     // on récupère une ligne à la fois 
                    {
                        if ($ligne['idTuteur']){
                            $reqTuteur= $connexion->query("SELECT nom,prenom FROM tuteur WHERE idTuteur=$ligne[idTuteur]");
                            while($tut= $reqTuteur->fetch()){
                                $nom = $tut['nom'];
                                $prenom =$tut['prenom'];                    
                            }
                        }
                        $i++;
                            // DONNÉES À AFFICHER dans chaque cellule de la ligne
                            ?>
                                <?php echo '<tr class="lignetableau">' ?>
                                    <td><input type="checkbox" name="<?php echo $ligne['idApprenant']; ?>" value="<?php echo $ligne['idApprenant']; ?>" class="selectionner"></td>
                                    <td  scope="row"><?php echo $ligne['idApprenant'] ?></td>
                                    <td><?php echo $ligne['nom']; ?></td>
                                    <td><?php echo $ligne['prenom']; ?></td>
                                    <td><?php echo $ligne['dateNaissance']; ?></td>
                                    <td><?php echo $ligne['villeDorigine']; ?></td>
                                    <td><?php echo $ligne['formation']; ?></td>
                                    <td><?php echo $ligne['etablissementPrecedent']; ?></td>
                                    <td><?php echo $ligne['telephone']; ?></td>
                                    <td><?php echo $ligne['email']; ?></td>                            
                                    <td><?php echo $ligne['genre']; ?></td>
                                    <td><?php echo $GLOBALS['nom']." ".$GLOBALS['prenom'];?></td>
                                </tr>
                            <?php
                        } 
                        // end while
                    ?>
                </tbody>
            </table>
        
            <div class="row boutons">
                <button class="btn"><a href="../enregistrer.php" title="ajouter un apprenant"><img src="images/ajouter.png"></a></button>
                <button class="btn" title="supprimer un apprenant"><img src="images/supprimer.png"></button>
            </div>
        </div>
    </div>
    </form>
        <?php include ("footer.php"); ?>
        <script src="scripts.js"></script> 
    </body>
</html>
        