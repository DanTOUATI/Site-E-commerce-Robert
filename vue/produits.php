<?php  
include ('../model/cnx.php');
include ('header.php');
include ('../model/produit.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/produits.css">
    <title>Produits</title>

</head>
<body>
    <div class="title2">
      <p class="title">Mes produits</p>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4">   
    <?php
     foreach($produits as $p)
     {
        echo 
        '<div class="col">
        <a href="ficheProduit.php?id='.$p["id"].'">
          <div class="card h-100">
            <div id="img"> 
              <img src="'.$p['img'].'" class="card-img-top" >
            </div>
            <div class="card-body">
              <h5 class="card-title">'.$p['nom'].'</h5>
            <div class="card-footer">
              <p class="card-text">'.$p['prix'].'€</p>
            </div>
          </div>
        </div>
      </div>';
     }
     ?>
      
  </div>
</body>
<hr>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="">En haut</a></p>
        <p>&copy; 2022 TOUATI Dan, &middot; Privée</p>
    </footer>

</html>