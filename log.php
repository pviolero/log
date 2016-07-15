<?php
// recuperation de la clef en argument

$valeur=$_GET['key'];

// ouverture DB

// ouverture DB

try
{
	$db = new PDO('mysql:host=localhost;dbname=log;charset=utf8', 'log', 'log');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ajout de la valeur

$sql = 'INSERT INTO `log`.`log` (`valeur`, `date`, `time`) VALUES (\'' . $valeur . '\', CURRENT_DATE(), CURRENT_TIME());';

echo 'SQL=' . $sql;

$db->exec($sql)

 ?>