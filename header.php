
<?php include('testlangue.php');
include('bdd.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>
<meta charset="UTF-8">
<title>S'inscrire</title>
<link rel="stylesheet" href="headerStyle.css"/>

<header role="header">

    <nav class="menu" role="navigation">

        <div class="inner">


            <div class="m-nav-toggle">
                    <span class="m-toggle-icon">

                    </span>
            </div>

            <div class="m-left-logo">
                <a href="eyeco.php"><img src="images/logopetitpetit.png"/></a>
            </div>

            <div class="m-left">
                <h1 class="logo">Eyeco</h1>
            </div>

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




