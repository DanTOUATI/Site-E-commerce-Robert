<?php
include ('cnx.php');


$query = $cnx->prepare("SELECT * FROM produits WHERE id = ?");
$query->execute(array($_GET['id']));
$req = $query->fetchAll(PDO::FETCH_ASSOC);


?>