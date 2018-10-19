<?php
include('connexion.php');
include('index.php');
$dbh=Connexion();
$resultat=$dbh->query("SELECT country_code,COUNT(*) as nombre FROM information group by country_code order by nombre asc");
while($row =$resultat->fetch())
{
  echo '<table>';
  echo '<tr>';
  echo '<td>'.$row['country_code'].'<td>';
  echo '<td>'.$row['nombre'].'<td>';
  echo '</tr>';
  echo '</table>';
}
?>
