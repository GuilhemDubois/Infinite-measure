
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


            <div class="m-right">
                <a href="eyeco.php" class="m-link"><i class="fas fa-home"></i> Accueil</a>
                <a href="LesTests.php" class="m-link"><i class="fas fa-chart-line"></i> Les tests</a>
                <a href="Resultats.php" class="m-link"><i class="fas fa-tachometer-alt"></i> Vos résultat</a>
                <a href="NousConnaitre.php" class="m-link"><i class="far fa-question-circle"></i> A propos</a>
                <a href="VotreProfil.php" class="m-link"><i class="fas fa-user"></i> Mon profil</a>
                <button class="button-language">Langues</button>
            </div>


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
                <li><a href = "FAQ.php" title = "FAQ">FAQ</a></li>
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






