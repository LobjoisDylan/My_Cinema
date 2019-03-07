<?php

include('bdd.php');

function select_from($colonne, $table)
{
	global $bdd;
	$sth = $bdd->prepare("SELECT " . $colonne . " FROM " . $table);
	$sth->execute();
	return $sth->fetchAll();
}

?>