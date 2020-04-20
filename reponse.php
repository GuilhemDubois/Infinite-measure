<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Rep aux questions</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="FAQ.css"/>
    <link rel="stylesheet" href="question.css"/>
</head>


<body>
<?php include ('header.php'); ?>
<br><br><br><br><br><br>
<?php
$req = $pdo->prepare('SELECT question,reponse,identifiant,jour,idQuestion FROM faq WHERE reponse IS NULL ');
$req->execute();
$questionEtSaRep = $req->fetch();
?>
<?php if($questionEtSaRep==false):  ?>
    <h1> Il n'y a aucune question à répondre </h1>
<?php endif; ?>

<?php if($questionEtSaRep!=false):  ?>


<div class="Question">
    <h1 class="titreFAQ">FAQ :</h1>
        <?php
            $listQuestions=array(''); ?>

            <?php foreach($questionEtSaRep as $questionPuisSaRep): array_push($listQuestions,$questionPuisSaRep) ;?>
        <?php endforeach;?>


            <div class="questionEtReponse">


                Question de <?php echo $listQuestions[3],' le ', $listQuestions[4]?><br>
                <?php echo $listQuestions[1]; ?><br>
                <?php echo $listQuestions[2]; ?><br><br><br><br>


            </div>
</div>
    <?php 
    if(!empty($_POST) && isset($_POST['zoneQuestion']) ) {

    require_once 'bdd.php';
    $req = $pdo->prepare("UPDATE faq SET reponse=? WHERE idQuestion=$listQuestions[5] ");
    $req->execute([ $_POST['zoneQuestion']]);
    }
    if(!empty($_POST) && isset($_POST['Supprimer']) ) {


        $req = $pdo->prepare("DELETE FROM faq WHERE idQuestion=$listQuestions[5] ");
        $req->execute();
        header('LOCATION: reponse.php');
    }
    ?>

    <div id="formulaire">
        <form method="post">
            <p>
                <label for="zoneQuestion" id="entete"> Réponse à la question :</label>
                <textarea name="zoneQuestion" type="text" id="zoneQuestion" placeholder="Votre réponse"></textarea>
                <input type="submit" name="envoyer" id="envoyer">
            </p>

        </form>

    </div>

    <div id="formulaire">
        <form method="post" action="reponse.php">
            <p>
                  <label>Supprimer</label>
                <input type="submit" name="Supprimer" id="envoyers">
            </p>

        </form>

    </div>

<?php endif; ?>








<br /><br /><br /><br /><br /><br />








<?php include ('footer.php'); ?>

</body>
</html>