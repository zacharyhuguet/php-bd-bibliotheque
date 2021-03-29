<?php
$bdd = mysqli_connect('mysql-allan-biville.alwaysdata.net', '230452_biblio', 'Bibliotheque50*', 'allan-biville_bibliotheque');
$resultat = mysqli_query($bdd, 'select * from Type_de_livre');
echo 'Il y a '.mysqli_num_rows($resultat). ' entrées dans la base de données <br/>';
while($donnees = mysqli_fetch_assoc($resultat)){
    echo $donnees['id_t'] . ' '.$donnees['libelle'].'</br>';
}
echo "<br/><a href='ajouter.php'>Ajouter</a>"

?>