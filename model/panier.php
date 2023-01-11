<?php 
include ('cnx.php');


if (isset($_POST['envoyer']))
{
    $query= "INSERT INTO panier (`id_produit`) VALUES (".$_GET['id'].")";
    $stmt= $cnx ->prepare($query);
    $stmt->execute();

}

$query = $cnx->prepare("SELECT * FROM `panier`as a ,produits as b WHERE a.id_produit = b.id;");
$query->execute();
$panier = $query ->fetchAll(PDO::FETCH_ASSOC);


$query = $cnx->prepare("SELECT SUM(prix) as somme FROM `panier`as a ,produits as b WHERE a.id_produit = b.id;");
$query->execute();
$prix = $query->fetchAll(PDO::FETCH_ASSOC);


?>
