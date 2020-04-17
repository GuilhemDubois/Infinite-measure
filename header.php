
<?php include('testlangue.php');
include('bdd.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>



<div class="menu" id="conteneur">
    <a  href="eyeco.php"><img class="LogoHeader" src="images/logopetitpetit.png" alt="Menu"/></a>

    <a class ="test" href = "eyeco.php" title = "Accueil">
        <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "ACCUEIL";

        }
        else
        {
            echo "HOME";

        }
        ?></a>

    <a class ="test" href = "NousConnaitre.php" title = "À propos"> <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "A PROPOS";

        }
        else
        {
            echo "ABOUT US";

        }
        ?></a>

    <a class ="test" href = "Resultats.php" title = "Vos résultats"> <?php if (($_SESSION['langue'] == 'francais') && (isset($_SESSION['auth'])))
        {
            echo "RESULTATS";

        }
        elseif (isset($_SESSION['auth'])){

            echo "RESULTS";

        }
        ?></a>

    <a class ="test" href = "LesTests.php" title = "Passer les tests">TESTS</a>
    <?php if(isset($_SESSION['auth'])): ?>
        <div class="bouton">
            <p>
                <a href="logout.php">Déconnexion</a>
            </p>
        </div>
    <?php endif; ?>
    <?php if(!isset($_SESSION['auth'])): ?>
    <a href="VotreProfil.php"><img class="logoprofil" src="images/profil.png" alt="Profil" title="Votre Profil" /></a>
    <?php endif; ?>
</div>










<div class="dropdown">
    <button class="dropbtn">
        <?php echo($_SESSION['langue'])?>
    </button>
    <div class="dropdown-content">
        <a href="changelangue.php">francais</a>
        <a href="changelangue.php">english</a>
    </div>
</div>


