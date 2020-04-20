<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Foire aux questions</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="FAQ.css"/>
</head>


<body>
    <?php include ('header.php'); ?>
    <br><br><br><br><br><br>
    <?php
    $req = $pdo->prepare('SELECT question,reponse,identifiant,jour FROM faq WHERE reponse IS NOT NULL ');
    $req->execute();
    $allQuesEtResp = $req->fetchAll();


    ?>
    <div class="Question">
        <h1 class="titreFAQ">FAQ :</h1>
        <ul>
            <?php foreach($allQuesEtResp as $questionEtSaRep):    
            $listQuestions=array(''); ?>

            <?php foreach($questionEtSaRep as $questionPuisSaRep): array_push($listQuestions,$questionPuisSaRep) ;?>
            <?php endforeach;
            ?>

            <div class="questionEtReponse">


                Question de <?php echo $listQuestions[3],' le ', $listQuestions[4]?><br>
                <?php echo $listQuestions[1]; ?><br>
                <?php echo $listQuestions[2]; ?><br><br><br><br>


            </div>









            <?php unset($listQuestions);?>
            <?php endforeach;?>




        </ul>
    </div>



















    <?php include ('footer.php'); ?>

</body>
</html>