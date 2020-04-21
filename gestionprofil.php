<html>
<head>
    <?php include'header.php';?>

    <style type="text/css">
        <!--
        .Style4 {font-size: 12px}
        -->
    </style>
</head>

<body>
<form id="form1" name="form1" method="post" action="code.php">
    <table width="420" border="0">
        <tr>
            <td width="169" bgcolor="#CCFF00"><label>
                    <input name="rechercher" type="submit" id="rechercher" value="Rechercher" />
                </label></td>
            <td width="369" bgcolor="#CCFF00"><label>
                    <input name="t_rechercher" type="text" id="t_rechercher" />
                    <span class="Style4">      Recherche par nom</span> </label></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><label>
                    <input name="t_nom" type="text" id="t_nom" />
                </label></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><label>
                    <input name="t_prenom" type="text" id="t_prenom" />
                </label></td>
        </tr>
        <tr>
            <td>Identifiant</td>
            <td><label>
                    <input name="Identifiant" type="identifiant" id="identifiant" />
                </label></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" type="email" id="email" /></td>
        </tr>
        <tr>
            <td>Code pilote</td>
            <td><input name="Codepilote" type="codepilote" id="codepilote" /></td>
        </tr>
        <tr>
        <tr>
            <td colspan="2"><label>
                    <input name="nouveau" type="reset" id="nouveau" value="Nouveau" />
                    <input name="ajouter" type="submit" id="ajouter" value="Ajouter" />
                    <input name="modidier" type="submit" id="modidier" value="Modifier" />
                    <input name="supprimer" type="submit" id="supprimer" value="Supprimer" />
                </label></td>
        </tr>
    </table>
    <p> </p>
</form>
<?php  $req = $pdo->prepare('SELECT * FROM user ');
$req->execute();
$alluser= $req->fetchAll();$ALLUSERS=array('');
 foreach($alluser as $allUSER):


foreach($allUSER as $intermediare): array_push($ALLUSERS,$intermediare) ;
         
 endforeach;
 endforeach;

?>


<table width="630" align="left" bgcolor="#CCCCCC">
    <tr >

        <td width="152">Nom</td>
        <td width="66">Prénom</td>
        <td width="248">Identifiant</td>
        <td width="42">Email</td>
        <td width="42">Code pilote</td>

    </tr>
    <?php
    $row=1;
    $var=0;
    ?>

    <?php  while($row<count($ALLUSERS)):
        ?>


        <?php if ($var==0):
             $var=1;?>


            <tr >

                <td><?php $row=$row+1; echo  $ALLUSERS[$row] ; ?></td>
                <td><?php $row=$row+1; echo $ALLUSERS[$row];  ?></td>
                <td><?php $row=$row+5; echo $ALLUSERS[$row];  ?></td>
                <td><?php $row=$row-4; echo $ALLUSERS[$row];  ?></td>
                <td><?php $row=$row+2; echo $ALLUSERS[$row];$row=$row+3;  ?></td>
            </tr>
        <?php endif;?>

        <?php if ($var==1):  ?>


            <tr bgcolor="#FFCCCC">
                <td><?php $row=$row+1; echo   $ALLUSERS[$row];  ?></td>
                <td><?php $row=$row+1; echo $ALLUSERS[$row];  ?></td>
                <td><?php $row=$row+5; echo $ALLUSERS[$row];  ?></td>
                <td><?php $row=$row-4; echo $ALLUSERS[$row];  ?></td>
                <td><?php $row=$row+2; echo $ALLUSERS[$row] ;$row=$row+3; ?></td>
            </tr><undefined></undefined>
        <?php $var=0; endif;?>
    <?php  endwhile;?>


</table>
</body>
</html>



