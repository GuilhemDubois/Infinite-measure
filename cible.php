<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=eyeco ;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$_SESSION['conect'] =TRUE;







?>
