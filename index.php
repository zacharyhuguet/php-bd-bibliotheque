<?php

include('conf.php');

$bdd = mysqli_connect(BDHOST, BDUSER, BDPASSWORD, BDNAME);

if(mysqli_connect_error()){
    print('Connexion à la base de donnée: KO'.mysqli_connect_error());
    exit();
}

/*$resultat = mysqli_query($bdd, 'select * from Type_de_livre');
echo 'Il y a '.mysqli_num_rows($resultat). ' entrées dans la base de données <br/>';
while($donnees = mysqli_fetch_assoc($resultat)){
    echo $donnees['id_t'] . ' '.$donnees['libelle'].'</br>';
}
echo "<br/><a href='ajouter.php'>Ajouter</a>"
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des types de livres</title>
</head>
<body>

    
</body>
</html>
