<?php
mysql_connect("localhost", "root", "");
mysql_select_db("reservation");
// On ajoute une entrée avec mysql_query
mysql_query("INSERT INTO personnes VALUES(".$_POST['nom'].",".$_POST['prenom'].")");
mysql_close();
?>