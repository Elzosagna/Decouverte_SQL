<?php
include('connexion.php');
include('index.php');
$dbh=Connexion();
$resultat=$dbh->query('SELECT * FROM information WHERE last_name="palmer"');
while($row =$resultat->fetch())
{
  echo '<table>';
  echo '<tr>';
  echo '<td>'.$row['first_name'].'<td>';
  echo '<td>'.$row['last_name'].'<td>';
  echo '</tr>';
  echo '</table>';
}
?>
