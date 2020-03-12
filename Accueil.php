<!DOCTYPE html>

<html>
<head>
    <!-- En-tête de la page -->


    <meta charset="utf-8" /> <!-- Doctype : il s'agit d'une page HTML -->
    <title>Page d'accueil</title> <!-- Titre de la page -->
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="styleAccueil.css"/>


</head>

<body>

<div class="LogoAccueil">



    <img src="/Users/MacJulian/Documents/ISEP/A1/APP/INFO/eyecopetit.png" alt="Menu"/>



</div>

    <?php include('header.php'); ?>

    <?php include('footer.php'); ?>

<div class ="TitreAccueil">


    <p>
        EYECO

    </p>


</div>

<form method="post" action="eyeco.php" id="formulaire">

    <p>

        <input type="text" name="pseudo" id="pseudo" placeholder="Ex : Benoit" size="28" maxlength="20" />

        <br />
        <input type="password" name="pass" id="pass" placeholder="Ex : JeMangeDesFriteux" size="20" maxlength="20"/>

        </br>


        <input class="envoyer" type="submit" value="Envoyer" />



    </p>
</form>


</body>





</html></html>