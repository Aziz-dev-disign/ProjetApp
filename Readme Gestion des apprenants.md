


                            __DOCUMENTATION TECHNIQUE__

                            _APPLICATION GESTION DES APPRENANTS_:

     L’application Gestion des Apprenants est une plateforme qui
    nous permettra de gérer éfficacement les apprenants
    d’une fabrique numérique Simplon.
    Groupe 3: Bandé abdoul aziz ,Desse félicité ,Ouedraogo diane,Souka adjovi ,Kanfo yacouba

            _Table des Matières_:
        I.	Informations	
        II.	Résumé du document	
        III.Rappel sur le fonctionnement de l’application	
            1.DESCRIPTION De l’application	
            2.Décomposition du projet	
            3.Technologies utilisées	
        IV.	Fonctionnement
        V.Conclusion


                        I.	_INFORMATIONS_
                
        Nom du Projet:	Gestion des apprenants
         Type de document:	Document Technique

        Date:	18/03 /20
         Version:	1.0
         Mots-clés:	Apprenants,tuteur,enregistrer,modifier,diagramme

                         II.	_RESUME DU DOCUMENT_

         Ce document est la documentation technique de la suite
        applicative gestion des apprenants. Il est divisé en trois parties :
          •	La documentation technique du client : l’application bureau,
          •	La documentation technique de la base de donnée : MySQL
          •	La documentation technique de l’application mobile fonctionnant sur Android et iOS ;

                        III._RAPPEL SUR LE FONCTIONNEMENT DE L’APPLICATION_

                        1.	_DESCRIPTION DE L’APPLICATION_

            Notre projet a pour but la création d’une application de gestion

            des apprenants d’une fabrique Simplon.
            Plus qu’une application à interface statique notre application permet 
            d’enregistrer un apprenant en renseignant son nom, prénom, sa date de naissance, 
            sa ville d'origine, sa formation et son établissement précèdent, ses contacts ;
            Fournir des renseignements sur le tuteur d'un apprenant (nom, prénom, profession, téléphone) ;afficher la photo de l'apprenant ; lister les apprenants ; imprimer la liste des apprenants ; rechercher un apprenant dans la liste de l'apprenant.
            L’application à une interface moderne et ergonomique, permettant de gérer efficacement et simplement la gestion des apprenants et tuteurs afin de fournir des informations utiles sur chaque apprenant de la fabrique.
            Il est utilisable aussi bien sur des surfaces classiques que tactiles et quel que soit le nombre des apprenants.
            Enfin un fort accent est mis sur l’interaction avec la base de donnée conçue par nos soins afin de permettre une gestion efficace des apprenants.

                            2._DECOMPOSITION DU PROJET_

            Notre projet se décompose en différentes parties :
            •	L’application client, qui est une application bureau fonctionnant sur Windows, 
            Linux et MacOs, permettant d’enregistrer, de modifier, de lister et d’imprimer les informations relatives à un apprenant et à son tuteur.
            •	Un serveur web hébergé sur un serveur local XAMPP 
            et qui communique en permanence avec l’application pour assurer
            de multiples fonctions comme rechercher un apprenant dans la liste des apprenants.


                            3._TECHNOLOGIES UTILISEES_

            L’interface administrateur a été créer avec Photoshop. Photoshop à fournit tous les éléments nécessaires à la réalisation de notre maquette.
            L’application en soit a été coder avec des langages de programmation telles que :HTML /CSS, PHP, JS ; des framework comme : JQuery, Bootstrap ; Power Designer pour la modélisation ; MySQL pour base de donnée.
            Nous avons utilisé principalement le framework bootstrap. Bootstrap à fournit la plupart des éléments nécessaires à la réalisation de notre appli et apporte plusieurs éléments essentiels :
            •	La portabilité : un code bootstrap compile indifféremment sous tous les systèmes d’exploitation cibles à savoir Windows, linux mac iOS.  Bootstrap nous a permis de rendre le site responsif sur tout appareil portatif.
            •	MySQL a été choisi comme SGBD pour sa simplicité. En effet, cette technologie est libre et l’application ne sollicite qu’assez peu la base et ne requiert pas d’opération complexe.
            •	L’application accède à la base de donnée via le module PDO : outil complet qui permet d’accéder à n’importe quel type de base de données, (MySQL, PostgreSQL, Oracle).

                                IV.	_FONCTIONNEMENT_


            L’application est embarquée sur du matériel de type ordinateur, tablette. Le matériel doit dans tous les cas disposer d’une connexion lui permettant de communiquer avec la base de donnée.
            Pour y accéder il vous faut un serveur local Xampp particulièrement avec à l’intérieure du dossier htdocs le dossier de l’application contenant tous les fichiers nécessaires. Assurer vous d’avoir démarrer xampp et coché les onglets starten/Apache et Starten/MySQL. Renseigner dans votre navigateur l’adresse :https://localhost/gestiondes apprenants puis valider. Cela vous renvoie à la page d’accueil de l’application et vous avez la possibilité de naviguer comme bon vous semble.

            La page d’accueil :
            associer au logo de Simplon.co elle vous montre l’ensemble de la présentation de notre application.
            <div>
            <img src="images/la page d'accueil.jpg">
            </div>

            Le menu : elle est composée de 5 éléments à savoir le bouton d’accueil, le bouton enregistrer/ajouter un apprenant et son tuteur ; le bouton lister ; le bouton imprimer ;
            la barre de recherche.

            •	Le bouton enregistrer : 

            Cette fonctionnalité vous donne accès à un formulaire de renseignement des informations concernant l’apprenant (Nom, prénom, date de naissance, établissement fréquenté, ville, contact, photo) et son tuteur (Nom, prénom, profession, contact).
            En bas de ce formulaire des boutons de validation
            pour confirmer l’enregistrement de l’apprenant/tuteur   ou annuler l’envoi du formulaire
            en cas d’erreur .

            •	Le bouton lister :  
            Il vous donne la liste des apprenants et de leurs tuteurs en déroulant les information d’un apprenant vous aurez plus de détail. Associer à cette liste des boutons :


            -Ajouter : pour compléter les informations d’un apprenant existant dans la base  

            -Modifier : pour modifier la liste de l’apprenant/tuteur 


            -Annuler : pour annuler les modifications apportées à la liste 

            •	Le bouton d’Impression :  

            Il imprime le résultat de votre recherche par défaut les informations d’un apprenant/tuteur dans la liste des apprenants/tuteurs.
            •	La barre de recherche :  
            elle vous permet de rechercher les éléments désirés sur l’application

                                        V. _CONCLUSION_

            L'application Gestion des Apprenants V1.0 est une plateforme qui à pour but de permettre à l'administrateur de pouvoir effectuer les actions nécessaires à la mise à jour des informations des apprenants/tuteur.De questionner la base de donnée et avoir les résultats souhaités.