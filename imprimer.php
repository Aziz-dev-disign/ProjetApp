<!DOCTYPE html>
<html>
    <p><?php include('header.php'); ?>
    <p><?php include('menu.php'); ?>    
    <body>        
        <p><?php include('connexion.php'); ?></p>
        <h4 class="listeimpression">LISTE DES APPRENANTS</h4>
        <table border="1" class="impression">
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
                    $requete = $connexion->query("SELECT * FROM apprenants ORDER BY nom, prenom");
                    while ($ligne=$requete->fetch()) // on récupère une ligne à la fois 
                    {
                        if ($ligne['idTuteur']){
                            $reqTuteur= $connexion->query("SELECT nom,prenom FROM tuteur WHERE idTuteur=$ligne[idTuteur]");
                            while($tut= $reqTuteur->fetch()){
                                $nom = $tut['nom'];
                                $prenom =$tut['prenom'];
                                }
                        }
                ?>
                <tr>
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
        <button class="printbutton" onclick="window.print()">IMPRIMER&nbsp&nbsp<i class="fa fa-print fa-2x"></i></button>
        <!-- affichage des infos d'un apprenant avec AJAX -->
        <div id="infoprint"></div>
        <script src="jquery.min.js"></script> 
            <script>
                var idTut="<?php echo $ligne['idApprenant']; ?>";
                $(function() {
                    $('.derouler').on("click",function(e) {
                        var test=$(e.target);
                    $.get('imprimerapprenant.php',{id:test.attr('id')}, function(data) {
                        $('#infoprint').html(data);
                        });
                    });
                });
            </script> 
    <p><?php include ("footer.php"); ?></p>        
