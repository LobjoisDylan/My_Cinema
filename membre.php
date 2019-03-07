<?php

include('bdd.php');


function recherche_de_membre_prenom()
{
	global $bdd;
	if(isset($_POST['recherche']))
	{
		$prenom = $_POST['recherche'];
		$sth = $bdd->prepare("SELECT * , fiche_personne.nom AS fp FROM membre INNER JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso INNER JOIN abonnement ON membre.id_abo = abonnement.id_abo WHERE fiche_personne.prenom = :prenom");
		$sth->bindParam(':prenom', $prenom);
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;
	}
}

function recherche_de_membre_nom()
{
	global $bdd;
	if(isset($_POST['recherche']))
	{
		$noms = $_POST['recherche'];
		$sth = $bdd->prepare("SELECT * , fiche_personne.nom AS fp FROM membre INNER JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso INNER JOIN abonnement ON membre.id_abo = abonnement.id_abo WHERE fiche_personne.nom = :nom");
		$sth->bindParam(':nom', $noms);	
		$sth->execute();
		$donnees = $sth->fetchAll();
		return $donnees;
	}
}

?>