<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("reservation");
	$queryAvion = mysql_query("SELECT * FROM avion");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Avion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>

<a id="accueil" href="../index.php">Accueil</a>
<a id="add_avion" href="action.php?action=create">Ajouter Avion</a>

<h2>Liste des avions</h2>
	<table>
		<tr>
			<th>Numero</th>
			<th>Type</th>
			<th>Actions</th>
		</tr>
		<?php	while ($dataAvion = mysql_fetch_array($queryAvion)) { ?>
		<tr>
			<td><?php echo $dataAvion['no_avion']; ?></td>
			<td><?php echo $dataAvion['type']; ?></td>
			<td>
				<a href="" >Ajouter une place</a>
				<a href="action.php?action=edit&no_avion=<?php echo $dataAvion['no_avion']; ?>" >Modifier</a>
				<a href="" >Supprimer</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

<?php mysql_close(); ?>