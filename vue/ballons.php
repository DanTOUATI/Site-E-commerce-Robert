<?php
include ('../model/cnx.php');
include ('header.php');
include ('../model/ballon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/maillots.css">
    <title>Ballons</title>
</head>
<body>
<h1>Nos ballons</h1>
<div class="row row-cols-1 row-cols-md-5 g-4">   
    <?php
     foreach($ballons as $b)
     {
        echo 
        '<div class="col">
          <div class="card h-100">
            <div id="img"> 
              <img src="'.$b['img'].'" class="card-img-top" >
            </div>
            <div class="card-body">
              <h5 class="card-title">'.$b['nom'].'</h5>
            <div class="card-footer">
              <p class="card-text">'.$b['prix'].'€</p>
            </div>
          </div>
        </div>
      </div>';
     }
     ?>
      
  </div>
</body>
</html>