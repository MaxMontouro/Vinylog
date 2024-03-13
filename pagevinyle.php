<?php
require("config/commandes.php");

if (isset($_GET['vinyle'])) {
  $idVinyle = $_GET['vinyle'];
}
else {
  header("Location: pageaccueil.php");
  exit();
}

?>


<!DOCTYPE html>
<html lang="fr" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">

    <title>Page d'accueil</title>

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
              <li class="nav-item"></li>
            </ul>
          </div>
        </div>
      </nav>




      <div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <a href="index.php">
            <img src="./img/logo.png" width="120" height="120" style="margin-right: 20px;">
          </a>
          <div id="menu-complet">
            <div class="container-fluid">
              <form class="d-flex flex-grow-1 me-4" role="search">
                <div style="max-width: 550px;" class="input-group">
                  <input class="form-control form-control-sm me-1 bg-light text-dark" type="search" placeholder="Rechercher un vinyle ou un artiste">
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

      <?php $vinyle = infoVinyle($idVinyle)[0];

      $favoris = favorisUtilisateur('Utilisateur'); // ID A CHANGER
      $idsVinyle = array_column($favoris, 'IdVinyle');

      
      ?>

      <div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <!-- Image principale du produit -->
              <img src="./img/pochettes/<?php echo $vinyle->IdVinyle?>.png" id="main-product-image" class="img-fluid" alt="Image du produit">
              <!-- Sélecteur d'images -->
              <div class="row mt-3 justify-content-md-center">
                <div class="col-2">
                  <img src="./img/pochettes/<?php echo $vinyle->IdVinyle?>.png" class="img-fluid img-thumbnail select-image" alt="Image 1" onclick="changeImage(this)">
                </div>
                <div class="col-2">
                  <img src="https://fakeimg.pl/500x500?text=2&font=museo" class="img-fluid img-thumbnail select-image" alt="Image 2" onclick="changeImage(this)">
                </div>
                <div class="col-2">
                  <img src="https://fakeimg.pl/500x500/808080/ebebeb?text=3&font=museo" class="img-fluid img-thumbnail select-image" alt="Image 3" onclick="changeImage(this)">
                </div>
                <div class="col-2">
                  <img src="https://fakeimg.pl/500x500/424242/ffffff?text=4&font=museo" class="img-fluid img-thumbnail select-image" alt="Image 4" onclick="changeImage(this)">
                </div>

                <script>
                 function changeImage(image) {
                   document.getElementById('main-product-image').src = image.src;
                 }
                </script>

              </div>
              <div class="d-flex justify-content-center" style="margin-top: 2rem;">
                <h4>Ajouter aux favoris</h4>
                <!--<span class="material-symbols-outlined" style="font-size: 40px; margin-left: 15px;">favorite</span>-->
                <button class="material-symbols-outlined favorite-icon" style="margin-top: -8px; margin-left: 15px; font-size: 30px; cursor: pointer;"
                data-favorite="<?= json_encode(in_array($vinyle->IdVinyle, $idsVinyle)); ?>" data-vinyle-id="<?= htmlspecialchars($vinyle->IdVinyle) ?>">
                    <img src="./img/favWhite.png">
                </button>
              </div>


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
                          console.log("testfaux");
                        }

              
        
                    });
                    });
                });
              </script>
              
            </div>
            <div class="col">
              <h1 class="special-font"><?php echo $vinyle->ArtisteNom . " - " . $vinyle->Nom ?></h1>

              <h5 class="special-font-details" style="padding-top: 3rem">Artiste : <a href="e"><?php echo $vinyle->ArtisteNom ?></a></h5>
              <h5 class="special-font-details">Genres : <?php echo $vinyle->Genres ?></h5>
              <h5 class="special-font-details">Année : <?php echo $vinyle->Annee ?></h5>
              <h5 class="special-font-details">Label : <?php echo $vinyle->Label ?></h5>
              <h5 class="special-font-details">Tags : <?php echo $vinyle->Tags ?></h5>

              <p class="special-font-description">
                <?php echo $vinyle->Description ?>
              </p>

            </div>

          </div>

          
        </div>


        








      </div>

   



    </main>
  </body>

</html>
