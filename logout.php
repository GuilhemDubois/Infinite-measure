<?php
include('header.php');
unset($_SESSION['auth']);
header('LOCATION: Connexion.php');
