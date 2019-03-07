<!DOCTYPE html> 
<html lang="fr">
<head>
	<meta charset="UTF-8"> 
	<title>Cinema</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="script.js"></script>
</head> 

<body>
	<header>
		<?php 
		include('film.php'); 
		include('membre.php');
		include('historique.php');
		?>
		<div class ="wrapper">
			<div class = "cinemarechercher">
				<h1>Recherche de l'abonnement</h1>
			</div>

			<form action="index_abonnement.php" method="post" id = "formulaire"> 
				<div class ="position-0">
					<a href ="index_ajouter.php">Ajouter</a>
					<a href ="index_supprimer.php">Supprimer</a>
					<a href ="index_modifier.php">Modifier</a>
				</div>

				<div class ="position-4">
					<a href="index_film.php">Film</a>
					<a href="index_membre.php">Membre</a>
					<a href="index_abonnement.php">Abonnement</a>
					<a href="index_historique.php">Historique</a>
					<a href="index_avis.php">Avis</a>
					<a href="index_projection.php">Projection</a>
				</div>
			</form>
		</div>

		<div class="film">
		</div>
	</header>
</body>
</html>