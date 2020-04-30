<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="VotreprofilStyle1.css"/>
    <link rel="stylesheet" href="normalize.css"/>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>



<body>

<?php include('Header.php'); ?>
<div class="profil1">
    <div class="p1-box">
        <img src="images/votreprofil.png" class="p1-photo">

        <h3>Votre profil</h3>

        <form action="#" method="post">

            <input type="text" name="prenom" id="prenom" placeholder="Prénom"><br>
            <input type="text" name="nom" id="nom" placeholder="Nom"><br>
            <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant"><br>
            <input type="number" name="codepilote" id="codepilote" placeholder="Code Pilote"><br>
            <input type="email" name="mail" id="mail" placeholder="Email"><br>
            <input type="password" name="mot de passe" id="motdepasse" placeholder="Mot de passe"><br>

            <input type="submit" value="Appliquer les changements">
        </form>

        <a href="#">Déconnexion</a>

    </div>
</div>


<?php include('Footer.php'); ?>

<script src="app.js" charset="utf-8"></script>
</body>