<html>
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="inscriptionstyle.css"/>
</head>
<body>
<br><br><br><br><br><br><br>

<?php include('header.php'); ?>


<?php
if(!empty($_POST)) {
    $errors = array();

    if (empty($_POST['prenom']) || !preg_match('/^[a-zA-Z_]+$/', $_POST['prenom'])) {
        $errors['prenom'] = "Votre prenom n'est pas valide.";
    }

    if (empty($_POST['nom']) || !preg_match('/^[a-zA-Z_]+$/', $_POST['nom'])) {
        $errors['nom'] = "Votre nom n'est pas valide.";
    }

    if (empty($_POST['identifiant']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['identifiant'])) {
        $errors['identifiant'] = "Votre identifiant n'est pas valide.";
    } else {
        $req = $pdo->prepare('SELECT id_user FROM user WHERE identifiant= ? ');
        $req->execute([$_POST['identifiant']]);
        $testexist = $req->fetch();
        if ($testexist) {
            $errors['identifiant'] = 'Cette identifiant est déja pris';
        }
    }

    if (empty($_POST['email'])) {
        $errors['email'] = "Saisissez une email.";
    }

    if (empty($_POST['mdp'])) {
        $errors['mdp'] = "Saissisez un mdp.";
    }

    if (empty($_POST['codepilote']) || !preg_match('/^[0-9_]+$/', $_POST['codepilote'])) {
        $errors['codepilote'] = "Votre code pilote n'est pas valide.";
    } else {
        $req = $pdo->prepare('SELECT id_user FROM user WHERE codepilote= ? ');
        $req->execute([$_POST['codepilote']]);
        $tesexist = $req->fetch();
        if ($tesexist) {
            $errors['codepilote'] = 'Ce code pilote est déja pris';
        }
    }



    if (empty($errors)) {
        require_once 'bdd.php';
        $req = $pdo->prepare("INSERT INTO user SET prenom= ?, nom = ?, identifiant = ?, email = ?, mdp = ?, codepilote = ?");
        $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
        $req->execute([$_POST['prenom'], $_POST['nom'], $_POST['identifiant'], $_POST['email'], $mdp, $_POST['codepilote']]);

    }

}



?>
<?php if(isset($errors) && !empty($errors) ): ?>
    <div class="ereur">
        <h1>Veillez a remplir le formulaire correctement </h1>
        <ul>
            <?php foreach($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>

<?php if(isset($errors) && empty($errors) ){echo "Vous êtes désormais inscrit monsieur " ,$_POST['nom'],"."; } ?>






<p id="titreinscription">


    INSCRIPTION


</p>

<div>

    <form action="" method="POST">

        <p>

            <input type="text" name="prenom" id="prenom" placeholder="Prénom" size="28" maxlength="20" />

            <br />

            <input type="text" name="nom" id="nom" placeholder="Nom" size="20" maxlength="20"/>

            </br>
            <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" size="20" maxlength="20"/>
            </br>

            <input type="email" name="email" id="email" placeholder="Email" size="20" maxlength="50"/>

            </br>

            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"  />

            </br>

            <input type="text" name="codepilote" id="codepilote" placeholder="Code  pilote" size="20" maxlength="20"/>

            </br>


            <input id="sinscrire" type="submit" value="S'inscrire" />



        </p>
    </form>
</div>


<?php include('footer.php'); ?>

</body>
</html>