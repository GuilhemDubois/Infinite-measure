<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="LesTestsStyle.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>


</head>

<body>


    <?php include('Header.php'); ?>

    <div class="test">
        <div class="t-title">
            <h2><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Déroulement des tests psychotechniques";
                }
                else
                {
                    echo "Conduct of our psychotechnical tests";
                }
                ?></h2>
        </div>

    </div>
    <div id="t-button">
        <a href="Connexion.php" class="button-commencer"><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "COMMENCER";
            }
            else
            {
                echo "START";
            }
            ?></a>

    </div>

    <?php include('Footer.php'); ?>

    <script src="app.js" charset="utf-8"></script>

</body>