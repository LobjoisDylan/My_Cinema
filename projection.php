<?php

function projection()
{
	global $bdd;
	if(isset($_POST['projection']) && $_POST['projection'] != "")
	{
		$projection = $_POST['projection'];
		$sth = $bdd->prepare("SELECT * FROM historique_membre INNER JOIN film ON historique_membre.id_film = film.id_film WHERE historique_membre.date = :projection");
		$sth->bindParam(':projection', $projection);
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;
		echo "projection faite";
	}
}

?>