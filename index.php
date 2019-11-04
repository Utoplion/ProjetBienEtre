<?php
  include "connect.php";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" name="viewport"
  content="width=device-width,initial scale=2.0">
  <title>CORPSCAN</title>
  <style>
    .form{
      width:300px;
      height:400px;

      position:absolute;
      top:38%;
      left:37%;
      text-align: center;
    }
    .motdp{
      margin-left:52px;

    }
    img{

      margin-left:400px;
    }
    .submit{
      margin-left: 20px;
    }
    a{

      margin-left: 20px;
    }
    .erreur{
      color:red;

    }
    .mail{
      margin-left:52px;
    }
     @media all and (max-width:420px){

      img{
        position:absolute;
        top:10vh;
        left:-100vw;
        width:100%;
      }
      .form{
      width:350px;
      height:400px;

      position:absolute;
      top:50vh;
      left:0vw;
      text-align: center;

      }
      .submit{
      margin-left: 30px;
      }
      .motdp{
      margin-left:25px;

      }
      .mail{
        margin-left:72px;
      }
      a{
      margin-left:35px;
      }
      input{
        border: 2px solid black;
      }

    }
    @media all and (min-width: 421px) and (max-width: 1040px){

      img{
        position:absolute;
        left:-268px;
      }
      .form{
        width:350px;
        height:300px;
        position:absolute;
        left:213px;


      }
      .submit{
      margin-left: 25px;
      }
      .motdp{
      margin-left:25px;

      }
      a{
      margin-left:20px;
      }


}

  </style>
</head>
<body>
  <img src="corpscan.png">
  <div class="form">

    <form method ="POST" action="index.php">

        <p>email : <input class="mail" type="email" name="mail"></p>
        <p>mot de passe :<input  type="password" class ="motdp" name="mdp"></p>
        <a href="pwforgot-send.html">Mot de passe oublier ?</a><br><br>
        <input class="submit" type="submit" name ="submit" value ="connexion"><br>
        <p class="erreur"><?php echo $erreur; ?></p>

    </form>

  </div>
</body>
</html>
