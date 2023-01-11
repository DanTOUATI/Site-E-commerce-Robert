<?php
include ('cnx.php');


$query = $cnx->prepare("SELECT * from produits where categorie='Maillots'");
$query->execute();
$maillots = $query->fetchAll(PDO::FETCH_ASSOC);


?>