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

<?php include('Header.php'); ?>

<div class="faq">
    <div class="f-title">
        <h2>Bienvenue sur la FAQ</h2>
    </div>
</div>

<section>
    <div class="f-container">
        <div class="f-accordion">
            <div class="f-accordion-item" id="question1">
                <a class="f-accordion-link" href="#question1">
                    Combien de temps dure un test ?
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                </a>
                <div class="f-answer">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                    </p>

                </div>
            </div>
            <div class="f-accordion-item" id="question2">
                <a class="f-accordion-link" href="#question2">
                    Comment accéder à mon compte profil ?
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                </a>
                <div class="f-answer">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                    </p>

                </div>
            </div> <div class="f-accordion-item" id="question3">
                <a class="f-accordion-link" href="#question3">
                    Est-il possible de changer de langue ?
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                </a>
                <div class="f-answer">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                    </p>

                </div>
            </div>
            <div class="f-accordion-item" id="question4">
                <a class="f-accordion-link" href="#question4">
                    Où trouver les résultats de mes tests ?
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                </a>
                <div class="f-answer">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>


<?php include('Footer.php'); ?>

<script src="app.js" charset="utf-8"></script>
</body>