<?php
session_start();

if(!isset($_SESSION['test'])){
    header("Location: ../loginTest.php");
}
if(empty($_SESSION['test'])){
    header("Location: ../loginTest.php");
}

require("../config/commandes.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../styleFooter.css">
    <title>Admin</title>
</head>
<body>

<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange navbar-height">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
          </li>
        </ul>
        </div>
      </div>
</nav>



<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a href="pageaccueil.php">
      <img src="../img/logo.png" width="120" height="120" style="margin-right: 20px;">
    </a>
  <div id="menu-complet">
    <div class="container-fluid">
      <form class="d-flex flex-grow-1 me-4" method="GET">
        <div style="max-width: 550px;" class="input-group">
          <input class="form-control form-control-sm me-1 bg-light text-dark" name="s" placeholder="Rechercher un vinyle ou un artiste">
          <button class="btn btn-outline-success" type="submit">Rechercher</button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item me-3">
                <a class="nav-link text-dark" href="loginTest.php">Compte</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link text-dark" href="">Favoris</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link text-dark" href="">Panier</a>
            </li>
            <a href="deconnection.php" class="btn btn-danger">Se deconnecter</a>

        </ul>
    </div>
  </form>
</div>



<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="../pageaccueil.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="../vinyles.php">Vinyles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="#">Ventes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../conseils.html">Conseil&Guide</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</div>
</nav>

</div>


</header>


<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../admin/" style="font-weight: bold">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supprimer.php">Supprimer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="afficher.php">Vinyles</a>
        </li>
      </ul>
      <div style="display: flex; justify-content: flex-end;">
    </div>
    </div>
  </div>
</nav>



<div class="album py-5  bg-white">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID du vinyle</label>
    <input type="name" class="form-control" name ="IdVinyle" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom du vinyle</label>
    <input type="text" class="form-control" name ="Nom" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Label du vinyle</label>
    <input type="text" class="form-control"  name ="Label" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Annee de sortie</label>
    <textarea class="form-control" name ="Annee" required></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name ="Description" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">IdArtiste</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name ="IdArtiste" required>
  </div>

  
</br>
</br>
  <button type="submit" name ="valider" class="btn btn-success">Soumettre le nouveau vinyle</button>
</form>

</div>
</div>
</div>

</body>
</html>

<?php
if(isset($_POST['valider'])){
    if(isset($_POST['IdVinyle']) AND isset($_POST['Nom']) AND isset($_POST['Label']) AND isset($_POST['Annee']) AND isset($_POST['Description']) AND isset($_POST['IdArtiste'])){
        if(!empty($_POST['IdVinyle']) AND !empty($_POST['Nom']) AND !empty($_POST['Label']) AND !empty($_POST['Annee']) AND !empty($_POST['Description']) AND !empty($_POST['IdArtiste'])){
            $IdVinyle = htmlspecialchars(strip_tags($_POST['IdVinyle']));
            $Nom = htmlspecialchars(strip_tags($_POST['Nom']));
            $Label = htmlspecialchars(strip_tags($_POST['Label']));
            $Annee = htmlspecialchars(strip_tags($_POST['Annee']));
            $Description = htmlspecialchars(strip_tags($_POST['Description']));
            $IdArtiste = htmlspecialchars(strip_tags($_POST['IdArtiste']));

            try{
                ajouter($IdVinyle, $Nom, $Label, $Annee, $Description, $IdArtiste);
            } catch (Exception $e){
                $e->getMessage();
            }

        }
    }
}

if(isset($_POST['valider'])){
    if(isset($_POST['idArtiste']) AND isset($_POST['NomArtiste']) AND isset($_POST['alias']) AND isset($_POST['dateNaiss'])){
        if(!empty($_POST['idArtiste']) AND !empty($_POST['NomArtiste']) AND !empty($_POST['alias']) AND !empty($_POST['dateNaiss'])){
            $idArtiste = htmlspecialchars(strip_tags($_POST['idArtiste']));
            $NomArtiste = htmlspecialchars(strip_tags($_POST['NomArtiste']));
            $alias = htmlspecialchars(strip_tags($_POST['alias']));
            $dateNaiss = htmlspecialchars(strip_tags($_POST['dateNaiss']));

            try{
                ajouterArtiste($idArtiste, $NomArtiste, $alias, $dateNaiss);
            } catch (Exception $e){
                $e->getMessage();
            }

        }
    }
}


?>