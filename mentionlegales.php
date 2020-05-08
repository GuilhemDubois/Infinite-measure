<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="mentionlegalesStyle.css"/>
    <link rel="stylesheet" href="normalize.css"/>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>

<body>

    <?php include('Header.php'); ?>

    <div class="CGU">
        <div id="c-title">
            <h2><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Conditions générales d'utilisation";
                }
                else
                {
                    echo "Terms of Use";
                }
                ?></h2>
        </div>
    </div>

    <div class="c-text">
        <p><?php
            echo date('d');

            ?></p>

    </div>
    <?php include('Footer.php'); ?>

    <script src="app.js" charset="utf-8"></script>
</body>