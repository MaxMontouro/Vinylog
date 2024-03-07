<?php
require("config/commandes.php");

$cds = afficher();

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

    <!-- Carrousel nouveautés -->






    <div class="container text-center my-3">
      <div class="d-flex justify-content-start">
        <h1 class="special-font-categories">Nouveautés</h1>
      </div>
      <div class="row mx-auto my-3 justify-content-center">
        <div id="CarrouselNouveautes" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner " role="listbox">

            <?php

            $data = carrouselVinyle();

            foreach ($data as $vinyle) { 
                
            ?>



            <div class="carousel-item active justify-content-center">
              <div class="col-sm-2-5">
                <div class="card">
                  <div class="card-img">
                      <img src="./img/pochettes/<?php echo $vinyle->IdVinyle?>.png" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">Slide <?php echo $vinyle->IdVinyle?></div>
                </div>
              </div>
            </div>

            <?php } ?>

          </div>

          <a class="carousel-control-prev bg-transparent w-aut" href="#CarrouselNouveautes" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next bg-transparent w-aut" href="#CarrouselNouveautes" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>






    <!-- Carrousel artistes -->




    <div class="container text-center my-3">
      <div class="d-flex justify-content-start">
        <h1 class="special-font-categories">Artistes</h1>
      </div>
      <div class="row mx-auto my-3 justify-content-center">
        <div id="CarrouselArtistes" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner " role="listbox">

            <?php

            $data = carrouselArtiste();

            foreach ($data as $artiste) { 
                
            ?>



            <div class="carousel-item active justify-content-center">
              <div class="col-sm-2-5">
                <div class="card">
                  <div class="card-img">
                      <img src="./img/artistes/<?php echo $artiste->IdArtiste?>.png" class="img-fluid">
                  </div>
                  <div class="card-img-overlay">Slide <?php echo $artiste->IdArtiste?></div>
                </div>
              </div>
            </div>

            <?php } ?>

          </div>

          <a class="carousel-control-prev bg-transparent w-aut" href="#CarrouselArtistes" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next bg-transparent w-aut" href="#CarrouselArtistes" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>



    <script>
      let carousels = document.querySelectorAll('.carousel');

      carousels.forEach((carousel) => {
        let items = carousel.querySelectorAll('.carousel-item');

        items.forEach((el) => {
          // number of slides per carousel-item
          const minPerSlide = 4;
          let next = el.nextElementSibling;
          for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
              // wrap carousel by using first child
              next = items[0];
            }
            let cloneChild = next.cloneNode(true);
            el.appendChild(cloneChild.children[0]);
            next = next.nextElementSibling;
          }
        });
      });
    </script>





      </div>
    </div>
  </div>


  </main>
  </body>

</html>