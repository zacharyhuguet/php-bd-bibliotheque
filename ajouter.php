<?php
session_start();

if ( (isset($_POST['label'])) && !empty($_POST['label'])) ) {
$_SESSION['message']='Nouveau type de livre : "'. $_POST['label'] . '"';

include_once 'connect.php';

$sql = "INSERT INTO Type_du_livre (libele) VALUE (?, ?)";
$stmt = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($stmt,'s',$label);

mysqli_stmt_execute($stmt);
myslqi_stmt_close($stmt);

} catch(exeption $e){
$_SESSION['erreur']="Une erreur est intervenue : " . $e ->getMessage();
}




else{
    $_SESSION['message']='Not empty - aucun type de livre : n\' a été saisi';
}




include_once 'close.php';

header('Location: index.php');
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Ajouter</title>
</head>
<body>

<main class="container">
<div class="row">
<section class="col-12">

<?php
session_start();



} else{
    $_SESSION['Erreur']="URL ivalide";
    header('Location: index.php');
    exit();
}


?>


<h1>Ajouter un type de livre</h1>
<form method="POST">
<div class="mb-2">
<label>Libellé</label>
<input type="text" Id="label" class="form-control"><div>
</div>
<button class="bts btn info"></button>
</form>

    
</body>
</html>