
<?php include('testlangue.php');
include('bdd.php');
include('online.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>
<meta charset="UTF-8">
<title>S'inscrire</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <a href="eyeco.php" class="m-link"><i class="fas fa-home"></i> <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Accueil ";
                    }
                    else
                    {
                        echo "Home";
                    }
                    ?></a>

                <a href="LesTests.php" class="m-link"><i class="fas fa-chart-line"></i> Tests</a>


                <?php if ((isset($_SESSION['auth']) && ($_SESSION['auth']->admin==1)) )
                { ?>
                    <a href="gestionResultat.php" class="m-link"><i class="fas fa-edit"></i>

                        <?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "Vue Résulats";
                        }
                        else
                        {
                            echo "Vew Results";
                        }
                        ?></a>
                <?php      }
                else
                { ?>
                <a href="Resultats.php" class="m-link"><i class="fas fa-tachometer-alt"></i> <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Vos Résultats";
                    }
                    else
                    {
                        echo "Your Results";
                    }
                    ?></a> <?php } ?>

                <?php if ((isset($_SESSION['auth']) && ($_SESSION['auth']->admin==1)) )
                { ?>
                    <a href="gestionlogin.php" class="m-link"><i class="fas fa-edit"></i>

                        <?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "Gestion Login";
                        }
                        else
                        {
                            echo "Vew Login";
                        }
                        ?></a>
                <?php      }
                else
                { ?>
                    <a href="NousConnaitre.php" class="m-link"><i class="far fa-question-circle"></i><?php if ($_SESSION['langue'] == 'francais')
                        {
                            echo "A Propos";
                        }
                        else
                        {
                            echo "About Us";
                        }
                        ?></a>
                <?php } ?>




                <?php if (isset($_SESSION['auth']) )
                { ?>
                    <a href="logout.php" class="m-link"><i class="fas fa-user-check"></i>
                        <style>
                            .fa-user-check{
                                color: darkgreen;
                            }
                        </style>
                        <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Deconnexion";
                    }
                    else
                    {
                        echo "Deconect";
                    }
                    ?></a>
         <?php      }
                else
                { ?>
                    <a href="VotreProfil.php" class="m-link"><i class="fas fa-user-slash"></i> <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Connexion";
                    }
                    else
                    {
                        echo "Connect";
                    }
                    ?></a>
                <?php } ?>



                <a href="changelangue.php" class="m-link"><i class="fa fa-refresh fa-spin"></i> <?php if ($_SESSION['langue'] == 'francais')
                    {
                        echo "Langues";
                    }
                    else
                    {
                        echo "Languages";
                    }
                    ?></a>
            </div>


        </div>

    </nav>

</header>




