<?php
include('conf.php');

$bd = mysqli_connect(BDHOST, BDUSER, BDPASSWORD, BDNAME);

if(mysqli_connect_error()){
    print('Connexion à la base de donnée: KO'.mysqli_connect_error());
    exit();
}

