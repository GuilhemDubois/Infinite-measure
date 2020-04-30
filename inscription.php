
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="inscriptionstyle.css"/>
    <link rel="stylesheet" href="normalize.css"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>

<body>

<?php include('header.php'); ?>


<?php
if(!empty($_POST)) {
    $errors = array();

    if (empty($_POST['prenom']) || !preg_match('/^[a-zA-Z_]+$/', $_POST['prenom'])) {
        $errors['prenom'] = "Prénom invalide.";
    }

    if (empty($_POST['nom']) || !preg_match('/^[a-zA-Z_]+$/', $_POST['nom'])) {
        $errors['nom'] = "Nom invalide.";
    }

    if (empty($_POST['identifiant']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['identifiant'])) {
        $errors['identifiant'] = "Identifiant invalide.";
    } else {
        $req = $pdo->prepare('SELECT id_user FROM user WHERE identifiant= ? ');
        $req->execute([$_POST['identifiant']]);
        $testexist = $req->fetch();
        if ($testexist) {
            $errors['identifiant'] = 'Cet identifiant existe déjà !';
        }
    }

    if (empty($_POST['email'])) {
        $errors['email'] = "Entrez un adresse email correct.";
    }

    if (empty($_POST['mdp'])) {
        $errors['mdp'] = "Entrez un mot de passe correct.";
    }

    if (empty($_POST['codepilote']) || !preg_match('/^[0-9_]+$/', $_POST['codepilote'])) {
        $errors['codepilote'] = "Code pilote incorrect.";
    } else {
        $req = $pdo->prepare('SELECT id_user FROM user WHERE codepilote= ? ');
        $req->execute([$_POST['codepilote']]);
        $tesexist = $req->fetch();
        if ($tesexist) {
            $errors['codepilote'] = 'Ce code pilote existe déjà';
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
        <h1>Remplissage du formulaire incorrect. Veuillez réessayer.</h1>
        <ul>
            <?php foreach($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>

<?php if(isset($errors) && empty($errors) ){echo "Vous êtes désormais inscrit M. " ,$_POST['nom'],"."; } ?>


<div class="inscription">
    <div class="i-form">

        <h3><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Inscription";
            }
            else
            {
                echo "Sign up";
            }
            ?></h3>
        <form action="#" method="post">

            <input type="text" name="prenom" id="prenom"  size="28" maxlength="20" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Prénom";
            }
            else
            {
                echo "First name";
            }
            ?>"><br/>
            <input type="text" name="nom" id="nom"  size="20" maxlength="20" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Nom";
            }
            else
            {
                echo "Last name";
            }
            ?>"><br/>
            <input type="text" name="identifiant" id="identifiant"  size="20" maxlength="20" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Identifiant";
            }
            else
            {
                echo "User name";
            }
            ?>"><br/>
            <input type="number" name="codepilote" id="codepilote"  size="20" maxlength="20" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Code pilote";
            }
            else
            {
                echo "Pilot ID";
            }
            ?>"><br/>
            <input type="email" name="mail" id="mail"  size="20" maxlength="50" placeholder="<?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Email";
            }
            else
            {
                echo "Email";
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
                echo "S'inscrire";
            }
            else
            {
                echo "Submit";
            }
            ?>">

            <a href="VotreProfil.php"><?php if ($_SESSION['langue'] == 'francais')
                {
                    echo "Se connecter";
                }
                else
                {
                    echo "Log in";
                }
                ?></a>

        </form>
    </div>
</div>


<?php include('footer.php'); ?>
<script src="app.js" charset="utf-8"></script>
</body>
