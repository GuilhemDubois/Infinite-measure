
<?php include('testlangue.php');
include('bdd.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>

<header>
    <div class="menu" id="conteneur">
        <div id="LogoHeader">
            <a  href="eyeco.php"><img src="images/logopetitpetit.png" alt="Menu"/></a>
        </div>

        <nav>
            <ul>
                <li><a href = "eyeco.php" title = "Accueil">
                        <?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "Accueil";

                        }
                        else
                        {
                            echo "Home";

                        }
                        ?></a></li>

                <li><a href = "NousConnaitre.php" title = "À propos"> <?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "A propos";

                        }
                        else
                        {
                            echo "About us";

                        }
                        ?></a></li>

                <li><a href = "Resultats.php" title = "Vos résultats"> <?php if (($_SESSION['langue'] == 'francais') && (isset($_SESSION['auth'])))
                        {
                            echo "Resultat";

                        }
                        elseif (isset($_SESSION['auth'])){

                            echo "Resultat";

                        }
                        ?></a></li>

                <li><a href = "LesTests.php" title = "Passer les tests">Test</a></li>

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

                <li>
                    <div class="dropdown">
                        <button class="dropbtn">
                            <?php echo($_SESSION['langue'])?>
                        </button>

                        <div class="dropdown-content">
                            <a href="changelangue.php">Francais</a>
                            <a href="changelangue.php">English</a>
                        </div>
                </li>


                </div>


            </ul>

        </nav>

    </div>
</header>






