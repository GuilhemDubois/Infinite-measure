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

<?php include ('footer.php'); ?>

<div id="formulaire">
    <form method="post">
        <p>
            <label for="zoneQuestion" id="entete"> Posez votre question : </label>
            <textarea name="zoneQuestion" type="text" id="zoneQuestion" placeholder="Votre question"></textarea>
            <input type="submit" name="envoyer" id="envoyer">
        </p>

    </form>

</div>
</body>
</html>