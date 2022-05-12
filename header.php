  <?php session_start();
  ?>

  <head>
    <link rel="stylesheet" href="css/home.css" />
  </head>

  <body>

    <section class="top-page">
      <header class="header">
        <img src="images/logo+image.png" alt="logo du site" />

        <form id="barre_recherche">

          <input type="search" name="textt" placeholder="Ecrivez pour rechercher">

          <input type="submit" class="recherche_bouton" value="" />



        </form>


        <?php
        if (isset($_SESSION['user'])) {


          echo '<nav class="nav1">

          <li>Nos meilleures ventes</li>
          
          <a href="deconnexion.php" class="btn-danger btn-lg">Déconnexion</a>

          <a href="home.php" class="btn-danger btn-lg">';
          echo $_SESSION['user'];
          echo '</a>

          <li>Panier</li> ';

          echo ' 

        </nav>
        ';
        } else {
          echo
          '<nav class="nav1">

        <li>Nos meilleures ventes</li>
        <div>
          <a href="connexion.php">
            <li>Connexion</li>
          </a>
        </div>
        <div>
          <a href="inscription.php">
            <li>Inscription</li>
          </a>
        </div>

        <li>Panier</li>

      </nav>
      ';
        };

        ?>

        <!--
        <nav class="nav1">

          <li>Nos meilleures ventes</li>
          <div>
            <a href="connexion.php">
              <li>Connexion</li>
            </a>
          </div>
          <div>
            <a href="inscription.php">
              <li>Inscription</li>
            </a>
          </div>

          <li>Panier</li>

        </nav>
      -->


      </header>
    </section>
  </body>