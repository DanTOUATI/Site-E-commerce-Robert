<?php
include ('cnx.php');


$query = $cnx->prepare("SELECT * from produits where categorie='Ballons'");
$query->execute();
$ballons = $query->fetchAll(PDO::FETCH_ASSOC);


?>