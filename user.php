<?php
session_start();

$bdd = new PDO("mysql:host=mysql-utoplion.alwaysdata.net;dbname=utoplion_13", 'utoplion_test', 'utoplion_13600');


?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page d'aceuille</title>
</head>
<body>
  <h1>BIENVENUE SUR  VOTRE PAGE PERSO </h1>

  <p> votre email est bien :  </p>

  <a href="index.php"><input type="button" value="deconnexion"></a>

</body>
</html>

