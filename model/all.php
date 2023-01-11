<?php
include ('cnx.php');
session_start();
if(isset($_SESSION["mail"]))
{
    header("Location: ../vue/index.php");
    $_SESSION["validate"] = 1;
    echo '<h3>Bienvenue  '.$_SESSION["mail"].'</h3>';
    echo '<br><br>';
}


$sql =  'SELECT * FROM user ORDER BY nom';
foreach  ($cnx->query($sql) as $row) {
    // print $row['id_user'] . "\n";
    print $row['nom'] . "\n";
    print $row['prenom'] . "\n";
    print $row['mail'] . "\n";
    print $row['pwd'] . "<br>";
}

?>