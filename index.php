<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("reservation");
	$queryVol = mysql_query("SELECT * FROM vol");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<a href="avion/list.php">Gérer Avion</a>
	<h2>Liste des vols</h2>
	<table>
		<tr>
			<th>Avion</th>
			<th>Ville de départ</th>
			<th>Ville d'arrivée</th>
			<th>Heure de départ</th>
			<th>Heure d'arrivée</th>
			<th>Actions</th>
		</tr>
		<?php	while ($dataVol = mysql_fetch_array($queryVol)) { ?>
		<tr>
			<td><img src="" alt="air mauritus"></td>
			<td><?php echo $dataVol['ville_depart'] ?></td>
			<td><?php echo $dataVol['ville_arrive'] ?></td>
			<td><?php echo $dataVol['heure_depart'] ?></td>
			<td><?php echo $dataVol['heure_arrive'] ?></td>
			<td>
				<a href="" >Modifier</a>
				<a href="" >Supprimer</a>
				<a href="" >Réserver une place</a>
			</td>
		</tr>
		<?php } ?>

	</table>
	
</body>
</html>

<?php mysql_close(); ?>