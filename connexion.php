  <head>
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <div id="formulaire_connexion">
    <?php
    if (isset($_GET['login_err'])) {
      $err = htmlspecialchars($_GET['login_err']);

      switch ($err) {
        case 'password':
    ?>
          <div class="alert alert-danger">
            <strong>Erreur</strong> mot de passe incorrect
          </div>
        <?php
          break;

        case 'email':
        ?>
          <div class="alert alert-danger">
            <strong>Erreur</strong> email incorrect
          </div>
        <?php
          break;

        case 'already':
        ?>
          <div class="alert alert-danger">
            <strong>Erreur</strong> compte non existant
          </div>
    <?php
          break;
      }
    }

    ?>
    <form action="connexion_config.php" method="post">
      <h2 class="text-center">Connexion</h2>
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
      </div>
    </form>
    <p class="text-center"><a href="inscription.php">Inscription</a></p>
  </div>