
<?php include('testlangue.php');
include('bdd.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>



<div class="menu" id="conteneur">
    <a  href="eyeco.php"><img class="LogoHeader" src="images/logopetitpetit.png" alt="Menu"/></a>

    <a class ="test" href = "eyeco.php" title = "Accueil">
        <?php if ($_SESSION['langue'] == 'francais')
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

    <a class ="test" href = "Resultats.php" title = "Vos résultats"> <?php if (($_SESSION['langue'] == 'francais') && (isset($_SESSION['auth'])))
        {
            echo "Resultat";

        }
        elseif (isset($_SESSION['auth'])){

            echo "Resultat";

        }
        ?></a>

    <a class ="test" href = "LesTests.php" title = "Passer les tests">Test</a>
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


