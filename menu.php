<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion des Apprenants</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
        <link rel="icon" href="images/logosimplon.png">
        <link rel="stylesheet" href="font/css/font-awesome.min.css"/>
        <script src="jquery-3.2.1.min.js"></script>
        
    </head>
    <body>
<nav class="navbar  navbar-expand-lg navbar-light bg-light menu">
    <a class="navbar-brand navb" href="index.php" title="Bienvenu sur Simplon app"><img class="logo"src="images/logosimplon.png" alt="Logo de simplon"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" id="show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
        <ul class="navbar-nav mr-auto  menu">
        <li class="nav-item active">
            <a class="nav-link navl" href="enregistrer.php" title="Enregistrer un apprenant" onclick="disparaitreBarre();"><img class="image"src="images/etudiant1.png" alt="enregistrer"><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link navl" href="lister.php" title="Afficher la liste des apprenants" onclick=" afficheBarre();"><img  class="image"src="images/liste.png" alt="lister"></a>
        </li>
            <li class="nav-item navd">
            <a class="nav-link navl" href="imprimer.php" title="Imprimer la liste des apprenants" onclick="disparaitreBarre();"><img class="image"src="images/imprimer.png" alt="imprimer"></a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 inputr" type="text" placeholder="Rechercher..." onkeyup="myFunction()" aria-label="Search" id="myInput">
        <button class="btn btn-outline-success my-2 my-sm-0 boutonr" type="submit" id="myBtn"><img src="images/recherche.png" alt="recherche"></button>
        </form>
    </div>
</nav>
<script src="barre_de_recherche.js"></script>

</body>
</html>