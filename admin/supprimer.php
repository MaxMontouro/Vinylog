<?php

session_start();

if(!isset($_SESSION['test'])){
    header("Location: ../loginTest.php");
}
if(empty($_SESSION['test'])){
    header("Location: ../loginTest.php");
}


require("../config/commandes.php");

$cds = afficherAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Admin</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../styleFooter.css">
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
          <a class="nav-link text-dark" aria-current="page" href="pageaccueil.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="vinyles.php">Vinyles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="#">Ventes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Conseil&Guide</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</div>
</nav>

</div>


</header>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../admin/">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="supprimer.php" style="font-weight: bold">Supprimer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="afficher.php">Vinyles</a>
        </li>
      </ul>

    </div>
  </div>
</nav>


<div class="album py-5 bg-white">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


<?php foreach($cds as $cd): ?>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <p class="card-text"><strong><p><?= $cd->IdVinyle ?></p><img src="<?= $cd->url ?>" style="width: 50%"><p><?= $cd->NomVinyle ?></p><p><?= $cd->Nom ?></p></strong>
              <div class="d-flex justify-content-between align-items-center">
              </div>
              <form method="post">
                <div class="mb-3">
                  <input type="hidden" class="form-control" name ="idDuCd" value ="<?= $cd->IdVinyle ?>">
                </div>
                <button type="submit" name ="valider" class="btn btn-warning">Supprimer le CD</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
</div>


</div>
</div>

</body>
</html>


<?php
if(isset($_POST['valider'])){
    if(isset($_POST['idDuCd'])){
        if(!empty($_POST['idDuCd']) AND is_numeric($_POST['idDuCd'])){
            $IDcd = htmlspecialchars(strip_tags($_POST['idDuCd']));

            try{
                supprimer($IDcd);

                header("Location: " . $_SERVER["PHP_SELF"]);
                exit();
            } catch (Exception $e){
                $e->getMessage();
            }

        }
    }
}


?>