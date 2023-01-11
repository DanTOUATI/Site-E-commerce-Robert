<?php
include ('../model/cnx.php');
include ('header.php');
include('../model/ficheClient.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/ficheClient.css">
    <title>Commander</title>
</head>
<body>
    <div class="title2">
      <p class="title">Informations</p>
    </div>
        <form method="POST">
        <div class="container">
    <div class="container2">
    <form method="POST" >
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="text" name="txtNom" class="form-control" id="inputNom" placeholder="Nom" required>
                </div>
                <br>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="text" name="txtPrenom" class="form-control" id="inputPrenom" placeholder="Prénom" required>
                </div> 
            </div>
                <br>
            <div class="col-6">
                <div class="form-group">
                    <input type="text" name="txtMail" class="form-control" id="inputPrenom" placeholder="Email" required>
                </div> 
            </div>
        
            <div class="col-6">
                <div class="form-group">
                    <input type="text" name="txtNum" class="form-control" id="inputTel" placeholder="Téléphone" required>
                </div>
                <br>
            </div>
                <br>
            <div class="col-12">
                <div class="form-group">
                    <input type="text" name="txtAdresse" class="form-control" id="inputAddress" placeholder="Adresse" required>
                </div>                
                <br>
                <br>
                <div id="btn">
                    <input id="btnCommander" type="submit" name="btnCommand" value="Commander" class="btn btn-primary">
                </div>
</form>

    <?php
        if(isset($_POST['btnCommand']))
        {
            header('Location: validation.php');
            $_SESSION['nom']=$_POST['txtNom'];
        }
    ?>
</body>
</html>