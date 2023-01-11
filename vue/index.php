<?php  
include ('../model/cnx.php');
include ('header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/index.css">
    <title>Accueil</title>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/img/image1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/image2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/image3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <table id="board">
        <tr id="row1">
            <td><img class="icon" src="../assets/img/localisateur.png" alt=""> SAV en France</td>
            <td><img class="icon" src="../assets/img/carte-de-credit.png" alt=""> Paiement sécurisé</td>
            <td><b>2x-4x</b> Paiement plusieurs fois</td>
            <td><img class="icon" src="../assets/img/retour.png" alt="">Retour facile</td>
        </tr>
    </table>
<h2>Catégories les plus populaires</h2>

    <table id="board2">
        <tr id="row2">
            <td><img class="picture" src="../assets/img/bloc_1.jpg" alt=""> </td>
            <td><img class="picture" src="../assets/img/bloc2.jpg"></td>
            <td><img class="picture" src="../assets/img/bloc3.jpg"></td>
        </tr>
        <tr>
          <td><a href="produits.php"><button type="button" id="btnGroup" class="btn btn-outline-primary">Voir</button></a></td>
          <td><a href="produits.php"><button type="button" id="btnGroup2" class="btn btn-outline-primary">Voir</button></a></td>
          <td><a href="produits.php"><button type="button" id="btnGroup3" class="btn btn-outline-primary">Voir</button></a></td>
        </tr>
    </table>
<img id="banniere" src="../assets/img/banniere.jpg" alt="">
<h2>Nos marques</h2>
<hr>
<table id="board3">
  <tr id="row3">
    <td><img src="../assets/img/kappa.png" alt=""></td>
    <td><img src="../assets/img/newbalance.png" alt=""></td>
    <td><img src="../assets/img/nike.png" alt=""></td>
    <td><img src="../assets/img/puma.png" alt=""></td>
    <td><img src="../assets/img/adidas.png" alt=""></td>
  </tr>
</table>
<hr>
<h2>Nouvelles collections</h2>
<img id="maillot" src="../assets/img/maillot.jpg" alt="">
<a href="maillots.php"><button type="button" id="btnMaillots" class="btn btn-outline-primary me-2">NOS MAILLOTS</button></a>

<table id="board4">
  <tr id="row4">
    <td>
      <img id="gants" src="../assets/img/gants.jpg" alt="">
      <a href="ballons.php"><button type="button" id="btnBallons" class="btn btn-outline-primary me-2">NOS BALLONS</button></a>
    </td>
  </tr>
  <tr id="row5">
    <td>
      <img id="crampon" src="../assets/img/crampon.jpg" alt="">
      <a href="crampons.php"><button type="button" id="btnCrampons" class="btn btn-outline-primary me-2">NOS CRAMPONS</button></a>
    </td>
  </tr>
</table>
<hr>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="">En haut</a></p>
        <p>&copy; 2022 TOUATI Dan, &middot; Privée</p>
    </footer>

</body>
</html>

<?php
