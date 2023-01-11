<?php 
session_start();
include ('cnx.php');

if (isset ($_POST['btnInscription']))
{
  if(empty($_POST['txtMail']) || empty($_POST['txtMdp']))
  {
    echo "Veuillez renseigner les champs";
  }
  else
  {
    $query= "INSERT INTO user ( `nom`, `prenom`, `mail`, `pwd`) VALUES (:nom, :prenom, :mail, :pwd)";

    $stmt= $cnx ->prepare($query);
    $stmt->execute(
      array(
          'nom'    => $_POST["txtNom"],
          'prenom' => $_POST["txtPrenom"],
          'mail'  => $_POST["txtMail"],
          'pwd'   => $_POST["txtMdp"]
      )
      );

      $count = $stmt ->rowCount();
      if($count > 0)
      {
        $_SESSION["mail"]=$_POST["txtMail"];
        header("Location: ../model/all.php");
      }
      else
      {
        echo "identifiants invalides";
      }
  }
}
?>
