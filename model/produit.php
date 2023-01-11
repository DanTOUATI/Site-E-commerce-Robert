<?php
include ('cnx.php');


$query = $cnx->prepare("SELECT * from produits");
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);


?>