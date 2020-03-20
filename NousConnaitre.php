<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>  <?php if ($_SESSION['langue'] == 'francais')
        {
            echo "A PROPOS";

        }
        else
        {
            echo "ABOUT US";

        }
        ?></title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="NousConnaitreStyle.css"/>

</head>

<body>

<?php include('header.php'); ?>


<?php include('footer.php'); ?>


<div class="apropos">
    <?php if ($_SESSION['langue'] == 'francais')
    {
        echo "NOTRE EQUIPE";

    }
    else
    {
        echo "OUR CREW";

    }
    ?>

</div>

<div class="barre">

</div>

<div class="photos">

    <div class="julian"> <a><img src="images/julian.jpg" alt="Julian" title="Julian Serain"/></a> </div>
    <div class="etienne"> <a><img src="images/etienne.jpg" alt="Etienne" title="Etienne Roure"/></a> </div>
    <div class="louis"> <a><img src="images/louis.jpg" alt="Louis" title="Louis Lauer"/></a> </div>
    <div class="guilhem"> <a><img src="images/guilhem.jpg" alt="Guilhem" title="Guilhem Dubois"/></a> </div>
    <div class="benoit">  <a><img src="images/benoit.jpg" alt="Benoit" title="Benoit Gourlin"/></a> </div>
    <div class="philippe"> <a><img src="images/philippe.jpg" alt="Philippe" title="Philippe Saraiva"/></a> </div>

</div>

</body>


</html>

