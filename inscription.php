<?php

$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion;charset=utf8', 'root', '123456789'); //Database connexion`


if(isset($_POST['submit'])){
    if(isset($_POST['mail']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password'])){
        $mail = $_POST['mail'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $password = $_POST['password'];

        $sql = "INSERT INTO utilisateurs (mail, prenom, nom, password) VALUES (?, ?, ?, ?);";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$mail, $prenom, $nom, $password]);
        header("Location: connexion.php");
        exit();

    } else {
        echo "Tous les champs ne sont pas remplis.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cv-Crafter</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Cv-Crafter</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="connexion.php">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="inscription.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="content">
                    <header>
        <h1>Inscription</h1>
    </header>
    <main>
        <h2>Remplissez le formulaire d'inscription :</h2>
        <form method="POST" action="inscription.php">

      <p>
      <label for="mail">Mail </label>
      <input type="text" name="mail" id="mail">
      </p>
      <p>
      <label for="prenom">Prenom </label>
      <input type="text" name="prenom" id="prenom">
      </p>
      <p>
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom">
      </p>
      <p>
      <label for="password">Password</label>
      <input type="text" name="password" id="password">
      </p>
      <p>
      <input class="btn btn-primary btn-xl" type="submit" name="submit" id="submit" value="Submit">
      </p>
    </form>
    </main>
                </div>
            </div>
        </header>
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">2023</div></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>