<?php
require("config/commandes.php");

$cds = afficher();

?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Vinyles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .navbar-height {
        height: 55px; 
        background-color: #e87c44;
      }

      .body {
        background-color: white;
      }

      .special-font {
        font-family: 'Hammersmith One';
        font-weight: bold;
        padding-left: 65px;
        color: #39245F;
      }
      .form-control::placeholder {
        color: #333; 
      }

    </style>

    
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


<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a href="#" class="navbar-brand me-4">
      <img src="./img/logo.png" width="100" height="100" style="margin-right: 20px;">
    </a>

    <form class="d-flex flex-grow-1 me-4 " role="search">
  <input class="form-control me-1 flex-grow-1 bg-light text-dark" type="search" placeholder="Rechercher un vinyle ou un artiste">
  <button class="btn btn-outline-success" type="submit">Rechercher</button>
</form>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-3">
          <a class="nav-link text-dark" href="#">Compte</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link text-dark" href="#">Favoris</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link text-dark" href="#">Panier</a>
        </li>
      </ul>
    </div>
  </div>
</nav>






</header>

<main>

<div class="vinyles-heading">

        <h1 class="special-font">Vinyles</h1>
    </div>

  <div class="album py-5">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      

      <?php foreach ($cds as $cd): ?>
    <div class="col">
        <div class="card shadow-sm">
            <title><?= $cd->nomCD ?></title>
            <img src="<?= $cd->imagePochette ?>" alt="">
            <div class="card-body">
                <p class="card-text"><strong><?= $cd->nomCD ?></p>
                <p><?= $cd->alias ?></p>
                <?= $cd->dateSortie ?></p></strong>
                <div class="d-flex justify-content-between align-items-center">
                    <form method="post">
                        <input type="hidden" name="IDcd" value="<?= $cd->IDcd ?>">
                        <input type="hidden" name="nomCD" value="<?= $cd->nomCD ?>">
                        <input type="hidden" name="dateSortie" value="<?= $cd->dateSortie ?>">
                        <input type="hidden" name="imagePochette" value="<?= $cd->imagePochette ?>">
                        <input type="hidden" name="prix" value="<?= $cd->prix ?>">
                        <button type="submit" class="btn btn-sm btn-outline-secondary" name="acheter">Acheter (panier)</button>
                    </form>
                    <small class="text-body-secondary"><?= $cd->prix ?> €</small>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>




<?php
if (isset($_POST['acheter'])) {
    if (
        isset($_POST['IDcd']) &&
        isset($_POST['nomCD']) &&
        isset($_POST['dateSortie']) &&
        isset($_POST['imagePochette']) &&
        isset($_POST['prix'])
    ) {
        try {
            $IDcdAjout = $_POST['IDcd'];
            $nomCdAjout = $_POST['nomCD'];
            $dateSortieAjout = $_POST['dateSortie'];
            $imagePochetteAjout = $_POST['imagePochette'];
            $prixAjout = $_POST['prix'];

            ajouterPanier($IDcdAjout, $nomCdAjout, $dateSortieAjout, $imagePochetteAjout, $prixAjout);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

?>


      </div>
    </div>
  </div>


</main>
    </body>
</html>
