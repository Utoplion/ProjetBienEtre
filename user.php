<?php
session_start();

if (!isset($_SESSION['id']))
{
   header('Location: index.php');
   exit();
}

$bdd = new PDO("mysql:host=mysql-utoplion.alwaysdata.net;dbname=utoplion_13", 'utoplion_test', 'utoplion_13600');

   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM connect WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page d'aceuille</title>
</head>
<body>
  <h1>BIENVENUE SUR  VOTRE PAGE PERSO <?php echo $userinfo['email']; ?> </h1>



  <a href="index.php"><input type="button" value="deconnexion"></a>

</body>
</html>

