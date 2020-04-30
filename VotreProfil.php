


<head>

    <meta charset="utf-8" />
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="styleAccueil.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>


</head>

<body>


<?php include('header.php');?>

<?php
if(!empty($_POST) && !empty($_POST['identifiant']) && !empty($_POST['mdp'])) {
        $req = $pdo->prepare('SELECT * FROM user WHERE identifiant= ? ');
        $req->execute([$_POST['identifiant']]);
        $user = $req->fetch();
        if (password_verify($_POST['mdp'],$user->mdp)) {
            $_SESSION['auth'] = $user;
            header('Location: eyeco.php');
            exit();
        }else{
            if ($_SESSION['langue'] == 'francais') {
                echo "Identifiant ou Mot de passe incorrect !";
            } else {
                echo "User or password incorrect !";
            }


        }
    }elseif(!empty($_POST)){
    echo'<div class="error"><p> Veuillez remplir les informations correctement !</p></div>';
}

 ?>

<div class="connexion">
    <div class="c-form">

        <h3><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Connexion";
            }
            else
            {
                echo "Log in";
            }
            ?></h3>
        <form action="#" method="post">

            <input type="text" name="identifiant" id="identifiant" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Identifiant";
            }
            else
            {
                echo "Username";
            }
            ?>"><br/>


            <input type="password" name="mdp" id="mdp" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Mot de passe";
            }
            else
            {
                echo "Password";
            }
            ?>">
            <br>
            <input type="submit" value="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Se connecter";
            }
            else
            {
                echo "Log in";
            }
            ?>">
            <a href="motdepasse.php"><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Mot de passe oublié ?";
                }
                else
                {
                    echo "Forgot password ?";
                }
                ?></a><br><br>
            <a href="inscription.php"><?php if ($_SESSION['langue'] == 'francais')
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
