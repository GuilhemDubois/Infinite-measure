<head>

    <meta charset="utf-8" />
    <title>Statistiques</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="FAQ.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>


<?php include('header.php'); ?>

<div class="statistiques">
    <div class="f-title">
        <h2>Bienvenue sur les Statistiques</h2>
    </div>
</div>

<body>

<?php
        //Nombre d'inscrit sur le site n'étant pas admin//
$req =  $pdo -> prepare('SELECT COUNT(*) as nbInscrit FROM user WHERE admin = 0 ');
$req -> execute();
$valeur = $req -> fetch();


$nbInscrit = $valeur -> nbInscrit;
echo  'il y a actuelement ' . $nbInscrit[0] . ' inscrit (non administrateur) sur le site' ;
?>
<br><br><br><br><br><br><br>

<?php
    //moyennes des scores de tous les utilisateurs inscrit ayant passser des tests//
$req = $pdo -> prepare('SELECT * FROM test');
$req ->execute();
$listeScore = $req -> fetchAll();
$moyenne = 0;


foreach ($listeScore as $valMoyenne):
    $valeurScore = $valMoyenne -> score;
    $moyenne += $valeurScore;  //somme de tous les scores

    endforeach;

    $moyenne /= count($listeScore); //division de la somme de tous le score par le nombre de test effectué
    var_dump($moyenne);
?>




</body>



<?php include ('footer.php');?>
