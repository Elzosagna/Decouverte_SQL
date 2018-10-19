<?php
include('connexion.php');
include('index.php');
$dbh=Connexion();
$resultat=$dbh->query('SELECT Nom, Prenom, Nom_dep FROM apprenant Inner JOIN departement on departement.Num_dep = apprenant.Num_dep');
while($row =$resultat->fetch())
{
  echo '<table>';
  echo '<tr>';
  echo '<td>'.$row['Nom'].'<td>';
  echo '<td>'.$row['Prenom'].'<td>';
  echo '<td>'.$row['Nom_dep'].'<td>';
  echo '</tr>';
  echo '</table>';
}
?>
