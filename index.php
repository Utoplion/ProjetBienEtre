<?php
  include "connect.php";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>CORPSCAN</title>
  <style>
    .form{
      width:400px;
      height:20%;

      position:absolute;
      top:38%;
      left:32%;
      text-align: center;
    }
    .motdp{
      margin-left:52px;

    }
    img{

      margin-left:400px;
    }
    .submit{
      margin-left: 70px;
    }
    a{

      margin-left: 100px;
    }
    .erreur{
      color:red;

    }

  </style>
</head>
<body>
  <img src="corpscan.png">
  <div class="form">

    <form method ="POST" action="index.php">

        <p>email : <input class="motdp" type="email" name="mail"></p>
        <p>mot de passe :<input  type="password" name="mdp"></p>
        <a href="pwforgot.html">Mot de passe oublier ?</a><br><br>
        <input class="submit" type="submit" name ="submit" value ="connexion"><br>
        <p class="erreur"><?php echo $erreur; ?></p>

    </form>

  </div>
</body>
</html>
