<?php
session_start();

if((isset($_GET['Id'])) && !empty($_GET['Id'])){
    $Id = strip_tags($_GET['Id']);
    
    include_once('connect.php');

    $sql = 'SELECT Id, libelle FROM Type_du_livre WHERE Id =?;';

    $stmt = mysqli_prepare($bd, $sql);

    mysqli_stmt_bind_param($stmt, 'i',$Id);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $Id, $libelle);

    mysqli_stmt_fetch($stmt);

    include_once('close.php');

    if(!$libelle){
        $_SESSION['Erreur']="Ce type de livre n'existe pas";
        header('Location: index.php');
        exit();
    }



} else{
    $_SESSION['Erreur']="URL ivalide";
    header('Location: index.php');
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Detail</title>
</head>
<body>

<main class="container">
<div class="row">
<section class="col-12">
<h1>Détail du type de livre<?php print($libelle); ?></h1>
<p>Id : <?php print($Id) ?></p>
<p>Libellé : <?php print($libelle) ?></p>
<p>
<a class="btn btn-primary" href="index.php">Retour à la liste</a>
<a class="btn btn-primary" href="edit.php?Id=<?php print($Id); ?>">Modifier</a>

</section>
</div>
</main>



</form>
    
</body>
</html>