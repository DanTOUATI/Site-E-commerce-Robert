<?php
include ('../model/cnx.php');
include ('header.php');
include ('../model/ficheProd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/ficheProduit.css">
    <title>Produit</title>
</head>
<body>

<?php

if(isset($_POST['envoyer'])):
    include ('../model/panier.php');
    header('Location:produits.php');
endif;

foreach($req as $r)
{  
    $_SESSION = $_GET['id'];
    echo
            '<div class="imageProd">
                <img class="image" src=" '.$r['img'].'">
            </div >
                    <div class="content">
                        <h5 class="titre"> '.$r['nom'].' '.$r['marque'].'</h5>
                        <p class="des">'.$r['description'].'</p>
                        <p class="size">Taille : '.$r['taille'].'</p>
                        <p class="price">Prix : '.$r['prix'].'€</p>
                        <form method="POST">
                        <div id="btn">
                            <input name="envoyer" id="btnPanier" type="submit" value="Ajouter au panier" class="btn btn-outline-primary me-2" >
                        </div>
                        </form>
                    </div>
            </div>';
}

?>
</body>
</html>