<?php

session_start();
include_once('connect.php');

if ($_GET) {
    # code...
}
// $sql = 'SELECT Id, libellé FROM Type_du_livre;';
// $result = mysqli_query($bd,$sql);

include_once('close.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
</head>
<body>
<form action="ajouter.php" method="get">

<input type="text" name="libellé">


</form>
    
</body>
</html>