<?php

include ('header.php');
include ('../model/panier.php');

if(isset($_POST['OK']))
{
        if(!isset($_SESSION['mail'])) {
            header('Location:connexion.php');
        } else {
            $_SESSION['mail'] = $_SESSION["mail"];
            header('Location: ficheClient.php');
        }
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/dist/css/panier.css">
    <title>Panier</title>
</head>
<body>
<div class="title2">
    <p class="title">Mon panier</p>
</div>
<?php
 if(sizeof($panier)==0)
 {
     echo '<p id="message"> Votre panier est vide </p>';
 }      
 else{

    foreach ($panier as $p){  
        foreach ($prix as $pr){ 
           echo '
           <table id="board">
            <tr>
                <td><img src=" '.$p['img'].'"></td>
                <td><span class="des">'.$p['nom'].'</span></td>
                <td class="td"><h5 class="mb-0">'.$p['prix'].' €</h5></td>
            </tr>
            </table>';
        }   
    }
     echo '
        <div>
            <p id="prixTot"> Prix total : '.$pr['somme'].'€</p>
        </div>
        <br>
        <form action="" method="post">
            <br>
            <div id="btnForm">
                <input name="OK" id="btnValider" type="submit" value="Continuer et payer" class="btn btn-outline-primary me-2" >
            </div>
        </form>';
    }       
    ?>
    </div>
</body>
<div id="footer">
    <hr>
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="">En haut</a></p>
            <p>&copy; 2022 TOUATI Dan, &middot; Privée</p>
        </footer>
</div>
</html>