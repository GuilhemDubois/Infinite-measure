<?php include('testlangue.php');
$_SESSION["location"] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>

<html>
<head>
    <meta charset="utf-8" />
    <title>  <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "PAGE D'ACCEUIL";

        }
        else
        {
            echo "HOME";

        }
        ?></title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="ResultatsStyle.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>

</head>

<?php include ('header.php'); ?>

<body>

<div class="result">
    <div class="r-title">
        <h2>Votre historique</h2>
    </div>
</div>

<?php require_once 'bdd.php';
if(!isset($_SESSION['auth'])){  echo '<body onLoad="alert(\'Connectez vous...\')">';
    echo '<meta http-equiv="refresh" content="0;URL=Connexion.php">';
}
else{
$re=$_SESSION['auth']->identifiant; /*re variable de l'user rechercher*/
$req = $pdo->prepare("SELECT MAX(id_Test) FROM `test` WHERE identifiant='$re'");
 $req->execute();
$nbtests = $req->fetch();

foreach ($nbtests as $name => $value) {
    $nbtest = $value;
}  /* selectionne le nombre de test effectuer*/
    if ($nbtest==''){ echo "<section><div class='f-container'><div class='f-accordion'><div class=\"f-accordion-item\" id=\"question1\">
            <a class=\"f-accordion-link\" href=\"#question1\"> Vous n'avez pas encore effectué un test!</a></div></div></div></section>"; }
    ?>
<section>
<div class="f-container">
<div class="f-accordion">
<?php
for ($i = 1; $i <= $nbtest; $i++) {
    $req = $pdo->prepare("SELECT MAX(id_Test_composant) FROM `test` WHERE id_Test='$i' AND identifiant='$re' ");
    $req->execute();
    $nbtestcomposants=$req->fetch(); ?>

        <div class="f-accordion-item" id="question1">
            <a class="f-accordion-link" href="#question1">
                <?php echo 'Test n° ',$i ?>






    <table width="630" align="left" bgcolor="#CCCCCC">

    <tr>

        <th>TEST</th>
        <th>NOTE</th>


    </tr>
    <?php
    foreach ($nbtestcomposants as $name => $value) {
        $nbtestcomposant = $value;
    }  /* selectionne le nombre de composant de test effectuer*/

        for ($y = 1; $y <= $nbtestcomposant; $y++) {
            $req = $pdo->prepare("SELECT type,score,date  FROM `test` WHERE id_Test_composant='$y' AND identifiant='$re' AND id_Test='$i' ");
            $req->execute();
            $composant=$req->fetch();
            $type=$composant->type;
            $score=$composant->score;
            $date=$composant->date;
            ?>
            <tr>

                <td ><?php echo $type ?></td>
                <td ><?php echo $score ?></td>


            </tr>


      <?php  }  ?>


    </table> <div><?php echo $date; ?> </div> </a></div>


        <?php } ?>
</div>
</section>

<?php } ?>
</body>
<?php include('footer.php'); ?>

</html>
