<?php 


include('bdd.php');

$perPage = 100;
$req = $bdd->query('SELECT COUNT(titre) AS titre FROM film');
$result = $req->fetch();
$total = $result['titre'];
$nbPage = ceil($total / $perPage);

if(isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p']) == 1)
{
	if($_GET['p'] > $nbPage)
	{
		$current = $nbPage;
	}

	else
	{
		$current = $_GET['p'];
	}
}

else
{
	$current = 1;
}

$firstOfPage = ($current - 1) * $perPage;
$reqProducts = $bdd->query("SELECT titre FROM film LIMIT $firstOfPage, $perPage");

