
<?php include('testlangue.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>



<div class="menu" id="conteneur">
    <a  href="eyeco.php"><img class="LogoHeader" src="images/logopetitpetit.png" alt="Menu"/></a>

    <a class ="test" href = "eyeco.php" title = "Accueil">
        <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "ACCEUIL";

        }
        else
        {
            echo "HOME";

        }
        ?></a>

    <a class ="test" href = "NousConnaitre.php" title = "À propos">À PROPOS</a>

    <a class ="test" href = "Resultats.php" title = "Vos résultats">RÉSULTATS</a>

    <a class ="test" href = "LesTests.php" title = "Passer les tests">TESTS</a>

    <a href="VotreProfil.php"><img class="logoprofil" src="images/profil.png" alt="Profil" title="Votre Profil" /></a>

</div>










<div class="dropdown">
    <button class="dropbtn">Langage</button>
    <div class="dropdown-content">
        <a href="changelangue.php">francais</a>
        <a href="changelangue.php">english</a>
    </div>
</div>


