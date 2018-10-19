<?php
include('connexion.php');
include('index.php');
$dbh=Connexion();
$resultat=$dbh->query('SELECT DATEDIFF(CURRENT_DATE, birth_date)/365 as nombre FROM information');
while($row =$resultat->fetch())
{
  echo '<table>';
  echo '<tr>';
  echo '<td>'.intval($row['nombre']).'<td>';
  echo '</tr>';
  echo '</table>';
}
?>

<?php
$dbh=Connexion();
$resultat=$dbh->query('SELECT AVG(DATEDIFF(CURRENT_DATE, birth_date)/365) as nombre FROM information WHERE gender="Male"');
while($row =$resultat->fetch())
{
  echo '<table>';
  echo '<tr>';
  echo '<td>'.intval($row['nombre']).'<td>';
  echo '</tr>';
  echo '</table>';
}
?>

<?php
$dbh=Connexion();
$resultat=$dbh->query('SELECT AVG(DATEDIFF(CURRENT_DATE, birth_date)/365) as nombre FROM information WHERE gender="Female"');
while($row =$resultat->fetch())
{
  echo '<table>';
  echo '<tr>';
  echo '<td>'.intval($row['nombre']).'<td>';
  echo '</tr>';
  echo '</table>';
}
?>
