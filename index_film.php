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
				<h1>Recherche de film</h1>
			</div>

			<form action="index_film.php" method="post" id = "formulaire"> 
				<div class ="position-0">
					<a href ="index_film_avance.php">Rechercher par nom de films</a>
				</div>

				<div class ="position-1">
					<select name = "genre">
						<option value="null">Tous les films</option>
						<?php $genres = select_from("nom","genre ORDER BY nom");
						foreach($genres as $genre): ?>
							<option value = "<?= $genre['nom'] ?>"><?= $genre[0]; ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class ="position-2">
					<select name = 'distrib'>
						<option value="null">Tous les films</option>
						<?php $distribs = select_from("nom","distrib ORDER BY nom");
						foreach($distribs as $distrib): ?>
							<option value = "<?= $distrib['nom'] ?>"><?= $distrib[0]; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</form>

			<div class ="position-3">
				<div class ="ajust">
					<input form = "formulaire" type="submit" name ="submit" value="Voir les films">
				</div>
			</div>

			<div class ="position-4">
				<a href="index_film.php">Film</a>
				<a href="index_membre.php">Membre</a>
				<a href="index_abonnement.php">Abonnement</a>
				<a href="index_historique.php">Historique</a>
				<a href="index_avis.php">Avis</a>
				<a href="index_projection.php">Projection</a>
			</div>
		</div>

		<div class="film">

			<?php 

			$distribs = select_distrib(); 
			if(isset($_POST['distrib']) && $_POST['genre'] == "null")
			{ 
				foreach($distribs as $distrib): 
					echo $distrib['titre'] . "<br>";  
				endforeach; 
				
			}

			$genres = select_genre();
			if(isset($_POST['genre']) && $_POST['distrib'] == "null")
			{
				foreach($genres as $genre):
					echo $genre['titre'] . "<br>";
				endforeach; 
			}

			$allfilms = all_film();
			if(isset($_POST['genre']) && isset($_POST['distrib']) && $_POST['genre'] == "null" && $_POST['distrib'] == "null")
			{ 
				foreach($allfilms as $all_film):
					echo $all_film['titre'] . "<br>";
				endforeach;
			}
			
			$two = select_genre_and_distrib();
			if(isset($_POST['genre']) && isset($_POST['distrib']) && $_POST['genre'] && $_POST['distrib'])
			{ 
				foreach($two as $deux):
					echo $deux['titre'] . "<br>";
				endforeach; 
			}

			?>
		</div>
	</header>
</body>
</html>