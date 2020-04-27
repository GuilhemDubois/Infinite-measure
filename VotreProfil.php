


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
            echo'Identifiant ou Mot de passe incorrect !';
        }
    }elseif(!empty($_POST)){
    echo'<div class="error"><p>Veuillez remplir les informations correctement !</p></div>';
}

 ?>

<div class="connexion">
    <div class="c-form">

        <h3>Connexion</h3>
        <form action="#" method="post">

            <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant"><br/>


            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
            <br>
            <input type="submit" value="Se connecter">
            <a href="#">Mot de passe oublié ?</a><br><br>
            <a href="#">S'inscrire</a>

        </form>
    </div>
</div>

<?php include('footer.php'); ?>
<script src="app.js" charset="utf-8"></script>

</body>
