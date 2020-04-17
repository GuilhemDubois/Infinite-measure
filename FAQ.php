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

    <?php include ('footer.php'); ?>

<div id="formulaire">
        <form method="post">
            <p>
                <input type="text" name="question" id="question" placeholder="Votre question">
                <input type="submit" name="envoyer" id="envoyer">
            </p>

        </form>

    </div>
</body>
</html>