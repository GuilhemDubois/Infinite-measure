<!DOCTYPE html>
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

</head>

<body>



<?php include('header.php'); ?>




<div id="apropos">


    Résultats

</div>

<div id="barre">

</div>


<table summary="exemple de structure d'un tableau de données 2 lignes, 2 colonnes">
    <caption></caption>

    <tr>
        <th>TEST</th>
        <th>NOTE</th>
    </tr>

    <tr>
        <td>Temps de réaction à un stimulus visuel</td>
        <td>/40</td>

    </tr>

    <tr>
        <td>Temps de réaction à un stimulus sonore</td>
        <td>/30</td>
    </tr>

    <tr>
        <td>Reconnaissance de tonalité</td>
        <td>/20</td>
    </tr>

    <tr>
        <td>Gestion du stress</td>
        <td>/10</td>
    </tr>

    <tr>
        <td>TOTAL</td>
        <td id="total">/100</td>
    </tr>

</table>



</body>
<?php include('footer.php'); ?>

</html>
