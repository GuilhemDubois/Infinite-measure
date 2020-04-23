
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
                        ?></a></li>

            <div class="m-right">
                <a href="eyeco.php" class="m-link"><i class="fas fa-home"></i> Accueil</a>
                <a href="LesTests.php" class="m-link"><i class="fas fa-chart-line"></i> Les tests</a>
                <a href="Resultats.php" class="m-link"><i class="fas fa-tachometer-alt"></i> Vos résultat</a>
                <a href="NousConnaitre.php" class="m-link"><i class="far fa-question-circle"></i> A propos</a>
                <a href="VotreProfil.php" class="m-link"><i class="fas fa-user"></i> Mon profil</a>
                <button class="button-language">Langues</button>
            </div>



                </div>


        </nav>


</header>






