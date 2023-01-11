<?php include ('../model/index2.php'); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/connexion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Inscription</title>
</head>
<body>
<form method="POST">
    <div class="container">
        <img class="mb-4" src="../assets/img/logo.png" alt="">
        <h1 class="h3 mb-3 fw-normal">Bienvenue sur foot Store ! Inscrivez vous !</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" aria-describedby="" name="txtNom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text" class="form-control" aria-describedby="" name="txtPrenom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtMail">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1"  name="txtMdp">
        </div>
        <a href="connexion.php" id="lien"><span>Vous avez déjà un compte ? Connectez-vous !</span></a><br><br>
        <button type="submit" class="btn btn-primary" name="btnInscription">S'inscrire</button>
    </div>
</form>
</body>
</html>

