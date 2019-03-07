<?php

include('bdd.php');

function historique()
{
	global $bdd;
	if(isset($_POST['recherche']))
	{
		$historiques = $_POST['recherche'];	
		$sth = $bdd->prepare("SELECT * FROM historique_membre LEFT JOIN film ON historique_membre.id_film = film.id_film WHERE historique_membre.id_membre = :historique");
		$sth->bindParam(':historique', $historiques);
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;
	}
}

?>