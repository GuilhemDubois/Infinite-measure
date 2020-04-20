<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Foire aux questions</title>
        <link rel="stylesheet" href="headerStyle.css"/>
        <link rel="stylesheet" href="footerStyle.css"/>
        <link rel="stylesheet" href="question.css"/>
    </head>

    <body>
        <?php include ('header.php'); ?>



        <?php
        $date = date("y-m-d");
        $re=$_SESSION['auth']->identifiant;

        if(!empty($_POST)) {

            require_once 'bdd.php';
            $req = $pdo->prepare("INSERT INTO faq SET identifiant= ?, jour = ?, question = ?");
            $req->execute([$re, $date, $_POST['zoneQuestion']]);
        }
        ?>

        <div id="formulaire">
            <form method="post">
                <p>
                    <label for="zoneQuestion" id="entete"> Posez votre question :</label>
                    <textarea name="zoneQuestion" type="text" id="zoneQuestion" placeholder="Votre question"></textarea>
                    <input type="submit" name="envoyer" id="envoyer">
                </p>

            </form>

        </div>
    </body>
    <?php include ('footer.php'); ?>
</html>