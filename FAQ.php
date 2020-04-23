<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Foire aux questions</title>
    <link rel="stylesheet" href="headerStyle.css"/>
    <link rel="stylesheet" href="footerStyle.css"/>
    <link rel="stylesheet" href="FAQ.css"/>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>



                Question de <?php echo $listQuestions[3],' le ', $listQuestions[4]?><br>
                <?php echo $listQuestions[1]; ?><br>
                <?php echo $listQuestions[2]; ?><br><br><br><br>

            </div>

            <?php unset($listQuestions);?>
            <?php endforeach;?>


            <?php if(isset($_SESSION['auth'])): ?>
                <?php $admi=$_SESSION['auth']->admin  /*TEST authentifier*/?>
                <?php if($admi=1): /* Test admin */ ?>
                    <a class = "askquest" href = "reponse.php" title = "Repondre Question">Repondre Question</a>
                <?php endif; ?>
                <?php if($admi=0): /* Test non admin */ ?>
                    <a class = "askquest" href = "question.php" title = "Repondre Question">Poser Question</a>
                <?php endif; ?>

            <?php endif; ?>

            <?php if(!isset($_SESSION['auth'])):  ?>
                <a class = "askquest" href = "VotreProfil.php" title = "Poser Question">Poser Question</a>
            <?php endif; ?>
    </div>










    <br /><br /><br /><br /><br /><br />








    <?php include ('footer.php'); ?>

</body>
</html>