<?php 
session_start();
include ('cnx.php');

if (isset ($_POST['btnConnexion']))
{
  if(empty($_POST['txtMail']) || empty($_POST['txtMdp']))
  {
    echo "veuillez renseigner les champs";
  }
  else
  {
    $query= "SELECT mail,pwd FROM user WHERE mail = :mail AND pwd = :pwd";
    $stmt= $cnx ->prepare($query);
    $stmt->execute(
      array(
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
