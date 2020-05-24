<head>

    <meta charset="utf-8" />
    <title>Eyeco</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="gestionloginStyle.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>


</head>

<body>

    <?php include('header.php');?>
<div class="gestion">
    <div class ="g-form">
        <?php
        $dejaAfficher = 0;	//Bool True si form afficher via le bouton "rechercher"
        if (isset($_POST['rechercher'])){


            if(isset($_POST['id_user'])){
                $rech=$_POST['id_user'];}

            $req = $pdo->prepare("SELECT * FROM user WHERE identifiant='$rech'");
            $req->execute();
            $alluser= $req->fetchAll();
            $ALLUSERS=array('');

            foreach($alluser as $allUSER):
                foreach($allUSER as $intermediare):
                    array_push($ALLUSERS,$intermediare) ;
                endforeach;
            endforeach;

            if (!($rech=='') && !(count($ALLUSERS)==1)){
                $dejaAfficher = 1;
                ?> <!-- Vérif si $ALLUSERS[8] fait pas une erreur ou laisse passer alors que pas initialisé -->

                <form id='form1' name='form1' method='post' action='gestionlogin.php'>
                    <table width='420' border='0'>
                        <tr>
                            <td width='169' bgcolor='#CCCCCC'><label>
                                    <input name='rechercher' type='submit' id='rechercher' value='Rechercher' />
                                </label></td>
                            <td width='369' bgcolor='#CCCCCC'><label>
                                    <input name='id_user' type='text' id='id_user' value='<?php echo $ALLUSERS[8]; ?>' />
                                </label>Recherche par nom</td>
                        </tr>
                        <tr>
                            <td>Nom</td>
                            <td><label>
                                    <input name='nom' type='text' id='nom'  value='<?php echo $ALLUSERS[2]; ?>'/>
                                </label></td>
                        </tr>
                        <tr>
                            <td>Prénom</td>
                            <td><label>
                                    <input name='prenom' type='text' id='prenom' value='<?php echo $ALLUSERS[3]; ?>' />
                                </label></td>
                        </tr>
                        <tr>
                            <td>Identifiant</td>
                            <td><label>
                                    <input name='identifiant' type='text' id='identifiant' value='<?php echo $ALLUSERS[8]; ?>' />
                                </label></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input name='email' type='text' id='email' value='<?php echo $ALLUSERS[4]; ?>' /></td>
                        </tr>
                        <tr>
                            <td>Code pilote</td>
                            <td><input name='codepilote' type='text' id='codepilote' value='<?php echo $ALLUSERS[6]; ?>' /></td>
                        </tr>
                        <tr>
                            <td colspan='2'><label>


                                    <input name='modifier' type='submit' id='modifier' value='Modidier' />
                                    <input name='supprimer' type='submit' id='supprimer' value='Supprimer' />
                                </label></td>
                        </tr>
                    </table>
                    <p> </p>
                </form>
                <?php
            }
            else
            {
                echo '<body onLoad=" alert(\'Client introuvable...\') "> ';
                echo '<meta http-equiv="refresh" content="0;URL=gestionlogin.php">';
            }
        } else { //On est arriver sur la page soit par un autre bouton que "Rechercher" (ex : modif/suppr), soit via un URL en général

            if (isset($_POST['modifier'])){ //Bouton "modifier"
                $rech=$_POST['id_user'];
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $identifiant=$_POST['identifiant'];
                $email=$_POST['email'];
                $codepilote=$_POST['codepilote'];
                if($nom=='' || $prenom=='' || $identifiant=='' || $email=='' || $codepilote=='')
                {

                    echo '<body onLoad="alert(\'faire une recherch avant la modification ou verifiez les champs\')">';
                    echo '<meta http-equiv="refresh" content="0;URL=gestionlogin.php">';
                } else {
                    $req = $pdo->prepare("UPDATE user SET nom='$nom',prenom='$prenom',identifiant='$identifiant',email='$email',codepilote='$codepilote' where identifiant ='$rech'");
                    $req->execute();

                    echo '<body onLoad="alert(\'Modification effectuée...\')">';
                    echo '<meta http-equiv="refresh" content="0;URL=gestionlogin.php">';
                }
            }

            if(isset($_POST['supprimer'])) //bouton "supprimer"
            {
                $rech=$_POST['id_user'];

                $req = $pdo->prepare("DELETE  FROM user  where identifiant ='$rech'");
                $req->execute();

                echo '<meta http-equiv="refresh" content="0;URL=gestionlogin.php">';
            }
        }

        if($dejaAfficher == 0){
            ?>
            <form id='form1' name='form1' method='post' action='gestionlogin.php'>
                <table width='500' border='0'>
                    <tr>
                        <td width='169' bgcolor='#CCCCCC'><label>
                                <input name='rechercher' type='submit' id='rechercher' value='Rechercher' />
                            </label></td>
                        <td width='369' bgcolor='#CCCCCC'><label>
                                <input name='id_user' type='text' id='id_user' value='' />
                            </label>Recherche par nom</td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td><label>
                                <input name='nom' type='text' id='nom'  value=''/>
                            </label></td>
                    </tr>
                    <tr>
                        <td>Prénom</td>
                        <td><label>
                                <input name='prenom' type='text' id='prenom' value='' />
                            </label></td>
                    </tr>
                    <tr>
                        <td>Identifiant</td>
                        <td><label>
                                <input name='identifiant' type='text' id='identifiant' value='' />
                            </label></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input name='email' type='text' id='email' value='' /></td>
                    </tr>
                    <tr>
                        <td>Code pilote</td>
                        <td><input name='codepilote' type='text' id='codepilote' value='' /></td>
                    </tr>
                    <tr>
                        <td colspan='2'><label>


                                <input name='modifier' type='submit' id='modifier' value='Modidier' />
                                <input name='supprimer' type='submit' id='supprimer' value='Supprimer' />
                            </label></td>
                    </tr>
                </table>
                <p> </p>
            </form>
        <?php } ?>
    </div>



    <div class="g-all">
        <!-- Affichage de tous les users -->
        <?php  $req = $pdo->prepare("SELECT * FROM user ");
        $req->execute();
        $alluser= $req->fetchAll();$ALLUSERS=array('');
        foreach($alluser as $allUSER):


            foreach($allUSER as $intermediare): array_push($ALLUSERS,$intermediare) ;

            endforeach;
        endforeach;

        ?>
        <table width="630" align="left" bgcolor="#ADD8E6">
            <tr >

                <td width="152">Nom</td>
                <td width="66">Prénom</td>
                <td width="248">Identifiant</td>
                <td width="42">Email</td>
                <td width="42">Code pilote</td>

            </tr>
            <?php
            $test=0;
            $row=1;
            $var=0;
            $count=count($ALLUSERS);
            ?>

            <?php while($test<$count){
                if ($var==0){ ?>

                    <tr >
                        <td><?php $row=$row+1; echo $ALLUSERS[$row]; ?></td>
                        <td><?php $row=$row+1; echo $ALLUSERS[$row];  ?></td>
                        <td><?php $row=$row+5; echo $ALLUSERS[$row];  ?></td>
                        <td><?php $row=$row-4; echo $ALLUSERS[$row];  ?></td>
                        <td><?php $row=$row+2; echo $ALLUSERS[$row];$row=$row+3;  ?></td>
                    </tr>
                    <?php 	$var=1;
                }else{ ?>

                    <tr bgcolor="#FFCCCC">
                        <td><?php $row=$row+1; echo $ALLUSERS[$row];  ?></td>
                        <td><?php $row=$row+1; echo $ALLUSERS[$row];  ?></td>
                        <td><?php $row=$row+5; echo $ALLUSERS[$row];  ?></td>
                        <td><?php $row=$row-4; echo $ALLUSERS[$row];  ?></td>
                        <td><?php $row=$row+2; echo $ALLUSERS[$row]; $row=$row+3; ?></td>
                    </tr><undefined></undefined>
                    <?php 	$var=0;
                }
                $test=$row;
            } ?>
        </table>
    </div>
    <div class="g-button">
        <a href="statistique.php" class="g-button-start"><?php if ($_SESSION['langue'] == 'francais')
            {
                echo "Statistiques";
            }
            else
            {
                echo "Statistics";
            }
            ?></a>

    </div>
</div>


<?php include ('footer.php'); ?>
<script src="app.js" charset="utf-8"></script>
</body>
