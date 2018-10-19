
<?php
function Connexion()
{
  $database = NULL;
  try
  {
  	$database = new PDO('mysql:host=localhost;dbname=acs;charset=utf8', 'root', '');
      $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $database;
  }
  catch (PDOException $e)
  {
          return -1;
  }
}

?>
