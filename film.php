<?php

include('bdd.php');


function select_genre()
{
	global $bdd;
	if(isset($_POST['genre']) && $_POST['distrib'] == "null")
	{
		$genres = $_POST['genre'];
		$sth = $bdd->prepare("SELECT titre FROM film LEFT JOIN genre ON film.id_genre = genre.id_genre WHERE genre.nom = :genre");
		$sth->bindParam(':genre', $genres);
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;	
	}
}

function select_distrib()
{
	global $bdd;
	if(isset($_POST['distrib']) && $_POST['genre'] == "null")
	{ 
		$distribs = $_POST['distrib'];
		$sth = $bdd->prepare("SELECT titre FROM film LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib WHERE distrib.nom = :distrib");
		$sth->bindParam(':distrib', $distribs);
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;
	}
}


function all_film()
{
	global $bdd;
	if(isset($_POST['genre']) && isset($_POST['distrib']) && $_POST['genre'] == "null" && $_POST['distrib'] == "null") 
	{ 
		$sth = $bdd->prepare("SELECT titre FROM film");
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;
	} 
}


function select_genre_and_distrib()
{
	global $bdd;
	if(isset($_POST['genre']) && isset($_POST['distrib']) && $_POST['genre'] && $_POST['distrib'])
	{ 
		$genres = $_POST['genre'];
		$distribs = $_POST['distrib'];
		$sth = $bdd->prepare("SELECT titre FROM film INNER JOIN distrib ON film.id_distrib = distrib.id_distrib INNER JOIN genre ON film.id_genre = genre.id_genre WHERE genre.nom = :genre AND distrib.nom = :distrib");
		$sth->bindParam(':genre', $genres);
		$sth->bindParam(':distrib', $distribs);
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;
	}
}

function recherche_de_film()
{
	global $bdd;
	if(isset($_POST['recherche']))
	{
		$titre = $_POST['recherche'];
		$sth = $bdd->prepare("SELECT * FROM film WHERE film.titre LIKE :titre");
		$sth->bindValue(':titre', "%" . $titre . "%");
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;
	}
}

function select_from($colonne, $table)
{
	global $bdd;
	$sth = $bdd->prepare("SELECT " . $colonne . " FROM " . $table);
	$sth->execute();
	return $sth->fetchAll();
}

?>