<?php
require("config/commandes.php");

$cds = afficher();
session_start();
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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styleFooter.css">

    <style>
      .card {
    width: 250px; /* Largeur fixe pour toutes les cartes */
    height: 350px; /* Hauteur fixe pour toutes les cartes */
}
.favorite-icon {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
        outline: none;
        position: relative;
    }

    .favorite-icon img {
        width: 30px;
        height: 30px;
        transition: transform 0.3s ease;
    }

    .favorite-icon[data-favorite="true"] img {
        transform: scale(0.8); /* Réduire légèrement la taille de l'image pour donner un effet visuel */
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



<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a href="pageaccueil.php">
      <img src="./img/logo.png" width="120" height="120" style="margin-right: 20px;">
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

<main>
  <div class="container-fluid">
  <h1 class="special-font" style="margin-left: 30px;">Vinyles</h1>
    <div class="row">
      <!-- Sidebar pour les catégories -->
      <div class="col-md-2 sidebar" style="margin-top: 50px; margin-right: 10px;">
        <div class="categories" style="height: 500px;">
          <!-- Placez ici votre sélecteur de catégories -->
          <div style="width: 100%; background: linear-gradient(180deg, rgba(168, 81, 138, 0.99) 0%, rgba(236, 136, 62, 0.99) 100%); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 15px;">
            <h3 style="color: white; text-align: center; font-size: 18px; margin-bottom: 20px;">Catégories</h3>
            <!-- Utilisation de cases à cocher pour les catégories -->
            <div class="form-check" style="margin-bottom: 10px;">
              <input class="form-check-input" type="checkbox" value="" id="categorie1">
              <label class="form-check-label" for="categorie1" style="color: white; font-size: 16px;">Pop</label>
            </div>
            <div class="form-check" style="margin-bottom: 10px;">
              <input class="form-check-input" type="checkbox" value="" id="categorie2">
              <label class="form-check-label" for="categorie2" style="color: white; font-size: 16px;">Rap</label>
            </div>
            <div class="form-check" style="margin-bottom: 10px;">
              <input class="form-check-input" type="checkbox" value="" id="categorie3">
              <label class="form-check-label" for="categorie3" style="color: white; font-size: 16px;">Classique</label>
            </div>
            <!-- Ajoutez d'autres catégories si nécessaire -->
          </div>
        </div>
      </div>

      <!-- Contenu des vinyles -->
      <div class="col-md-9">

        <div class="album py-5">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <?php
              $search_query = isset($_GET['s']) ? $_GET['s'] : '';

              // aucune recherche faite
              if (empty($search_query)) {
                  $filtered_cds = $cds;
              } else {
                  // Filtrer les vinyles en fonction de la recherche de l'utilisateur
                  $filtered_cds = array_filter($cds, function($cd) use ($search_query) {
                      // Vous pouvez ajuster les conditions de recherche selon vos besoins
                      return stripos($cd->Nom, $search_query) === 0 || 
                            stripos($cd->nomVinyle, $search_query) === 0;
                  });
              }
              ?>

<!-- Afficher les vinyles filtrés ou tous les vinyles si aucune recherche n'a été effectuée -->
<?php foreach ($filtered_cds as $cd): ?>
    <div class="col">
        <div class="card shadow-sm" style="width: 17rem;">
            <title><?= $cd->Nom ?></title>
            <img src="<?= $cd->url ?>" class="card-img-top vinyle-image" alt="<?= $cd->Nom ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $cd->nomVinyle ?></h5>
                <h6 class="card-title"><?= $cd->Nom ?></h6>
                <button class="material-symbols-outlined favorite-icon" style="position: absolute; bottom: 10px; right: 10px; font-size: 30px; cursor: pointer;" data-favorite="false">
                    <img src="./img/favWhite.png">
                </button>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const favoriteIcons = document.querySelectorAll('.favorite-icon');

        favoriteIcons.forEach(icon => {
            icon.addEventListener('click', function() {
                if (icon.getAttribute('data-favorite') === 'false') {
                    icon.querySelector('img').src = './img/favBlack.png'; // Changer l'image en noir
                    icon.setAttribute('data-favorite', 'true');
                } else {
                    icon.querySelector('img').src = './img/favWhite.png'; // Changer l'image en blanc
                    icon.setAttribute('data-favorite', 'false');
                }
            });
        });
    });
</script>




            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer>
  <div class="rowF">
      <div class="colF">
          <img src="img/logoWhite.png" class="logoF">
          <p>Inscrivez vous à notre Newsletter pour recevoir les dernières infos de Vinylog.</p>
      </div>
      <div class="colF">
          <h3>Coordonnées<div class="underline"><span></span></div></h3>
          <p>Bayonne, France</p>
          <p>1 rue des potiers chepa</p>
          <p class="email-id">Vinylog64@gmail.com</p>
      </div>
      <div class="colF">
          <h3>Liens<div class="underline"><span></span></h3>
          <ul>
              <li><a href="pageaccueil.php">Accueil</a></li>
              <li><a href="poldeconf.html">Politique de confidentialité</a></li>
              <li><a href="">A propos</a></li>
          </ul>
      </div>
      <div class="colF">
          <h3>Newsletter <div class="underline"><span></span></h3>
          <form class="test">
              <i class="fa-regular fa-envelope" style="width: 30px;"></i><input type="email" placeholder="Entrer votre email">
              <button type="submit"><i class="fa-solid fa-share"></i></button>
          </form>
          <div class="social-icons">
              <i class="fa-brands fa-github" onclick=""></i>
          </div>
      </div>
  </div>
  <hr>
  <p class="copyright"copyright>Copyright 2024 © Vinylog. Tout droit réservés.</p>
</footer>

    </body>
</html>
