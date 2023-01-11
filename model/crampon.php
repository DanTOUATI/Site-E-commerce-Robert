<?php
include ('cnx.php');


$query = $cnx->prepare("SELECT * from produits where categorie='Crampons'");
$query->execute();
$crampons = $query->fetchAll(PDO::FETCH_ASSOC);


?>