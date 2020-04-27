<?php
include('header.php'); ?>



<table width="630" align="left" bgcolor="#CCCCCC">
    <tr >


        <th width="248">Identifiant</th>


    </tr>
<?php  $req = $pdo->prepare("SELECT identifiant FROM user ");
$req->execute();
$alluser= $req->fetchAll();
$var=1;
foreach($alluser as $allUSER):
    $identifiant=$allUSER->identifiant;
         if ($var==0){ ?>

    <tr >
        <td width="248"> <?php echo $identifiant ?></td>
    </tr>
    <?php 	$var=1;
    }else{ ?>

    <tr bgcolor="#FFCCCC">
        <td width="248"><?php echo $identifiant ?></td>
    </tr><undefined></undefined>
    <?php 	$var=0;
    }
endforeach;
    ?>
    <form id='form1' name='form1' method='post' action='gestionResultat.php'>


                <td width='169' bgcolor='#CCFF00'>

                        <input name='identifiant' type='text' id='rechercher'  />
                        <input name='rechercher' type='submit' id='rechercher' value='Rechercher' />
                    </td>
    </form>
</table>
