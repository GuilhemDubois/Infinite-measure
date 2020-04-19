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
    $req = $pdo->prepare('SELECT question,reponse FROM faq WHERE reponse IS NOT NULL ');
    $req->execute();
    $questions = $req->fetch();
    $numero=array('');
    ?>
    <div class="Question">
        <h1>FAQ </h1>
        <ul>
            <?php foreach($questions as $ya): array_push($numero,$ya) ;?>
            <?php endforeach;?>
            <?php for ($i = 1; $i <= (array_key_last($numero)-1); $i= $i+2): ;?>
                
            <ul>
                <h1>Question </h1>
                <li> <?php echo $numero[$i]; ?>               </li>
                <h1>Réponse </h1>
                <li> <?php echo $numero[$i+1]; ?>               </li>
            </ul>
            <?php endfor; ?>





        </ul>
    </div>



















    <?php include ('footer.php'); ?>

</body>
</html>