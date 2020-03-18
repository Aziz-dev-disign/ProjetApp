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
        <!-- <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js"> -->
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css"/>
        <link rel="icon" href="../images/logosimplon.png">
        <link rel="stylesheet" href="../font/css/font-awesome.min.css"/>
    </head>
    <body>
        <p>
            <?php include ("menu.php"); ?>
        </p>
        <table border="1">
            <thead>
                <tr>
                    <th>Matricule</th>                        
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Ville d'origine</th>
                    <th>Formation</th>
                    <th>Etablissement précedent</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Genre</th>
                    <th>Tuteur</th>                    
                </tr>
            </thead>            
            <tbody>
            <?php
            // --------------------------------
            // La requête (exemple) : tous les "objets", classés par "id".
            $requete = $connexion->query("SELECT * FROM apprenants ORDER BY nom, prenom"); 
            // --------------------------------
            // affichage
            while ($ligne=$requete->fetch()) // on récupère une ligne à la fois 
            {
                if ($ligne['idTuteur']){
                    $reqTuteur= $connexion->query("SELECT nom,prenom FROM tuteur WHERE idTuteur=$ligne[idTuteur]");
                    while($tut= $reqTuteur->fetch()){
                        $nom = $tut['nom'];
                        $prenom =$tut['prenom'];
                        }
                }
                    // DONNÉES À AFFICHER dans chaque cellule de la ligne
                    ?>
                    <tr tabindex="0">
                        <td><i class="fa fa-chevron-down derouler" id="<?php echo $ligne['idApprenant']; ?>"  >  </i><?php echo $ligne['idApprenant']; ?></td>
                        <td><?php echo $ligne['nom']; ?></td>
                        <td><?php echo $ligne['prenom']; ?></td>
                        <td><?php echo $ligne['dateNaissance']; ?></td>
                        <td><?php echo $ligne['villeDorigine']; ?></td>
                        <td><?php echo $ligne['formation']; ?></td>
                        <td><?php echo $ligne['etablissementPrecedent']; ?></td>
                        <td><?php echo $ligne['telephone']; ?></td>
                        <td><?php echo $ligne['email']; ?></td>
                        <td><?php echo $ligne['genre']; ?></td>
                        <td><?php echo $GLOBALS['nom']."   ".$GLOBALS['prenom'];?></td>                        
                    </tr>
                <?php
            } 
            // end while
                ?>
                </tbody>
                </table>
 <!-- affichage des infos d'un apprenant avec AJAX -->
                <div id="infoapprenant printlist"></div>            
                <script src="jquery.min.js"></script> 
                <script>
                    var idTut="<?php echo $ligne['idApprenant']; ?>";
                    $(function() {
                        $('.derouler').on("click",function(e) {
                            var test=$(e.target);
                        $.get('apprenant.php',{id:test.attr('id')}, function(data) {
                            $('#infoapprenant').html(data);
                            });
                        });
                    });
                </script> 
                <p><?php include ("footer.php"); ?></p>
    </body>
</html>
        