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
		include('pagination.php');
		?>
		<div class ="wrapper">
			<div class = "cinemarechercher">
				<h1>Recherche de film avancé</h1>
			</div>

			<form action="index_film_avance.php" method="post" id = "formulaire"> 
				<div class ="position-10">
					<input type="text" name="recherche" placeholder="titre de film...">
				</div>
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
			</form>
		</div>


		<div class="film">
			<?php $titres = recherche_de_film();
			if(isset($_POST['recherche']))
			{
				foreach($titres as $titre):
					echo $titre['titre'];
					echo " durée du film: " . $titre['duree_min'] . "min ";
					echo "produit en " . $titre['annee_prod'] . "<br>";
				endforeach;
			}

			?> 
			<div class ="pagination"> 
				<?php
				for($i = 1; $i <= $nbPage; $i++)
				{
					if($i == $current)
					{
						?>

						<ul class="list-unstyled">
							<li class="active"><a href='?p=<?php echo $i ?>'><?php echo $i ?></a></li>
						</ul>
						<br>
						<?php
					}

					else
					{
						?>
						<ul class="list-unstyled">
							<li><a href='?p=<?php echo $i ?>'><?php echo $i ?></a></li>
						</ul>
						<br>
						<?php
					}
				}
				if(isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p']) == 1)
				{
					while($products = $reqProducts->fetch())
					{
						echo $products['titre'] . '<br>';
					}
				}
				?>
			</div>
		</div>
	</header>
</body>
</html>