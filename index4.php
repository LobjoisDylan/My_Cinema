<!DOCTYPE html> 
<html lang="fr">
<head>
	<meta charset="UTF-8"> 
	<title>Cinema</title>
	<link href="styless.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="script.js"></script>
</head> 

<body>
	<header>
		<?php 
		include('film.php'); 
		include('membre.php');
		include('vip.php'); 
		include('historique.php');
		?>
		<div class ="wrapper">
			<div class = "cinemarechercher">
				<h1>Recherche de film</h1>
			</div>

			<form action="index.php" method="post" id = "formulaire"> 
				<div class ="position-0">
					<input type="text" name="recherche">
				</div>
				<div class ="position-3">
					<div class ="ajust">
						<input form = "formulaire" type="submit" name ="submit" value="Voir les films">
					</div>
				</div>

				<div class ="position-4">
					<a href="index2.php">Membre</a>
					<a href="index4.php">Abonnement</a>
					<a href="index5.php">Historique</a>
					<a href="index6.php">Avis</a>
				</div>
			</form>
		</div>


		<div class="film">
			
		</div>
	</header>
</body>
</html>