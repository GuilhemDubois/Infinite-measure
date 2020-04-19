<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Foire aux allQuesEtResp</title>
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
        <h1>FAQ </h1>
        <ul>
            <?php foreach($allQuesEtResp as $questionEtSaRep):    
            $listQuestions=array(''); ?>

            <?php foreach($questionEtSaRep as $questionPuisSaRep): array_push($listQuestions,$questionPuisSaRep) ;?>
            <?php endforeach;
            ?>
                
            <ul>
                <h1>Question de <?php echo $listQuestions[3],' le ', $listQuestions[4]?></h1>
                <li> <?php echo $listQuestions[1]; ?>               </li>

                <h1>Réponse </h1>
                <li> <?php echo $listQuestions[2]; ?>               </li>

            </ul>
            <?php unset($listQuestions);?>
            <?php endforeach;?>




        </ul>
    </div>



















    <?php include ('footer.php'); ?>

</body>
</html>