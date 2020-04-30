


<head>

    <meta charset="utf-8" />
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="motdepasseStyle.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>


</head>

<body>


<?php include('header.php');?>

<div class="motdepasse">
    <div class="m-form">

        <h3><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Modifier le mot de passe";
            }
            else
            {
                echo "Change your password";
            }
            ?></h3>
        <form action="#" method="post">

            <input type="password" name="mot de passe1" id="motdepasse1" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Ancien mot de passe";
            }
            else
            {
                echo "Previous password";
            }
            ?>"><br/>
            <input type="password" name="mot de passe2" id="motdepasse2" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Nouveau mot de passe";
            }
            else
            {
                echo "New password";
            }
            ?>"><br>
            <input type="submit" value="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Modifier";
            }
            else
            {
                echo "Modify";
            }
            ?>"><br><br>
            <a href="Inscription.php"><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "S'inscrire";
                }
                else
                {
                    echo "Sign up";
                }
                ?></a>

        </form>
    </div>
</div>


<?php include('footer.php'); ?>
<script src="app.js" charset="utf-8"></script>

</body>
