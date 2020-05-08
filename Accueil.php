
<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="AccueilStyle.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>

<body>

<?php include('header.php'); ?>

<div class="accueil">

    <p class="date"><?php
        $jour = date('d');
        $mois = date('m');
        $annee = date('Y');
        echo $jour . '/' . $mois . '/' . $annee;
        ?></p>

    <div class="a-title">
        <h2><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Tests psychotechniques pour pilotes de ligne";
            }
            else
            {
                echo "Psychotechnical tests for airline pilots";
            }
            ?></h2>
        <p><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Nous évaluons vos compétences grâce à une batterie de test adapté à vos besoins";
            }
            else
            {
                echo "We assess your skills using a test battery adapted to your needs";
            }
            ?></p>
    </div>
</div>

<div class="a-info">
    <!--Contient l'image d'accueil-->
</div>

<?php include('footer.php'); ?>

<script src="app.js" charset="utf-8"></script>

</body>








