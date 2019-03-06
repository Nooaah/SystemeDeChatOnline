<?php


$bdd = new PDO("mysql:host=localhost;dbname=chat;charset=utf8", 'root', 'root');


if (isset($_GET['submit']))
{
  if (!empty($_GET['nom']) AND !empty($_GET['mail']) AND !empty($_GET['mdp']))
  {
    $pseudo = htmlspecialchars($_GET['nom']);
    $mail = htmlspecialchars($_GET['mail']);
    $mdp = sha1(htmlspecialchars($_GET['mdp']));
    
    $ins = $bdd->prepare('INSERT INTO membres(pseudo,mail,mdp) VALUES(?,?,?)');
    $ins->execute(array($pseudo,$mail,$mdp));

    header('location:connexion.php');

  }
}



?>




<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Inscription au chat</title>
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
        <li class="nav-item active">
          <a class="nav-link" href="inscription.php">Inscription
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item ">
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

  

  




    <!-- Default form subscription -->
    <center>
    <form method="GET" class="text-center border border-light p-5 col-md-7 top-50">

        <p class="h4 mb-4">S'inscrire</p>

        <p>Inscri toi pour parler avec tes potes</p>

        <p>
            <a href="connexion.php">Déjà inscrit ? Connecte-toi</a>
        </p>

        <!-- Name -->
        <input type="text" id="nom" name="nom" class="form-control mb-4" placeholder="Nom">

        <!-- Email -->
        <input type="email" id="mail" name="mail" class="form-control mb-4" placeholder="Adresse Email">

        <!-- Password -->
        <input type="password" id="mdp" name="mdp" class="form-control mb-4" placeholder="Mot de passe">

        <!-- Sign in button -->
        <button class="btn btn-dark btn-block" name="submit" id="submit">S'inscrire</button>


    </form>
</center>





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