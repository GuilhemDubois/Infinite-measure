


<head>

    <meta charset="utf-8" />
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="styleAccueil.css"/>


</head>

<body>

<?php include('header.php');
?>

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
            echo'identifiant ou mdp non valide';
        }
    }

 ?>
debug($_SESSION['auth'])
<p id="inscriptions">


    INSCRIPTIONS | CONNEXION


</p>

<div id="formulaire">

<form method="POST" action="">

    <p>

        <input type="text" name="identifiant" id="pseudo" placeholder="Identifiant" size="28" maxlength="20" />

        <br />

        <input type="password" name="mdp" id="pass" placeholder="Mot de passe" />

        </br>


        <input class="envoyer" type="submit" value="Envoyer" />



    </p>
</form>
</div>


<div id="sinscrire">



    <a class = "sinscrire" href = "inscription.php" title = "Accueil">S'inscrire</a>



</div>
<?php include('footer.php'); ?>

</body>


