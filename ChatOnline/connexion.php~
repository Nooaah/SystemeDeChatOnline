<?php
session_start();


$bdd = new PDO("mysql:host=localhost;dbname=chat;charset=utf8", 'root', 'root');



if (isset($_GET['submit']))
{
  if (!empty($_GET['mail']) AND !empty($_GET['mdp']))
  {
    $mail = htmlspecialchars($_GET['mail']);
    $mdp = sha1(htmlspecialchars($_GET['mdp']));
    
    $req = $bdd->prepare('SELECT * FROM membres WHERE mail = ? AND mdp = ?');
    $req->execute(array($mail,$mdp));
    $nb_req = $req->rowcount();

    if ($nb_req==1)
    {
        $user = $req->fetch();
        $_SESSION['id'] = $user['id'];
        header('location:index.html');
    }
    else
    {
        $error = 'Identifiants ou mot de passe incorrects';
    }

  }
  else
  {
      $error = 'Veuillez compléter tous les champs';
  }
}



?>




<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Connexion au chat</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

<style>
.top-50
{
  margin-top: 50px;
}
.bottom-50
{
  margin-bottom: 50px;
}
</style>


</head>

<body>

<!-- DEBUT DU PROJET-->





<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark elegant-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Chat en Ligne</a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">Inscription
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="connexion.php">Connexion
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
            <a target="_blank" class="nav-link" href="http://www.noah-chatelain.co.nf">Site web du développeur
              <span class="sr-only"></span>
            </a>
          </li>
  
      </ul>
      
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->



  <div id="form_connexion">
        <!-- Default form login -->
        <center>
    <form method="GET" class="text-center border border-light p-5 col-md-7 top-50">

    
    
        <p class="h4 mb-4">Se connecter</p>
    
        <!-- Email -->
        <input type="email" id="mail" name="mail" class="form-control mb-4" placeholder="Adresse Email">
    
        <!-- Password -->
        <input type="password" id="mdp" name="mdp" class="form-control mb-4" placeholder="Mot de passe">
    
        <div class="d-flex justify-content-around">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Se souvenir de moi</label>
                </div>
            </div>
            
        </div>

        <p>
            <br><a href="inscription.php">Pas encore de compte ? Clique-ici</a>
        </p>
    
        <!-- Sign in button -->
        <button class="btn btn-dark btn-block my-4" name="submit" type="submit">Se connecter</button>


        <?php
if (isset($error))
{
    ?>
    <div class="alert alert-danger top-50" role="alert">
      <?= $error ?>
    </div>
    <?php

}
?>

    
    
    </form>
    </center>
    <!-- Default form login -->
      </div>
    
    




    <!-- Default form subscription -->


<!-- /FIN DU PROJET-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>
