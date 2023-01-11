<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="../assets/dist/css/header.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<div class="container">

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
    <img src="../assets/img/logo.png" alt="">  
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-dark">Accueil</a></li>
        <li><a href="produits.php" class="nav-link px-2 link-dark">Mes produits</a></li>
        <li><a href="quiSommesNous.php" class="nav-link px-2 link-dark">Qui sommes-nous</a></li>
        <li><a href="panier.php" class="nav-link px-2 link-dark">Panier</a></li>
      </ul>

      <div class="col-md-3" id="contient">
                <?php
                  
                    if(isset($_SESSION['validate']) && $_SESSION['validate']==1){
                      echo '<span id="welcome">Bienvenue  '.$_SESSION["mail"].'</span>';
                      echo '<a href="../model/deconnexion.php"><button type="button" id="btnDeconnexion" class="btn btn-outline-primary me-2">Deconnexion</button></a>';
                    }
                    else{
                      echo '<a href="connexion.php"><button type="button" id="btnConnexion" class="btn btn-outline-primary me-2">Se connecter</button></a>
                      <a href="inscription.php"><button type="button" id="btnInscription" class="btn btn-primary">Inscription</button></a>';
                    }      
                ?>

            </div>
    </header>
  </div>
<body>
</body>
</html>