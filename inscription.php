<head>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css" />

</head>
<div id='formulaire_inscription'>

    <?php
    if (isset($_GET['reg_err'])) {
        $err = htmlspecialchars($_GET['reg_err']);

        switch ($err) {
            case 'success':
    ?>
                <div class="alert alert-success">
                    <strong>Succès</strong> Inscription réussie !
                </div>
            <?php
                break;
            case 'password':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe différent
                </div>
            <?php
                break;
            case 'email':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email non valide
                </div>
            <?php
                break;

            case 'email_length':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email trop long
                </div>
            <?php
                break;

            case 'pseudo_length':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> pseudo trop long
                </div>
            <?php
                break;
            case 'already':
            ?>
                <div class="alert alert-danger">
                    <strong>Succès</strong> compte déjà existant
                </div>
            <?php
                break;
        }
    }




    ?>



    <form action="inscription_config.php" method="post">
        <h2 class="text-center">Inscription</h2>
        <div class="form-group">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Inscription</button>
        </div>
    </form>
</div>