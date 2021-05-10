<?php

session_start();
include_once('connect.php');



/*$resultat = mysqli_query($bdd, 'select * from Type_de_livre');
echo 'Il y a '.mysqli_num_rows($resultat). ' entrées dans la base de données <br/>';
while($donnees = mysqli_fetch_assoc($resultat)){
    echo $donnees['id_t'] . ' '.$donnees['libelle'].'</br>';
}
echo "<br/><a href='ajouter.php'>Ajouter</a>"
*/

$sql = 'SELECT Id, libelle FROM Type_du_livre;';
$result = mysqli_query($bd,$sql);

include_once('close.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Liste des types de livres</title>
</head>
<body>

<div class="container">
<table class="table">
    <thead>
      <th>Id</th>
      <th>Libelle</th>
      <th>Action</th>
    </thead>
<?php
foreach($result as $type){
?>   
 <tr>
 <td><?php print($type['Id']); ?></td>
 <td><?php print($type['libelle']); ?></td>
 <td><a href="detail.php?Id=<?php print($type['Id']); ?>">voir</a> <a href="edit.php?Id=<?php print($type['Id']); ?> ">Modifier</a> Supprimer </td>
 </tr>
 
<?php } ?>


</table>
<div>
<a href="ajouter.php">Ajouter</a>
</body>
</html>