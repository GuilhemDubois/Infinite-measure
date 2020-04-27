


<head>

    <meta charset="utf-8" />
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="styleAccueil.css"/>
    <link rel="stylesheet" href="normalize.css"/>

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
            echo'Identifiant ou mdp non valide';
        }
    }elseif(!empty($_POST)){
    echo'Veuillez remplir les informations';
}

 ?>
<div>
<p id="inscriptions">
    <div id="formulaire">



    INSCRIPTIONS | CONNEXION


</p>
</div>
<form method="POST" action="">

    <p>

        <input type="text" name="identifiant" id="pseudo" placeholder="Identifiant" size="28" maxlength="20" />

        <br />

        <input type="password" name="mdp" id="pass" placeholder="Mot de passe" />

        </br>


        <input class="envoyer" type="submit" value="Connexion" />



    </p>
</form>
</div>


<div id="sinscrire">



    <a class = "sinscrire" href = "inscription.php" title = "Accueil">S'inscrire</a>



</div>



</body>
<footer>
<?php include('footer.php'); ?>
</footer>