<?php
include('connexion.php');
include('index.php');
$dbh=Connexion();
$resultat=$dbh->query("SELECT gender, COUNT(*) as nombre FROM information group by gender order by nombre asc");
while($row =$resultat->fetch())
{
  echo '<table>';
  echo '<tr>';
  echo '<td>'.$row['gender'].'<td>';
  echo '<td>'.$row['nombre'].'<td>';
  echo '</tr>';
  echo '</table>';
}
?>
