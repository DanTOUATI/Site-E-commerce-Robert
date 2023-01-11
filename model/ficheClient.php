<?php 
include ('cnx.php');

if (isset ($_POST['btnCommand']))
{
    //vide toutes les données de la table sans delete la table
    $query2 = "TRUNCATE TABLE panier";
    $stmt= $cnx ->prepare($query2);
    $stmt->execute();

    $query = "UPDATE user SET tel = :tel, adresse = :adresse WHERE mail = :mail;";
    $stmt= $cnx ->prepare($query);
        $stmt->execute(
          array(
              'tel'    => $_POST["txtNum"],
              'adresse' => $_POST["txtAdresse"],
              'mail'  => $_POST["txtMail"]
          )
          );
}




?>
