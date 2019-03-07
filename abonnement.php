<?php 

function abonnement_modifier()
{
	global $bdd;
	if (isset($_POST['rechercher-1']) && $_POST['rechercher-1'] != ""  && $_POST['rechercher-1'] <= 249)
	{
		if(isset($_POST['rechercher-2']) && $_POST['rechercher-2'] != "" && $_POST['rechercher-2'] <= 4)
		{
			$id = $_POST['rechercher-1'];
			$abo = $_POST['rechercher-2'];
			$sth = $bdd->prepare("UPDATE membre SET id_abo = :abo WHERE id_membre = :id");
			$sth->bindParam(':id', $id);
			$sth->bindParam(':abo', $abo);
			$sth->execute();
			echo "L'abonnement a bien été modifié";
		}

		else
		{
			echo "L'abonnement n'existe pas";
		}
	}

	else
	{
		echo "Le membre n'existe pas";
	}
}

function abonnement_supprimer()
{
	global $bdd;
	if (isset($_POST['rechercher-1']) && $_POST['rechercher-1'] != ""  && $_POST['rechercher-1'] <= 249)
	{
		if(isset($_POST['rechercher-2']) && $_POST['rechercher-2'] == "")
		{
			$id = $_POST['rechercher-1'];
			$sth = $bdd->prepare("UPDATE membre SET id_abo = NULL WHERE id_membre = :id");
			$sth->bindParam(':id', $id);
			$sth->execute();
			echo "L'abonnement a bien été supprimé";
		}

		else
		{
			echo "L'abonnement n'existe pas";
		}
	}

	else
	{
		echo "Le membre n'existe pas";
	}
}


function abonnement_ajouter()
{
	global $bdd;
	if (isset($_POST['rechercher-1']) && $_POST['rechercher-1'] != ""  && $_POST['rechercher-1'] <= 249)
	{
		if(isset($_POST['rechercher-2']) && $_POST['rechercher-2'] != "" && $_POST['rechercher-2'] <= 4)
		{
			$id = $_POST['rechercher-1'];
			$abo = $_POST['rechercher-2'];
			$sth = $bdd->prepare("UPDATE membre SET id_abo = :abo WHERE id_membre = :id");
			$sth->bindParam(':id', $id);
			$sth->bindParam(':abo', $abo);
			$sth->execute();
			echo "L'abonnement a bien été ajouté";
		}

		else
		{
			echo "L'abonnement n'existe pas";
		}
	}

	else
	{
		echo "Le membre n'existe pas";
	}
}