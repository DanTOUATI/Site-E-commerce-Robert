<?php
include ('../model/cnx.php');
include ('header.php');
include ('../model/crampon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/maillots.css">
    <title>Crampons</title>
</head>
<body>
<h1>Nos crampons</h1>
<div class="row row-cols-1 row-cols-md-5 g-4">   
    <?php
     foreach($crampons as $c)
     {
        echo 
        '<div class="col">
          <div class="card h-100">
            <div id="img"> 
              <img src="'.$c['img'].'" class="card-img-top" >
            </div>
            <div class="card-body">
              <h5 class="card-title">'.$c['nom'].'</h5>
            <div class="card-footer">
              <p class="card-text">'.$c['prix'].'€</p>
            </div>
          </div>
        </div>
      </div>';
     }
     ?>
      
  </div>
</body>
</html>