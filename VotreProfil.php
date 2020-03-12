<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8" /> <!-- Doctype : il s'agit d'une page HTML -->
    <title>Page d'accueil</title> <!-- Titre de la page -->
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="styleAccueil.css"/>


</head>

<body>

<?php include('header.php'); ?>


<?php include('footer.php'); ?>


<p id="inscriptions">


    INSCRIPTIONS | CONNEXION


</p>

<div id="formulaire">

<form method="post" action="cible.php">

    <p>

        <input type="text" name="pseudo" id="pseudo" placeholder="Identifiant" size="28" maxlength="20" />

        <br />

        <input type="password" name="pass" id="pass" placeholder="Mot de passe" size="20" maxlength="20"/>

        </br>


        <input class="envoyer" type="submit" value="Envoyer" />



    </p>
</form>
</div>


<div id="sinscrire">



    <a class = "sinscrire" href = "inscription.php" title = "Accueil">S'inscrire</a>



</div>


</body>


</html></html>