<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="VotreprofilStyle.css"/>
    <link rel="stylesheet" href="normalize.css"/>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>



<body>

<?php include('Header.php'); ?>
<div class="profil">
    <div class="p-box">
        <img src="images/votreprofil.png" class="p-photo">
        <h3>Votre profil</h3>

        <p>Prénom</p>
        <p>Nom</p>
        <p>Identifiant</p>
        <p>Code pilote</p>
        <p>Email</p>
        <p>Mot de passe</p>

        <form action="Votreprofil1.php" class="p-modifier">
            <input type="submit" value="Modifier les informations">
        </form>

        <a href="#">Déconnexion</a>

    </div>
</div>


<?php include('Footer.php'); ?>

<script src="app.js" charset="utf-8"></script>
</body>