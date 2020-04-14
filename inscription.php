<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="inscriptionstyle.css"/>
</head>
<body>


<?php include('header.php'); ?>

<p id="titreinscription">


    INSCRIPTION


</p>

<div>

    <form>

        <p>

            <input type="password" name="pseudo" id="prenom" placeholder="Prénom" size="28" maxlength="20" />

            <br />

            <input type="password" name="pass" id="nom" placeholder="Nom" size="20" maxlength="20"/>

            </br>


            <input type="password" name="email" id="email" placeholder="Email" size="20" maxlength="20"/>

            </br>

            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" size="20" maxlength="20"/>

            </br>

            <input type="password" name="codepilote" id="codepilote" placeholder="Code  pilote" size="20" maxlength="20"/>

            </br>


            <input id="sinscrire" type="submit" value="S'inscrire" />



        </p>
    </form>
</div>


<?php include('footer.php'); ?>

</body>
</html>