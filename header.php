
<?php include('testlangue.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>



<div class="menu" id="conteneur">


    <a  href="eyeco.php"><img class="LogoHeader" src="images/logopetitpetit.png" alt="Menu"/></a>


    <a class ="test" href = "eyeco.php" title = "Accueil"> <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "Accueil";
        }
        else
        {
            echo "Home";

        }
        ?></a>

    <a class ="test" href = "NousConnaitre.php" title = "À propos"> <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "A propos";

        }
        else
        {
            echo "About us";

        }
        ?></a>

    <a class ="test" href = "Resultats.php" title = "Vos résultats"> <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "Resultats";

        }
        else
        {
            echo "Results";

        }
        ?></a>

    <a class ="test" href = "LesTests.php" title = "Passer les tests">Tests</a>

    <a href="VotreProfil.php"><img class="logoprofil" src="images/profil.png" alt="Profil" title="Espace client" /></a>

</div>

<div class="dropdown">

    <button class="dropbtn">
        <?php echo($_SESSION['langue'])?>
    </button>

    <div class="dropdown-content">
        <a href="changelangue.php">Francais</a>
        <a href="changelangue.php">English</a>
    </div>

</div>


