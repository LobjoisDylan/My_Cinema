<?php

function avis()
{
	if(isset($_POST['rechercher-1']) && $_POST['rechercher-1'] != "")
	{
		if(isset($_POST['rechercher-2']) && $_POST['rechercher-2'] != "")
		{
			if(isset($_POST['rechercher-3']) && $_POST['rechercher-3'] != "")
			{
				global $bdd;
				$id_membre = $_POST['rechercher-1'];
				$id_film = $_POST['rechercher-2'];
				$avis = $_POST['rechercher-3'];
				$sth = $bdd->prepare("UPDATE historique_membre SET avis = :avis WHERE id_membre = :id_membre AND id_film = :id_film");
				$sth->bindParam(':id_membre', $id_membre);
				$sth->bindParam(':id_film', $id_film);
				$sth->bindParam(':avis', $avis);
				$sth->execute();
				echo "l'avis a bien été ajouté";
			}

			else
			{
				
			}
		}
	}
}

?>