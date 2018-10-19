<?php
include('connexion.php');
include('index.php');
$dbh=Connexion();
$resultat=$dbh->query("SELECT * FROM information WHERE email LIKE '%google%' ");
while($row =$resultat->fetch())
{
  echo '<table>';
  echo '<tr>';
  echo '<td>'.$row['first_name'].'<td>';
  echo '<td>'.$row['last_name'].'<td>';
  echo '<td>'.$row['email'].'<td>';
  echo '</tr>';
  echo '</table>';
}
?>
