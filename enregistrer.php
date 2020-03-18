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
        <?php include ("menu.php"); ?>
        <div class="container-fluid enregistrer"><fieldset class="feuillebox">            
            <form action="traitement.php" method="POST">
                <fieldset>
                    <legend>IDENTITE APPRENANT</legend>
                <div class="form-row">
                    <div class="col-md-6 mb-4 ">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">                        
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Nom</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="nom" placeholder="entrer nom..." aria-describedby="inputGroupPrepend3" required>                        
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Prénom(s)</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="prenom" placeholder="entrer prénom..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Date de naissance</span>
                                </div>
                                <input type="date" class="form-control inputborder" id="validationServerUsername" name="age" placeholder="entrer date de naissance..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Ville d'origine</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="ville" placeholder="entrer ville d'origine..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">            
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Formation</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="formation" placeholder="entrer formation..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Etablissement précédent</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="etablissement" placeholder="entrer établissement précédent..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Téléphone</span>
                                </div>
                                <input type="tel" class="form-control inputborder" id="validationServerUsername" name="telephone" placeholder="entrer numéro de téléphone..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Email</span>
                                </div>
                                <input type="email" class="form-control inputborder" id="validationServerUsername" name="email" placeholder="exemple@domaine.com..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Photo</span>
                                </div>
                                <input type="file" class="form-control inputborder" id="validationServerUsername" name="photo" placeholder="ajouter photo..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                </fieldset>
                <fieldset class="tuteur">
                    <legend>IDENTITE TUTEUR</legend>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Nom</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="nomTuteur" placeholder="entrer nom..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Prénom(s)</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="prenomTuteur" placeholder="entrer prénom..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Profession</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="profession" placeholder="entrer profession..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Téléphone</span>
                                </div>
                                <input type="tel" class="form-control inputborder" id="validationServerUsername" name="telephoneTuteur" placeholder="entrer numéro de téléphone..." aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                </fieldset>
                <div class="row boutons">        
                <button class="btn btn-primary envoyer" type="submit">Enregistrer</button>
                <button class="btn btn-primary annuler" type="reset">Annuler</button> 
            </div>
            </form> </fieldset>             
        </div>
        <?php include ("footer.php"); ?>
        <script src="scripts.js"></script>        
    </body>
</html>