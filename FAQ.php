<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="FAQ.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>

<body>

<?php include ('header.php'); ?>

    <div class="faq">
        <div class="f-title">
            <h2>Bienvenue sur la FAQ</h2>
        </div>
    </div>

    <?php $req = $pdo -> prepare('SELECT question, reponse FROM faq'); //requete SQL pour avoir les questions et les reponses
    $req->execute();
    $allQuesEtRep = $req -> fetchAll();
    ?>


<section>

    <?php if(isset($_SESSION['auth'])): ?>
        <?php $admi=$_SESSION['auth']->admin  /*TEST authentifier*/?>
        <?php if($admi==1): /* Test admin */ ?>
            <a class = "askquest" href = "reponse.php" title = "Repondre Question">Repondre Question</a>
        <?php endif; ?>
        <?php if($admi==0): /* Test non admin */ ?>
            <a class = "askquest" href = "question.php" title = "Repondre Question">Poser Question</a>
        <?php endif; ?>

    <?php endif; ?>

    <?php if(!isset($_SESSION['auth'])):  ?>
        <a class = "askquest" href = "Connexion.php" title = "Poser Question">Poser Question</a>
    <?php endif; ?>





    <div class="f-container">
        <div class="f-accordion">

            <!-- Affichage des questions et des reponses -->

            <?php foreach  ($allQuesEtRep as $valeur):
                $questionUneParUne = $valeur -> question;
                $reponseUneParUne = $valeur -> reponse;?>



            <div class="f-accordion-item" id="question1">
                <a class="f-accordion-link" href="#question1">
                    <?php
                    echo $questionUneParUne;        //afficher la question
                    ?>
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>

                </a>
                <div class="f-answer">
                    <p>
                        <?php
                        echo $reponseUneParUne;    //afficher la reponse a la question
                        ?>
                    </p>

                </div>

        </div>

            <?php endforeach;?>
    </div>
</section>

    <?php include ('footer.php'); ?>

</body>

</html>

<script src="app.js" charset="utf-8"></script>
</body>

