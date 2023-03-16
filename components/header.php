<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FARP</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="../js/app.js" type="module" defer></script>
    
  </head>

  <body>
    <header>
      <div class="navigation">
        <div class="logo__container">
          <img src="../assets/img/logo__farp.PNG" alt="logo du FARP" />
        </div>
        <div class="menus__search hide__menu">
          <div class="searchbar">
            <form action="">
              <input
                type="text"
                placeholder="Saisisser et appuyez sur Entree..."
              />
              <button>
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
            <div class="icons">
              <a href="#"><i class="fa-brands fa-facebook facebook"></i></a>
              <a href="#"><i class="fa-brands fa-whatsapp whatsapp"></i></a>
              <a href="#"><i class="fa-brands fa-youtube youtube"></i></a>
              <a href="#"><i class="fa-brands fa-twitter twitter"></i></a>
            </div>
          </div>
          <!-- NAVBAR -->
          <div class="navbar__container">
            <ul class="navbar">
              <li class="item active">
                <a href="../index.php">Accueil</a>
              </li>
              <li class="item">
                <a href="#">Nous connaitre</a>
                &nbsp;<i class="fa-solid fa-chevron-down item__arrow"></i>
                <!-- Down menus -->
                <ul class="drop-down hide">
                  <li>
                    <a href="../pages/about.php" class="item-submenu">Qui sommes-nous ?</a>
                  </li>
                  <li>
                    <a href="#" class="item-submenu">Grandes réalisations</a>
                  </li>
                </ul>
              </li>
              <li class="item">
                <a href="#">Services</a>
                &nbsp;<i class="fa-solid fa-chevron-down item__arrow"></i>
                <!-- Down menus -->
                <ul class="drop-down hide">
                  <li>
                    <a href="#" class="item-submenu">Centres d'écoute</a>
                  </li>
                  <li>
                    <a href="#" class="item-submenu"
                      >Service de developpement</a
                    >
                  </li>
                  <li>
                    <a href="../pages/trainings.php" class="item-submenu">Formations</a>
                  </li>
                  <li>
                    <a href="../pages/chaplaincy.php" class="item-submenu">Aumonerie</a>
                  </li>
                </ul>
              </li>
              <li class="item">
                <a href="#">Galerie</a>
                &nbsp;<i class="fa-solid fa-chevron-down item__arrow"></i>
                <!-- Down menus -->
                <ul class="drop-down hide">
                  <li>
                    <a href="../pages/photos.php" class="item-submenu">Photos</a>
                  </li>
                  <li>
                    <a href="../pages/videos.php" class="item-submenu">Videos</a>
                  </li>
                </ul>
              </li>
              <li class="item"><a href="../pages/posts.php">Nos publications</a></li>
              <li class="item"><a href="../pages/contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="toggle__menu">
          <i class="fa-solid fa-bars show__menu"></i>
          <i class="fa-solid fa-plus hide__menu cross"></i>
        </div>
      </div>