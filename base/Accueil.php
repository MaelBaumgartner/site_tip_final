<?php
  session_start();
?>

<doctype html>
  <html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit="no">
    <title>ICT DU CEFF</title>
    <link rel="stylesheet" type="text/css" href="StylePageClair.css" media="all" id="linkstyle">
    <link rel="stylesheet" type="text/css" href="StylePagePetitClair.css"
      media="screen and (max-width: 720px) and (min-width: 615px)" id="linkstyle2">
    <link rel="stylesheet" type="text/css" href="StylePageMobileClair.css" media="screen and (max-width: 615px)"
      id="linkstyle3">
    <link rel="icon" type="image/gif" href="Images/favicon.gif" />
    <script type="text/javascript">
      function switchStyle(style, style2, style3) {
        document.getElementById("linkstyle").setAttribute("href", style);
        document.getElementById("linkstyle2").setAttribute("href", style2);
        document.getElementById("linkstyle3").setAttribute("href", style3);
      }
    </script>
  </head>

  <body>

    <header>

      <h1 id="NomSite">Scam Discovery</h1>

    </header>

    <div id="contenu">

      <h1 style="text-align: center;">Bienvenue</h1>
      <p>Vous allez participer à un quiz </p>
      <div class="horizontal-center">
        <a href="./page_questions.php">
          <button class="button button1">Commencer</button>
        </a>
      </div>

    </div>



    <nav class="main-navigation" class="MenuMobile">
      <div class="nav-wrapper">
        <input type="checkbox" class="menu-checkbox" id="menu_checkbox" />
        <label for="menu_checkbox" class="menu-toggle"></label>
        <ul class="menu">
          <li class="EnTete"><a href="">ACCUEIL</a></li>
          <li class="EnTete">NOUS</li>
          <li><a href="">&emsp;&emsp;Ludovic Charpié</a></li>
          <li><a href="">&emsp;&emsp;Erwan Bane</a></li>
          <li><a href="">&emsp;&emsp;Contact</a></li>
          <li class="EnTete">LE METIER</li>
          <li><a href="">&emsp;&emsp;Description</a></li>
          <li><a href="">&emsp;&emsp;Plan d'études</a></li>
          <li class="EnTete">PROJETS</li>
          <li><a href="">&emsp;&emsp;Miner</a></li>
          <li><a href="">&emsp;&emsp;Kebab</a></li>
          <li><a href="">&emsp;&emsp;Activités</a></li>
          <li class="EnTete">LE CEFF</li>
          <li><a href="">&emsp;&emsp;Présentation globale</a></li>
          <li><a href="">&emsp;&emsp;Cafétéria</a></li>
          <li class="EnTete">MODULES</li>
          <li><a href="">&emsp;&emsp;Développement d'applications</a></li>
          <li><a href="">&emsp;&emsp;Développement web</a></li>
          <li><a href="">&emsp;&emsp;Système / réseau</a></li>
          <li><a href="">&emsp;&emsp;Gestion PC / logiciels</a></li>
          <li><a href="">&emsp;&emsp;Travail en entreprise</a></li>
          <li class="EnTete"><a href="">GALERIE</a></li>
        </ul>
      </div>
    </nav>

  </body>

  </html>