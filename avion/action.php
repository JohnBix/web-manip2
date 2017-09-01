<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("reservation");
	$avionType = '';
	$avionNbplace = '';
	$title = 'Ajouter';
	// action form
	if(!empty($_POST)){
		if($_GET['action']=='create'){
			mysql_query("INSERT INTO avion VALUES('".str_replace(' ', '_', $_POST['type'])."_".$_POST['nb_place']."', '".$_POST['type']."', '".$_POST['nb_place']."')");
		}else{
			mysql_query("UPDATE avion SET type='".$_POST['type']."', nb_place='".$_POST['nb_place']."' WHERE no_avion=".$_GET['no_avion']);
		}
	}
	// set form default value
	if($_GET['action']=='edit'){
		$queryAvion = mysql_query("SELECT * FROM avion WHERE no_avion=".$_GET['no_avion']);
		$avion = mysql_fetch_array($queryAvion);
		$avionType = $avion['type'];
		$avionNbplace = $avion['nb_place'];
		$title = 'Modifier';	
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Avion</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php var_dump($_POST); var_dump($_GET); //var_dump($avion);?>
		<a href="../index.php">Accueil</a>

		<h2><?php echo $title ?> un avion</h2>

		<form method="post" action="action.php?action=<?php echo $_GET['action'] ?>&no_avion=<?php echo isset($_GET['no_avion'])?$_GET['no_avion']:0 ?>">
			<label>Type</label>
			<input type="text" name="type" value="<?php echo $avionType ?>"><br><br>
			<label>Nombre de places</label>
			<input type="text" name="nb_place" value="<?php echo $avionNbplace ?>"><br><br>
			<input type="submit" value="<?php echo $title ?>">
		</form>

	</body>
</html>

<?php mysql_close(); ?>