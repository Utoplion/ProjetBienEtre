<?php
session_start();
  try{
    $bdd = new PDO("mysql:host=mysql-utoplion.alwaysdata.net;dbname=utoplion_13", 'utoplion_test', 'utoplion_13600');
  }

  catch(PDOException $e){
    print "erreur:". $e->getMessage();
  }

  $email = htmlspecialchars($_POST['mail']);
  $mdp = htmlspecialchars($_POST['mdp']);
  $valider = $_POST['submit'];

  if(isset($valider)){

    if(!empty($email) AND !empty($mdp)){

      $req = $bdd->prepare("SELECT * FROM connect WHERE email = ? AND mdp = ?");

      $req->execute(array($email, $mdp));

      $userexist = $req->rowCount();

      if ($userexist == 1){

        $userinfo = $req->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['mail'] = $userinfo['mail'];
        header("Location: user.php?id=".$_SESSION['id']);
      }

      else{

        $erreur = "email ou mot de passe incorrect";
      }



    }
    else{
      $erreur = "les champs doivent etres remplis !!";
    }

  }
?>

