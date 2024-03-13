<?php
require("config/commandes.php");

// CONNEXION NECESSAIRE A UN COMPTE, SINON PAGE DE CONNEXION

$idUtilisateur = "Utilisateur";

$vinylesFav = favorisUtilisateur($idUtilisateur);

$idsVinyle = array_column($vinylesFav, 'IdVinyle');

?>


<!DOCTYPE html>
<html lang="fr" data-bs-theme="auto">
  <head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">

    <title>Favoris</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    

    <link rel="stylesheet" href="./style.css">
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
                        <a class="nav-link text-dark" href="">Compte</a>
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
                    <a class="nav-link text-dark" aria-current="page" href="#">Accueil</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Vinyles
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Truc 1</a></li>
                      <li><a class="dropdown-item" href="#">Truc 2</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
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
  <h1 class="special-font" style="margin-left: 30px;">Mes favoris</h1>
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
              <label class="form-check-label" for="categorie1" style="color: white; font-size: 16px;">Catégorie 1</label>
            </div>
            <div class="form-check" style="margin-bottom: 10px;">
              <input class="form-check-input" type="checkbox" value="" id="categorie2">
              <label class="form-check-label" for="categorie2" style="color: white; font-size: 16px;">Catégorie 2</label>
            </div>
            <div class="form-check" style="margin-bottom: 10px;">
              <input class="form-check-input" type="checkbox" value="" id="categorie3">
              <label class="form-check-label" for="categorie3" style="color: white; font-size: 16px;">Catégorie 3</label>
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


<!-- Afficher les vinyles filtrés ou tous les vinyles si aucune recherche n'a été effectuée -->
<?php if(!empty($vinylesFav)) {
  foreach ($vinylesFav as $vinyle): ?>
    <div class="col">
        <div class="card shadow-sm" style="width: 17rem;">
            <title><?= $vinyle->NomVinyle ?></title>
            <img src="./img/pochettes/<?php echo $vinyle->IdVinyle?>.png" class="card-img-top vinyle-image" alt="<?= $vinyle->NomVinyle ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $vinyle->NomVinyle ?></h5>
                <h6 class="card-title"><?= $vinyle->NomArtiste ?></h6>
                <button class="material-symbols-outlined favorite-icon" style="position: absolute; bottom: 10px; right: 10px; font-size: 30px; cursor: pointer;"
                data-favorite="<?= json_encode(in_array($vinyle->IdVinyle, $idsVinyle)); ?>" data-vinyle-id="<?= htmlspecialchars($vinyle->IdVinyle) ?>">
                    <img src="./img/favWhite.png">
                </button>
            </div>
        </div>
    </div>
<?php
    endforeach;
  }
  else { ?>
  <h3>Aucun vinyle en favori</h3>

  <?php } ?>

  <script>

  document.addEventListener("DOMContentLoaded", function() {
    const favoriteIcons = document.querySelectorAll('.favorite-icon');

    favoriteIcons.forEach(icon => {
      if (icon.getAttribute('data-favorite') === 'true') {
        icon.querySelector('img').src = './img/favBlack.png'; // Changer l'image en noir

      }
           
    });
  });


    document.addEventListener("DOMContentLoaded", function() {
        const favoriteIcons = document.querySelectorAll('.favorite-icon');

        favoriteIcons.forEach(icon => {
            icon.addEventListener('click', function() {
              const vinyleId = icon.getAttribute('data-vinyle-id'); 

                if (icon.getAttribute('data-favorite') === 'false') {
                    icon.querySelector('img').src = './img/favBlack.png'; // Changer l'image en noir
                    icon.setAttribute('data-favorite', 'true');

                    fetch(`./config/commandes.php?action=ajoutVinyleFav-`+encodeURIComponent(vinyleId))
                    
                    .catch(error => {
                        console.error('Erreur:', error);
                    });
                    console.log("testvrai");

                    console.log(`./config/commandes.php?action=ajoutVinyleFav-`+encodeURIComponent(vinyleId));

                } else {
                    icon.querySelector('img').src = './img/favWhite.png'; // Changer l'image en blanc
                    icon.setAttribute('data-favorite', 'false');

                    fetch(`./config/commandes.php?action=retirerVinyleFav-`+encodeURIComponent(vinyleId))
                    
                    .catch(error => {
                        console.error('Erreur:', error);
                    });
                    
                    location.reload();
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
</main>



    </body>
</html>
